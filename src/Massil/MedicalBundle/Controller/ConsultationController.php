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
		
		/**
		 * antecedants have been deleted
		 * 
		$antecedants=$em->getRepository('MassilMedicalBundle:Antecedant')
						->getPatientAntecedants($patient->getId());
		*
		**/
		
		$bilanGeneralParams=array();
		$paramsB01 = $em->getRepository('MassilConfigBundle:Parametere')
					->getParamsInArray('B01');
					
		foreach ($paramsB01 as $param)
		{
			array_push($bilanGeneralParams, $param['code']);
		}
		
		$unitesBilanGeneral=array();
		
		foreach ($paramsB01 as $param)
		{
			$unitesBilanGeneral[$param['code']]=html_entity_decode($param['unite']);
		}
					
		$consulation=new Consultation();
		
		$form=$this->createForm(new ConsultationType($bilanGeneralParams,true,false), $consulation);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$data=$form->getData();
				$bilanGeneralActivation=$data->getExamen()->getBilanGeneralActive();
				if ($bilanGeneralActivation == "false")
				{
					$consulation->getExamen()->setBilanGeneralActive(false);
				}
				else 
				{
					$consulation->getExamen()->setBilanGeneralActive(true);					
				}
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
																					,'message'=>$message
																					,'unites'=>$unitesBilanGeneral));
		
	}
	
	public function editAction(Consultation $consultation)
	{
		$em=$this->get('doctrine.orm.entity_manager');
		$patient=$consultation->getPatient();
		
		//get parameters of bilan general
		$bilanGeneralParams=array();
		$paramsB01 = $em->getRepository('MassilConfigBundle:Parametere')
					->getParamsInArray('B01');
		
		//save unities of measurments in an array
		$unitesBilanGeneral=array();
		
		foreach ($paramsB01 as $param)
		{
			$unitesBilanGeneral[$param['code']]=html_entity_decode($param['unite']);
		}
		
		//save bilan general parameters codes in array to constuct the forms
		foreach ($paramsB01 as $param)
		{
			array_push($bilanGeneralParams, $param['code']);
		}
		
		/**
		 * 
		 * antecedants have been deleted
		 * 
		 * 
		$em=$this->get('doctrine.orm.entity_manager');
		$antecedants=$em->getRepository('MassilMedicalBundle:Antecedant')
						->getPatientAntecedants($patient->getId());
						
		**/
						
		$form=$this->createForm(new ConsultationEditType($bilanGeneralParams,true,$consultation->getExamen()->getBilanGeneralActive()), $consultation);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$data=$form->getData();
				$bilanGeneralActivation=$data->getExamen()->getBilanGeneralActive();
				if ($bilanGeneralActivation == "false")
				{
					$consultation->getExamen()->setBilanGeneralActive(false);
				}
				else 
				{
					$consultation->getExamen()->setBilanGeneralActive(true);					
				}
				
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
																						,'unites'=>$unitesBilanGeneral));	
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