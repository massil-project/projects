<?php

namespace Massil\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\ConfigBundle\Entity\Bilan;
use Massil\ConfigBundle\Entity\BilanParameter;
use Massil\ConfigBundle\Entity\Parametere;
use Massil\ConfigBundle\Form\ParamType;

class BilanController extends Controller
{
	public function setParametersAction()
	{	
		$em = $this->get('doctrine.orm.entity_manager');
		$params=$em->getRepository('MassilConfigBundle:Parametere')
					->getBilanParams('B01');
					
		$form=$this->createForm(new ParamType($params));
		
		$request=$this->getRequest();
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			$data = $form->getData();
			
			foreach ($params as $param)
			{
				/**
				$getParamToSet = $em->getRepository('MassilConfigBundle:Parametere')
									->getBilanParam('B01',$param->getCode());
									
				$paramCode = $param->getCode();
									
				$bilanParams = $getParamToSet[0]->getBilanParameters();
				$activationStatus=$bilanParams[0]->setActivation($data[$paramCode]);
				
				$em->persist($activationStatus);
				$em->flush();
				**/
				
				$bilanParams = $param->getBilanParameters();
				$activationStatus=$bilanParams[0]->setActivation($data[$param->getCode()]);
				
				$em->persist($activationStatus);
				$em->flush();
			}
			
			return $this->redirect($this->generateUrl('medical_patient_home'));
		}
		
		/**
		$bilan=new Bilan('B01', 'bilan general');
		
		$param1=new Parametere('P01', 'taille');
		$param2=new Parametere('P02', 'poids');
		$param3=new Parametere('P03', 'tension');
		
		$em->persist($bilan);
		$em->persist($param1);
		$em->persist($param2);
		$em->persist($param3);
		
		$em->flush();
		
		$bilanParam1=new BilanParameter();
		$bilanParam1->setActivation(FALSE);
		$bilanParam1->setBilan($bilan);
		$bilanParam1->setParametere($param1);

		$bilanParam2=new BilanParameter();
		$bilanParam2->setActivation(FALSE);
		$bilanParam2->setBilan($bilan);
		$bilanParam2->setParametere($param2);
		
		$bilanParam3=new BilanParameter();
		$bilanParam3->setActivation(FALSE);
		$bilanParam3->setBilan($bilan);
		$bilanParam3->setParametere($param3);
		
		$em->persist($bilanParam1);
		$em->persist($bilanParam2);
		$em->persist($bilanParam3);
		
		$em->flush();
		**/
	
		
		return $this->render('MassilConfigBundle:Bilan:bilan.html.twig',array('params'=>$params
																				,'form'=>$form->createView()));
	}
	
	public function paramAction()
	{
		$params=$this->get('doctrine.orm.entity_manager')
					->getRepository('MassilConfigBundle:Parametere')
					->getParamsInArray();
					
		return $this->render('MassilConfigBundle:Test:test.html.twig',array('params'=>$params));
	}
}
