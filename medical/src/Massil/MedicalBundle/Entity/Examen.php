<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\ExamenRepository")
 */
class Examen
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
     * @ORM\Column(name="clinique", type="text", nullable=true)
     */
    private $clinique;

    /**
     * @var string
     *
     * @ORM\Column(name="paraclinique", type="text", nullable=true)
     */
    private $paraclinique;
    
    /**
     * Constructor
     */
    public function __construct()
    {
    	$this->clinique = '<p>jnjhb</p>';
    	
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
     * Set clinique
     *
     * @param string $clinique
     * @return Examen
     */
    public function setClinique($clinique)
    {
        $this->clinique = $clinique;

        return $this;
    }

    /**
     * Get clinique
     *
     * @return string 
     */
    public function getClinique()
    {
        return $this->clinique;
    }

    /**
     * Set paraclinique
     *
     * @param string $paraclinique
     * @return Examen
     */
    public function setParaclinique($paraclinique)
    {
        $this->paraclinique = $paraclinique;

        return $this;
    }

    /**
     * Get paraclinique
     *
     * @return string 
     */
    public function getParaclinique()
    {
        return $this->paraclinique;
    }
}
