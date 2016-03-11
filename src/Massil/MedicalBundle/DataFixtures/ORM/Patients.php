<?php
namespace Massil\MedicalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Massil\MedicalBundle\Entity\Patient;
use Massil\MedicalBundle\Entity\Antecedant;

class Patients implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$patients=array(array(	'nom'=>'talbi'
								,'prenom'=>'ahmed'
								,'dateNaissance'=>new \DateTime()
								,'sexe'=>'male')
						,array(	'nom'=>'smail'
								,'prenom'=>'djamel'
								,'dateNaissance'=>new \DateTime()
								,'sexe'=>'male')
						,array(	'nom'=>'deguiche'
								,'prenom'=>'djamila'
								,'dateNaissance'=>new \DateTime()
								,'sexe'=>'femele')
					);
		
		foreach ($patients as $i=>$patient)
		{
			$list_patients[$i]=new Patient();
			$list_patients[$i]->setNom($patient['nom']);
			$list_patients[$i]->setPrenom($patient['prenom']);
			$list_patients[$i]->setDateNaissance($patient['dateNaissance']);
			$list_patients[$i]->setSexe($patient['sexe']);
			
			$manager->persist($list_patients[$i]);
		}
		
		$manager->flush();
	}
}