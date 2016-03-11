<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\SucreRepository")
 */
class Sucre
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
     * @ORM\Column(name="glycemie", type="decimal", scale=2, nullable=true)
     */
    private $glycemie;

    /**
     * @var string
     *
     * @ORM\Column(name="glucose", type="decimal", scale=2, nullable=true)
     */
    private $glucose;

    /**
     * @var string
     *
     * @ORM\Column(name="glucoseUrinaire", type="boolean",  nullable=true)
     */
    private $glucoseUrinaire;

    /**
     * @var string
     *
     * @ORM\Column(name="peptideC", type="decimal", scale=2, nullable=true)
     */
    private $peptideC;


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
     * Set glycemie
     *
     * @param string $glycemie
     * @return Sucre
     */
    public function setGlycemie($glycemie)
    {
        $this->glycemie = $glycemie;

        return $this;
    }

    /**
     * Get glycemie
     *
     * @return string 
     */
    public function getGlycemie()
    {
        return $this->glycemie;
    }

    /**
     * Set glucose
     *
     * @param string $glucose
     * @return Sucre
     */
    public function setGlucose($glucose)
    {
        $this->glucose = $glucose;

        return $this;
    }

    /**
     * Get glucose
     *
     * @return string 
     */
    public function getGlucose()
    {
        return $this->glucose;
    }

    /**
     * Set glucoseUrinaire
     *
     * @param string $glucoseUrinaire
     * @return Sucre
     */
    public function setGlucoseUrinaire($glucoseUrinaire)
    {
        $this->glucoseUrinaire = $glucoseUrinaire;

        return $this;
    }

    /**
     * Get glucoseUrinaire
     *
     * @return string 
     */
    public function getGlucoseUrinaire()
    {
        return $this->glucoseUrinaire;
    }

    /**
     * Set peptideC
     *
     * @param string $peptideC
     * @return Sucre
     */
    public function setPeptideC($peptideC)
    {
        $this->peptideC = $peptideC;

        return $this;
    }

    /**
     * Get peptideC
     *
     * @return string 
     */
    public function getPeptideC()
    {
        return $this->peptideC;
    }
}
