<?php
namespace Massil\MedicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\MedicalBundle\Entity\Consultation;
use Massil\MedicalBundle\Entity\Patient;
use Massil\MedicalBundle\Entity\Antecedant;
use Massil\MedicalBundle\Form\AntecedantType;


class AntecedantController extends Controller
{
	public function addAction(Patient $patient)
	{
		$antecedant=new Antecedant();
		
		$form=$this->createForm(new AntecedantType, $antecedant);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$patient->addAntecedant($antecedant);
				$em->persist($patient);
				$em->persist($antecedant);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','antecedant ajoute');
				
				return $this->redirect($this->generateUrl('medical_consultation_add',array('id'=>$patient->getId()
																							,'message'=>'antecedant_saved')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Antecedant:add.html.twig',array('form'=>$form->createView()
																					,'patient'=>$patient));
	}
	
	public function editAction(Antecedant $antecedant)
	{
		$patient=$antecedant->getPatient();
		$form=$this->createForm(new AntecedantType(),$antecedant);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$em->persist($antecedant);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','antecedant modifie');
				
				return $this->redirect($this->generateUrl('medical_consultation_add',array('id'=>$patient->getId()
																							,'message'=>'antecedant_edit')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Antecedant:edit.html.twig',array('form'=>$form->createView()
																					,'patient'=>$patient));
	}
	
	public function deleteAction(Antecedant $antecedant)
	{
		$patient=$antecedant->getPatient();
		
		$form=$this->createFormBuilder()->getForm();
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$em->remove($antecedant);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','antecedant supprimee');
				
				return $this->redirect($this->generateUrl('medical_consultation_add',array('id'=>$patient->getId()
																							,'message'=>'antecedant_delete')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Antecedant:delete.html.twig',array('form'=>$form->createView()
																					,'antecedant'=>$antecedant
																					,'patient'=>$patient));
	}
}