<?php
namespace Massil\MedicalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Massil\MedicalBundle\Entity\Antecedant;

class Antecedants implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$antecedants=array(array(
								'type'=>'chirurgicaux'
								,'contenu'=>'operation de la cheville en 2011')
							,array('type'=>'clinique','contenu'=>'default de la maison'));
		
		foreach ($antecedants as $i=>$antecedant)
		{
			$list_antecedants[$i]= new Antecedant();
			$list_antecedants[$i]->setType($antecedant['type']);
			$list_antecedants[$i]->setContenu($antecedant['contenu']);
			
			$manager->persist($list_antecedants[$i]);
		}
		
		$manager->flush();
	}
}