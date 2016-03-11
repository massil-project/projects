<?php
namespace Massil\MedicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\MedicalBundle\Entity\Antecedant;
use Massil\MedicalBundle\Entity\Patient;
use Massil\MedicalBundle\Entity\SalleAttente;
use Massil\MedicalBundle\Entity\PatientSalleAttente;
use Massil\MedicalBundle\Form\SalleAttenteType;


class SalleController extends Controller
{
	public function showAction($page,$message)
	{
		$em = $this->get('doctrine.orm.entity_manager');
		
		$todaySalleAttente = $em->getRepository('MassilMedicalBundle:SalleAttente')
								->getSalleAttente();
								
		if (empty($todaySalleAttente))
		{
			$salleAttente = new SalleAttente();

			$em->persist($salleAttente);
			$em->flush();
		}
		else 
		{
			$salleAttente = $todaySalleAttente[0];
		}
		
		
		$patients = $em->getRepository('MassilMedicalBundle:Patient')
						->getPatientsInSalleAttente($page);
						
		$numberPages = ceil(count($patients)/20);
						
		$date = $salleAttente->getDate();
		$date = $date->format('d.m.Y');
		
		
		return $this->render('MassilMedicalBundle:Salle:show.html.twig',array('patients'=>$patients
																				,'dateDuJour'=>$date
																				,'message'=>$message
																				,'page'=>$page
																				,'numberPages'=>$numberPages));
	}
	
	public function addAction(Patient $patient)
	{
		$em = $this->get('doctrine.orm.entity_manager');
		
		$todaySalleAttente = $em->getRepository('MassilMedicalBundle:SalleAttente')
								->getSalleAttente();
								
		if (empty($todaySalleAttente))
		{
			$salleAttente = new SalleAttente();		
		}
		else 
		{
			$isPatientInSalle = $em->getRepository('MassilMedicalBundle:Patient')
									->IsPatientInSalle($patient->getId());
									
			if (!empty($isPatientInSalle))
			{
				return $this->redirect($this->generateUrl('medical_patient_home',array('message'=>'patient_exist')));
			}
			$salleAttente = $todaySalleAttente[0];
		}
		
		$em->persist($salleAttente);
		$em->flush();
		
		$patientSalleAttente = new PatientSalleAttente();
		
		
		$patientSalleAttente->setPatient($patient);
		$patientSalleAttente->setSalleAttente($salleAttente);
		
		$em->persist($patientSalleAttente);
		$em->flush();
		
		return $this->redirect($this->generateUrl('medical_salle_show'));
	}
	
	
	public function changeStateAction(Patient $id,$change)
	{
		$em = $this->get('doctrine.orm.entity_manager');
		
		$patientInfo = $em->getRepository('MassilMedicalBundle:Patient')
							->getPS($id->getId());
							
		$patientSalleAttentes = $patientInfo[0]->getPatientSalleAttentes();
		
		$patientSalleAttente = $patientSalleAttentes[0];
		
		if ($change == 'passer')
		{
			$patientSalleAttente->setEtatPatient('pass&eacute;');		
		}							
		elseif ($change == 'annuler')
		{
			$patientSalleAttente->setEtatPatient('annul&eacute;');
		}
		elseif ($change == 'attente')
		{
			$patientSalleAttente->setEtatPatient('en attente');
		}
		
		$em->persist($patientSalleAttente);
		$em->flush();
		
		return $this->redirect($this->generateUrl('medical_salle_show'));
	}
	
	public function searchAction()
	{
		$salleAttente = new SalleAttente();
		
		$salleAttente->setDate(null);
		
		$em = $this->get('doctrine.orm.entity_manager');
			
		$form = $this->createForm(new SalleAttenteType(),$salleAttente);
		
		$request = $this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{	
				$date = \DateTime::createFromFormat('d/m/Y',$salleAttente->getDate());
				$date = $date->format('d.m.Y');
				
				$patients = $em->getRepository('MassilMedicalBundle:Patient')
								->getPatientsInSalleAttente($salleAttente->getDate());
								
				return $this->render('MassilMedicalBundle:Salle:show.html.twig',array('patients'=>$patients
																						,'dateDuJour'=>$date));
				
			}
		}
		
		return $this->render('MassilMedicalBundle:Salle:search.html.twig',array('form'=>$form->createView()));
	}
}