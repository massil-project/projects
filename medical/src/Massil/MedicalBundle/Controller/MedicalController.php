<?php
namespace Massil\MedicalBUndle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Massil\MedicalBundle\Entity\Recherche;
use Massil\MedicalBundle\Entity\RechercheAvance;
use Massil\MedicalBundle\Form\RechercheType;
use Massil\MedicalBundle\Form\RechercheAvanceType;



class MedicalController extends Controller
{
	public function indexAction($page)
	{
		return $this->render('MassilMedicalBundle:Medical:index.html.twig');
	}
	
	public function searchAction()
	{
		$recherche=new Recherche();
		
		$form=$this->createForm(new RechercheType(),$recherche); 
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				return $this->redirect($this->generateUrl('medical_patient_home'));
			}
			
		}
		
		return $this->render('MassilMedicalBundle:Medical:search-form.html.twig',array('form'=>$form->createView()));
	}
	
	public function rechercheAction()
	{
		$recherche=new Recherche();
		
		$form=$this->createForm(new RechercheType(),$recherche);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$em->persist($recherche);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info','recherche effectue');
				
				$results=$em->getRepository('MassilMedicalBundle:Patient')
							->getSearch($recherche->getSearch());
							
				return $this->render('MassilMedicalBundle:Patient:index.html.twig',array('patients'=>$results
																						,'filter'=>'dateAjout'
																						,'direction'=>'down'
																						,'message'=>'recherche'
																						));
			}
		}
		
		return $this->redirect($this->generateUrl('medical_patient_home'));
	}
	
	public function rechercheAvanceAction()
	{
		$rechercheAvance= new RechercheAvance();
		
		$form=$this->createForm(new RechercheAvanceType(),$rechercheAvance);
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em=$this->get('doctrine.orm.entity_manager');
				
				$em->persist($rechercheAvance);
				$em->flush();
				
					
				$this->get('session')->getFlashBag()->add('info','recherche effectue');
					
				$results=$em->getRepository('MassilMedicalBundle:Patient')
							->getSearch($rechercheAvance->getSearch()
										,$rechercheAvance->getAge()
										,$rechercheAvance->getDate()
										,$rechercheAvance->getSexe()
										,$rechercheAvance->getAssurance()
										,$rechercheAvance->getEtatCivil());
							
				return $this->render('MassilMedicalBundle:Patient:index.html.twig',array('patients'=>$results
																						,'filter'=>'dateAjout'
																						,'direction'=>'down'
																						,'message'=>'recherche'
																						));
			}
		}
		
		return $this->render('MassilMedicalBundle:Medical:recherche.html.twig',array('form'=>$form->createView()));
	}
}