<?php
namespace Massil\MedicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\MedicalBundle\Form\ConsultationType;
use Massil\MedicalBundle\Form\ConsultationEditType;
use Massil\MedicalBundle\Form\ConsultationSearchType;
use Massil\MedicalBundle\Entity\Consultation;
use Massil\MedicalBundle\Entity\Patient;

class ConsultationController extends Controller
{
	public function addAction(Patient $patient,$message)
	{
		$em=$this->get('doctrine.orm.entity_manager');
		$antecedants=$em->getRepository('MassilMedicalBundle:Antecedant')
						->getPatientAntecedants($patient->getId());
		
		$consulation=new Consultation();
		
		$form=$this->createForm(new ConsultationType(), $consulation);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$patient->addConsultation($consulation);
				$em->persist($patient);
				$em->persist($consulation);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','consultation bien ajoute');
				
				return $this->redirect($this->generateUrl('medical_consultation_show',array('id'=>$consulation->getId()
																							,'message'=>'consultation_saved')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Consultation:add.html.twig',array('form'=>$form->createView()
																					,'patient'=>$patient
																					,'consultation'=>$consulation
																					,'antecedants'=>$antecedants
																					,'message'=>$message));
		
	}
	
	public function editAction(Consultation $consultation)
	{
		$patient=$consultation->getPatient();
		
		$em=$this->get('doctrine.orm.entity_manager');
		$antecedants=$em->getRepository('MassilMedicalBundle:Antecedant')
						->getPatientAntecedants($patient->getId());
						
		$form=$this->createForm(new ConsultationEditType(), $consultation);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$em->persist($consultation);
				
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','consultation modifie');
				
				return $this->redirect($this->generateUrl('medical_consultation_show',array('id'=>$consultation->getId()
																							,'message'=>'consultation_edit')));
				
			}
		}
		
		return $this->render('MassilMedicalBundle:Consultation:edit.html.twig',array('consultation'=>$consultation,
																						'form'=>$form->createView()
																						,'patient'=>$patient
																						,'antecedants'=>$antecedants));	
	}
	
	
	public function deleteAction(Consultation $consultation)
	{
		$form=$this->createFormBuilder()->getForm();
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				$em->remove($consultation);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','consultation supprime');
				
				return $this->redirect($this->generateUrl('medical_patient_show',array('id'=>$consultation->getPatient()->getId()
																						,'message'=>'consultation_delete')));
			}
		}
		
		return $this->render('MassilMedicalBundle:Consultation:delete.html.twig',array('form'=>$form->createView()
																						,'consultation'=>$consultation
																						,'patient'=>$consultation->getPatient()));
	}
	
	public function showAction(Consultation $consultation,$message)
	{
		$em=$this->get('doctrine.orm.entity_manager');
		
		$consultationInformations=$em->getRepository('MassilMedicalBundle:Consultation')
									 ->getConsultationInformations($consultation->getId());
									 
		$consultation=$consultationInformations[0];
		
		$patient=$consultation->getPatient();
		
		$examen=$consultation->getExamen();
		
		$ordonnance=$consultation->getOrdonnance();
									 
		return $this->render('MassilMedicalBundle:Consultation:show.html.twig',array('consultation'=>$consultation
																					,'patient'=>$patient
																					,'examen'=>$examen
																					,'ordonnance'=>$ordonnance
																					,'message'=>$message));
	}
	
	public function jourAction()
	{
		$em=$this->get('doctrine.orm.entity_manager');
		$consultations=	$em->getRepository('MassilMedicalBundle:Consultation')
							->getConsultationsDuJour();
		
		return $this->render('MassilMedicalBundle:Consultation:jour.html.twig',array('consultations'=>$consultations));
	}
	
	public function searchAction()
	{
		$consulation = new Consultation();
		$consulation->setDate(null);
		
		$form = $this->createForm(new ConsultationSearchType(),$consulation);
		
		$request= $this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em= $this->get('doctrine.orm.entity_manager');
				
				$date= date_create_from_format('d/m/Y',$consulation->getDate());
				$date = $date->format('d-m-Y');
			
				$consultations = $em->getRepository('MassilMedicalBundle:Consultation')
									->getConsultationsDuJour($consulation->getDate());
									
				
				return $this->render('MassilMedicalBundle:Consultation:jour.html.twig',array('consultations'=>$consultations
																							,'dateDuJour'=>$date));
			}
		}
		
		return $this->render('MassilMedicalBundle:Consultation:search.html.twig',array('form'=>$form->createView()));
	}
}