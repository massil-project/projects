<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ConsultationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConsultationRepository extends EntityRepository
{
	public function getPatientConsultations($id,$numberPerPage,$page)
	{
		if ($page<1)
		{
			throw new \InvalidArgumentException('Inexistant');
		}
		
		$query=$this->createQueryBuilder('c')
					->where('c.patient = :id')
					->setParameter('id', $id)
					->orderBy('c.date','DESC')
					->getQuery();
					
		$query->setFirstResult(($page-1)*$numberPerPage);
		$query->setMaxResults($numberPerPage);
		
		return new Paginator($query);
	}
	
	public function getConsultationInformations($id)
	{
		$query=$this->createQueryBuilder('c')
					->where('c.id = :id')
					->setParameter('id', $id)
					->leftJoin('c.examen', 'e')
					->addSelect('e')
					->leftJoin('c.ordonnance', 'o')
					->addSelect('o')
					->leftJoin('c.patient', 'p')
					->addSelect('p')
					->getQuery()
					->getResult();
					
		return $query;
	}
	
	public function getConsultationsDuJour($date = NULL)
	{
		if ($date == null)
		{
			$dayStart = new \DateTime();
			$dayStart->setTime('00', '00','00');
			$dayStart = $dayStart->format('Y-m-d H:i:s');
			
			$dayEnd = new \DateTime();
			$dayEnd->setTime('23', '59','59');
			$dayEnd = $dayEnd->format('Y-m-d H:i:s');
		}
		else
		{
			$dayStart = date_create_from_format('d/m/Y',$date);
			$dayStart = date_time_set($dayStart,'00','00','00');
			$dayStart = $dayStart->format('Y-m-d H:i:s');
			
			$dayEnd = date_create_from_format('d/m/Y',$date);
			$dayEnd = date_time_set($dayEnd,'23','59','59');
			$dayEnd = $dayEnd->format('Y-m-d H:i:s');
		} 
		
		$query=$this->createQueryBuilder('c')
					->where('c.date BETWEEN :day_start AND :day_end')
					->setParameter(':day_start', $dayStart)
					->setParameter(':day_end', $dayEnd)
					->leftJoin('c.patient', 'p')
					->addSelect('p')
					->orderBy('c.date','DESC')
					;
					
		return $query->getQuery()
					->getResult();
	}
}