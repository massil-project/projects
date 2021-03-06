<?php

namespace Massil\ConfigBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BilanRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BilanRepository extends EntityRepository
{
	public function getBilans()
	{
		$query=$this->createQueryBuilder('b')
					->getQuery()
					->getResult();
					
		return $query;
	}
	
	public function getParams($codeBilan)
	{
		$query=$this->createQueryBuilder('b')
					->where('b.code=:code_bilan')
					->setParameter('code_bilan', $codeBilan)
					->leftJoin('b.bilanParameters', 'bp')
					->addSelect('bp')
					->leftJoin('bp.parametere', 'p')
					->addSelect('p')
					->getQuery()
					->getResult();
					
		return $query;
	}
}
