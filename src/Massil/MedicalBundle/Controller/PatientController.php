<?php
namespace Massil\MedicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\MedicalBundle\Entity\Antecedant;
use Massil\MedicalBundle\Entity\Patient;
use Massil\MedicalBundle\Form\PatientType;
use Massil\MedicalBundle\Form\PatientEditType;
use Massil\MedicalBundle\Entity\Consultation;


class PatientController extends Controller
{
	public function indexAction($page,$message,$filter,$direction)
	{	
		
		$em=$this->get('doctrine.orm.entity_manager');
		
		$patients=$em->getRepository('MassilMedicalBundle:Patient')
					->getAllPatients($page,$filter,$direction);
					
		$namberPages = ceil(count($patients)/20);
					
		
		return $this->render('MassilMedicalBundle:Patient:index.html.twig',array('patients'=>$patients
																				,'filter'=>$filter
																				,'direction'=>$direction
																				,'message'=>$message
																				,'numberPages'=>$namberPages
																				,'page'=>$page));
	}
	
	
	public function addAction()
	{
		$patient=new Patient();
		
		$form=$this->createForm(new PatientType(),$patient);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				$em->persist($patient);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','Patient bien ajouté');
				
				return $this->redirect($this->generateUrl('medical_patient_show',array('id'=>$patient->getId()
																						,'message'=>'patient_saved')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Patient:add.html.twig',array('form'=>$form->createView()
																				,'formType'=>'add'));
	}
	
	public function editAction(Patient $patient)
	{
		$form=$this->createForm(new PatientEditType(),$patient);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em = $this->get('doctrine.orm.entity_manager');
								
				$dateNaissance = $patient->getDateNaissance();
				
				$date = gettype($dateNaissance);
				
				
				$em->persist($patient);
				
				$em->flush();
				
				
				$this->get('session')->getFlashBag()->add('info','Patient bien modifié');
				
				return $this->redirect($this->generateUrl('medical_patient_show',array('id'=>$patient->getId()
																						,'message'=>'patient_edit'
																						)));
			}
			
		}
		return $this->render('MassilMedicalBundle:Patient:edit.html.twig',array('form'=>$form->createView()
																					,'patient'=>$patient
																					,'formType'=>'edit'));
	}
	
	public function showAction(Patient $patient,$page,$message)
	{
		$em=$this->get('doctrine.orm.entity_manager');
								
		$consultations=$em->getRepository('MassilMedicalBundle:Consultation')
							->getPatientConsultations($patient->getId(),5,$page);
		
		$numberPerPages=ceil(count($consultations)/5);
		
		return $this->render('MassilMedicalBundle:Patient:show.html.twig',array('patient'=>$patient
																				,'page'=>$page
																				,'consultations'=>$consultations
																				,'numberPages'=>$numberPerPages
																				,'message'=>$message));
	}
	
	public function deleteAction(Patient $patient)
	{
		$form=$this->createFormBuilder()->getForm();
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				$em->remove($patient);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','patient bien supprime');
				
				return $this->redirect($this->generateUrl('medical_patient_home',array('message'=>'patient_delete')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Patient:delete.html.twig',array('form'=>$form->createView()
																					,'patient'=>$patient));
	}
}