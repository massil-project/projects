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
     * @var boolean
     * 
     * @ORM\Column(name="bilan_general_active",type="boolean")
     */
    private $bilanGeneralActive;
    
    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\BilanGeneral",cascade={"persist","remove"})
     */
    private $bilanGeneral;
    
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set bilanGeneralActive
     *
     * @param string $bilanGeneralActive
     * @return Examen
     */
    public function setBilanGeneralActive($bilanGeneralActive)
    {
        $this->bilanGeneralActive = $bilanGeneralActive;

        return $this;
    }

    /**
     * Get bilanGeneralActive
     *
     * @return string 
     */
    public function getBilanGeneralActive()
    {
        return $this->bilanGeneralActive;
    }

    /**
     * Set bilanGeneral
     *
     * @param \Massil\MedicalBundle\Entity\BilanGeneral $bilanGeneral
     * @return Examen
     */
    public function setBilanGeneral(\Massil\MedicalBundle\Entity\BilanGeneral $bilanGeneral = null)
    {
        $this->bilanGeneral = $bilanGeneral;

        return $this;
    }

    /**
     * Get bilanGeneral
     *
     * @return \Massil\MedicalBundle\Entity\BilanGeneral 
     */
    public function getBilanGeneral()
    {
        return $this->bilanGeneral;
    }
}
