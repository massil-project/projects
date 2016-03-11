<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\AntecedantRepository")
 */
class Antecedant
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="dateajoute",type="datetime")
     */
    private $dateAjoute;
    
    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="Massil\MedicalBundle\Entity\Patient",inversedBy="Antecedants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;


    /**
     * constructor
     */
    public function __construct()
    {
    	$this->dateAjoute=new \DateTime();
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
     * Set type
     *
     * @param string $type
     * @return Antecedant
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Antecedant
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set patient
     *
     * @param \Massil\MedicalBundle\Entity\Patient $patient
     * @return Antecedant
     */
    public function setPatient(\Massil\MedicalBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Massil\MedicalBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set dateAjoute
     *
     * @param \DateTime $dateAjoute
     * @return Antecedant
     */
    public function setDateAjoute($dateAjoute)
    {
        $this->dateAjoute = $dateAjoute;

        return $this;
    }

    /**
     * Get dateAjoute
     *
     * @return \DateTime 
     */
    public function getDateAjoute()
    {
        return $this->dateAjoute;
    }
}
