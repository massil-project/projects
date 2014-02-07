<?php

namespace Massil\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ExamenController extends Controller
{
	public function addAction()
	{
		$em=$this->get('doctrine.orm.entity_manager');
		
		$examen = new Examen();
		
		$form=$this->createForm(new ExamenType(),$examen);
		
		$request=$this->getRequest();
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			$data=$form->getData();
			
			if ($data->getGeneraleActivation() == "false")
			{
				$generaleActivation=false;
			}
			else 
			{
				$generaleActivation=true;
			}
			$examen->setGeneraleActivation($generaleActivation);
			$em->persist($examen);
			$em->flush();
		
		return $this->render('MassilConfigBundle:examen:examen.html.twig',array('form'=>$form->createView()
																				));			
		}
		
		return $this->render('MassilConfigBundle:examen:examen.html.twig',array('form'=>$form->createView()));
	}
	public function editAction()
	{
		$em=$this->get('doctrine.orm.entity_manager');
		
		$examen = $em->getRepository('MassilConfigBundle:Examen')
					->find(6);
					
		$form=$this->createForm(new ExamenEditType($examen),$examen);
		
		return $this->render('MassilConfigBundle:examen:examen.html.twig',array('form'=>$form->createView()));
	}
	public function deleteAction()
	{
		$em=$this->get('doctrine.orm.entity_manager');
		
		$examen = $em->getRepository('MassilConfigBundle:Examen')
					->find(4);
					
		$em->remove($examen);
		$em->flush();
		
		return $this->redirect($this->generateUrl('medical_patient_home'));
	}
}
