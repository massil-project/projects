<?php

namespace Massil\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\ConfigBundle\Entity\Parametere;
use Massil\ConfigBundle\Entity\Bilan;
use Massil\ConfigBundle\Entity\BilanParameter;
use Massil\ConfigBundle\Form\ParamType;



class ParamController extends Controller
{
    public function initAction()
    {
    	$em=$this->get('doctrine.orm.entity_manager');
    	
    	//remove all bilanParameters
    	$bilanParametersToRemove = $em->getRepository('MassilConfigBundle:BilanParameter')
    									->findAll();
    	
    	foreach ($bilanParametersToRemove as $bp)
    	{
    		$em->remove($bp);
    	}
    	$em->flush();
    	
    	//remove all bilans
    	$bilanToRemove=$em->getRepository('MassilConfigBundle:Bilan')
    						->findAll();
    						
    	foreach ($bilanToRemove as $bTR)
    	{
    		$em->remove($bTR);
    	}
    	
    	//remove all parameters
    	$paramsToRemove = $em->getRepository('MassilConfigBundle:Parametere')
    						->findAll();
    						
    	foreach ($paramsToRemove as $param)
    	{
    		$em->remove($param);
    	}
    	$em->flush();
    	
    	//initialize the parameters using arrays
    	// this section is array of bilans in system
    	$bilans = array(array(	'code'=>'B01'
    							,'nom'=>'bilan general')
    					);
    	//array of parameters
    	$parameters = array(// temps de saignement (minutes) Technique de Duke
    						array('code'=>'P01'
    								,'nom'=>'Temps de saignement Duke'
    								,'unite'=>'min')
    								
    						// temps de saignement (minutes) Technique d'Ivy
    						,array('code'=>'P02'
    								,'nom'=>'Temps de saignement Ivy'
    								,'unite'=>'min')
    								
    						//	Temps de Prothrombine/ INR (%)
    						,array('code'=>'P03'
    								,'nom'=>'Temps de Prothrombine INR'
    								,'unite'=>'%')
    								
    						//Temps de Céphaline activé (TCA) (secondes)
    						,array('code'=>'P04'
    								,'nom'=>'Temps de C&eacute;phaline activ&eacute; TCA'
    								,'unite'=>'sec')
    						
    						//-	Fibrinogéne (g/l)
    						,array('code'=>'P05'
    								,'nom'=>'Fibrinog&eacute;ne'
    								,'unite'=>'g/l')
    								
    						//-	Facteurs antihémophiliques A et B (%)
    						,array('code'=>'P06'
    								,'nom'=>'Facteurs antih&eacute;mophiliques : Facteur VIII'
    								,'unite'=>'%')
    								
    						,array('code'=>'P07'
    								,'nom'=>'Facteurs antih&eacute;mophiliques : Facteur IX'
    								,'unite'=>'%')
    								
    						//-	Héparinémie (UI/ml)
    						,array('code'=>'P08'
    								,'nom'=>'H&eacute;parin&eacute;mie'
    								,'unite'=>'UI/ml')
    								
    						//-	Anti-thrombine III (g/l)
    						,array('code'=>'P09'
    								,'nom'=>'Anti-thrombine III : Dosage'
    								,'unite'=>'g/l')
    						//-	Anti-thrombine III (%)
    						,array('code'=>'P10'
    								,'nom'=>'Anti-thrombine III : Activit&eacute;'
    								,'unite'=>'%')
    								
    						//-	Protéine C / protéine S mg/l
    						,array('code'=>'P11'
    								,'nom'=>'Prot&eacute;ine C/prot&eacute;ine S'
    								,'unite'=>'mg/l')
    						);				
    						
    	
    	//save the bilans and parameters in database
    	
    	foreach ($bilans as $bilan)
    	{
    		$codeBilan = $bilan['code'];
    		$nomBilan = $bilan['nom'];
    		
    		$bilanEntity = new Bilan($codeBilan, $nomBilan);
    		$em->persist($bilanEntity);
    		
    		foreach ($parameters as $parameter)
    		{
    			$codePrameter = $parameter['code'];
    			$nomParameter = $parameter['nom'];
    			$uniteParameter = $parameter['unite'];
    			
    			$parameterEntity = new Parametere($codePrameter, $nomParameter, $uniteParameter);
    			
    			$em->persist($parameterEntity);
    		}
    	}
		$em->flush();	
    	
    	
    	//save bilan and parameters foreign keys
    	$savedBilans = $em->getRepository('MassilConfigBundle:Bilan')
    						->findAll();
    						
    	$savedParams = $em->getRepository('MassilConfigBundle:Parametere')
    						->findAll();
    						
    	foreach ($savedBilans as $sb)
    	{
    		foreach ($savedParams as $sp)
    		{
    			$bilanParamEntity = new BilanParameter();
    			$bilanParamEntity->setActivation(FALSE);
    			$bilanParamEntity->setBilan($sb);
    			$bilanParamEntity->setParametere($sp);
    			
    			$em->persist($bilanParamEntity);
    		}
    	}
    	$em->flush();
		
    	return $this->redirect($this->generateUrl('medical_patient_home'));
    }
	
    public function setBilanAction($bilan)
    {
    	if ($bilan == 'general')
    	{
    		$bilanCode='B01';
    		$bilanName='Bilan G&eacute;n&eacute;ral';
    	}
    	
    	$em = $this->get('doctrine.orm.entity_manager');
		$params=$em->getRepository('MassilConfigBundle:Parametere')
					->getBilanParams($bilanCode);
					
		$form=$this->createForm(new ParamType($params));
		
		$request=$this->getRequest();
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			$data = $form->getData();
			
			foreach ($params as $param)
			{	
				$bilanParams = $param->getBilanParameters();
				$activationStatus=$bilanParams[0]->setActivation($data[$param->getCode()]);
				
				$em->persist($activationStatus);
				$em->flush();
			}
			
			return $this->redirect($this->generateUrl('medical_patient_home'));
		}
		
		return $this->render('MassilConfigBundle:Bilan:bilan.html.twig',array('form'=>$form->createView()
																				,'bilan'=>$bilanName));
    	
    }
    
    public function testAction()
    {
    	$em=$this->get('doctrine.orm.entity_manager');

    	$paramsInfo=$em->getRepository('MassilConfigBundle:Parametere')
    					->getParamsInArray('B01');
    					
    	$unites = array();
    	foreach ($paramsInfo as $unite)
    	{
    		array_push($unites, $unite['unite']);
    	}
    					
    	return $this->render('MassilConfigBundle:Test:test.html.twig',array('unites'=>$unites));
    }
}
