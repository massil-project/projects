<?php

namespace Massil\ConfigBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ParametereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParametereRepository extends EntityRepository
{
	public function getBilanParams($codeBilan)
	{
		$query=$this->createQueryBuilder('par')
					->leftJoin('par.bilanParameters', 'bp')
					->addSelect('bp')
					->leftJoin('bp.bilan', 'bil')
					->addSelect('bil')
					->where('bil.code=:code_bilan')
					->setParameter('code_bilan', $codeBilan)
					->getQuery()
					->getResult()
					;
					
		return $query;
	}
	public function getBilanParam($codeBilan,$codeParam)
	{
		$query=$this->createQueryBuilder('par')
					->leftJoin('par.bilanParameters', 'bp')
					->addSelect('bp')
					->leftJoin('bp.bilan', 'bil')
					->addSelect('bil')
					->where('bil.code=:code_bilan AND par.code=:code_param')
					->setParameter('code_bilan', $codeBilan)
					->setParameter('code_param', $codeParam)
					->getQuery()
					->getResult();
					
		return $query;
	}
	
	public function getParamsInArray($codeBilan)
	{
		$query=$this->createQueryBuilder('par')
					->leftJoin('par.bilanParameters', 'bp')
					->addSelect('bp')
					->leftJoin('bp.bilan', 'bil')
					->addSelect('bil')
					->where('bil.code=:code_bilan AND bp.activation=1')
					->setParameter('code_bilan', $codeBilan)
					->getQuery()
					->getArrayResult();
					
		return $query;
	}
	public function getParamsInformations()
	{
		$query=$this->createQueryBuilder('par')
					->getQuery()
					->getArrayResult();
					
		return $query;
	}
}