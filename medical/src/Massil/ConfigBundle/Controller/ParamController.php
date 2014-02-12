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
    	$parameters = array(//start with hemosatse params
    						// temps de saignement (minutes) Technique de Duke
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
    						//end of hemostase params
    						// start of FNS params
    						//-	Hématie (millions/mm3)
    						,array('code'=>'P12'
    								,'nom'=>'H&eacute;matie'
    								,'unite'=>'/mm&sup3;')
    						//-	Hémoglobine (g/100 ml)
    						,array('code'=>'P13'
    								,'nom'=>'H&eacute;moglobine'
    								,'unite'=>'g/100 ml')
    						//-	Hématocrite (%)
    						,array('code'=>'P14'
    								,'nom'=>'H&eacute;matocrite'
    								,'unite'=>'%')
    						//-	VGM (µ3)
    						,array('code'=>'P15'
    								,'nom'=>'VGM'
    								,'unite'=>'&micro;&sup3;')
    						//-	TCMH (pg)
    						,array('code'=>'P16'
    								,'nom'=>'TCMH'
    								,'unite'=>'&rho;g')
    						//-	CCMH (%)
    						,array('code'=>'P17'
    								,'nom'=>'CCMH'
    								,'unite'=>'%')
    						//-	Leucocytes (/mm3×1000)
    						,array('code'=>'P18'
    								,'nom'=>'Leucocytes'
    								,'unite'=>'/mm&sup3;x1000')
    						//-	Réticulocytes (%)
    						,array('code'=>'P19'
    								,'nom'=>'R&eacute;ticulocytes'
    								,'unite'=>'%')
    						//-	Polynucléaires Neutrophiles (%)
    						,array('code'=>'P20'
    								,'nom'=>'Polynucl&eacute;aires Neutrophiles'
    								,'unite'=>'%')
    						//-	Polynucléaires Eosinophiles (%)
    						,array('code'=>'P21'
    								,'nom'=>'Polynucl&eacute;aires Eosinophiles'
    								,'unite'=>'%')
    						//-	Polynucléaires Basophiles (%)
    						,array('code'=>'P22'
    								,'nom'=>'Polynucl&eacute;aires Basophiles'
    								,'unite'=>'%')
    						//-	Lymphocytes (%)
    						,array('code'=>'P23'
    								,'nom'=>'Lymphocytes'
    								,'unite'=>'%')
    						//-	Monocytes (%)
    						,array('code'=>'P24'
    								,'nom'=>'Monocytes'
    								,'unite'=>'%')
    						//-	Plaquettes (/mm3)
    						,array('code'=>'P25'
    								,'nom'=>'Plaquettes'
    								,'unite'=>'/mm&sup3;')
    						//-	Hémoglobines plasmatique (50mg/l)
    						,array('code'=>'P26'
    								,'nom'=>'H&eacute;moglobines plasmatique'
    								,'unite'=>'mg/l')
    						//-	Hémoglobines glyquée ou glycosylée HbA1C (%)
    						,array('code'=>'P27'
    								,'nom'=>'H&eacute;moglobines glyquée HbA1C'
    								,'unite'=>'%')
    						//-	Vitesse de sédimentation (mm)
    						,array('code'=>'P28'
    								,'nom'=>'Vitesse de s&eacute;dimentation VS'
    								,'unite'=>'mm')
    						//o	Proérythroblaste
    						,array('code'=>'P29'
    								,'nom'=>'Pro&eacute;rythroblaste'
    								,'unite'=>'%')
    						//o	Erythroblaste basophile
    						,array('code'=>'P30'
    								,'nom'=>'Erythroblaste basophile'
    								,'unite'=>'%')
    						//o	Erythroblaste polychromatophile
    						,array('code'=>'P31'
    								,'nom'=>'Erythroblaste polychromatophile'
    								,'unite'=>'%')
    						//o	Erythroblaste acidophile
    						,array('code'=>'P32'
    								,'nom'=>'Erythroblaste acidophile'
    								,'unite'=>'%')
    						//o	Myéloblaste
    						,array('code'=>'P33'
    								,'nom'=>'My&eacute;loblaste'
    								,'unite'=>'%')
    						//o	Promyélocyte
    						,array('code'=>'P34'
    								,'nom'=>'Promy&eacute;locyte'
    								,'unite'=>'%')
    						//o	Myélocyte neutrophile
    						,array('code'=>'P35'
    								,'nom'=>'My&eacute;locyte neutrophile'
    								,'unite'=>'%')
    						//o	Métamyélocyte neutrophile
    						,array('code'=>'P36'
    								,'nom'=>'M&eacute;tamy&eacute;locyte neutrophile'
    								,'unite'=>'%')
    						//oPolynucléaire
    						,array('code'=>'P37'
    								,'nom'=>'Polynucl&eacute;aire'
    								,'unite'=>'%')
    						//o	Plasmocytes
    						,array('code'=>'P38'
    								,'nom'=>'Plasmocytes'
    								,'unite'=>'%')
    						//-	Mégacaryocytaire 
    						,array('code'=>'P39'
    								,'nom'=>'M&eacute;gacaryocytaire '
    								,'unite'=>'%')
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
