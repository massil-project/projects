<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RechercheAvance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\RechercheAvanceRepository")
 */
class RechercheAvance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="search", type="string", length=255, nullable=true)
     */
    private $search;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="etatCivil", type="string", length=255, nullable=true)
     */
    private $etatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="assurance", type="boolean", nullable=true)
     */
    private $assurance;


    /**
     * constructor
     */
    public function __construct()
    {
    	$this->date=new \DateTime();
    }
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set search
     *
     * @param string $search
     * @return RechercheAvance
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get search
     *
     * @return string 
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return RechercheAvance
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return RechercheAvance
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etatCivil
     *
     * @param string $etatCivil
     * @return RechercheAvance
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil
     *
     * @return string 
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return RechercheAvance
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set assurance
     *
     * @param boolean $assurance
     * @return RechercheAvance
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return boolean 
     */
    public function getAssurance()
    {
        return $this->assurance;
    }
}
