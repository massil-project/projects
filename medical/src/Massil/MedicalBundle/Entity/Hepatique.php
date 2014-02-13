<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hepatique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\HepatiqueRepository")
 */
class Hepatique
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
     * @ORM\Column(name="amylaseUrinaire", type="decimal", scale=2, nullable=true)
     */
    private $amylaseUrinaire;

    /**
     * @var string
     *
     * @ORM\Column(name="alcool", type="decimal", scale=2, nullable=true)
     */
    private $alcool;

    /**
     * @var string
     *
     * @ORM\Column(name="amylase", type="decimal", scale=2, nullable=true)
     */
    private $amylase;

    /**
     * @var string
     *
     * @ORM\Column(name="bilirubineTotal", type="decimal", scale=2, nullable=true)
     */
    private $bilirubineTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="bilirubineLibre", type="decimal", scale=2, nullable=true)
     */
    private $bilirubineLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="bilirubineConjuguee", type="decimal", scale=2, nullable=true)
     */
    private $bilirubineConjuguee;

    /**
     * @var string
     *
     * @ORM\Column(name="yGT", type="decimal", scale=2, nullable=true)
     */
    private $yGT;

    /**
     * @var string
     *
     * @ORM\Column(name="nucleotidase", type="decimal", scale=2, nullable=true)
     */
    private $nucleotidase;

    /**
     * @var string
     *
     * @ORM\Column(name="lipase", type="decimal", scale=2, nullable=true)
     */
    private $lipase;

    /**
     * @var string
     *
     * @ORM\Column(name="phosphatasesAcides", type="decimal", scale=2, nullable=true)
     */
    private $phosphatasesAcides;

    /**
     * @var string
     *
     * @ORM\Column(name="phosphatasesAlcalines", type="decimal", scale=2, nullable=true)
     */
    private $phosphatasesAlcalines;

    /**
     * @var string
     *
     * @ORM\Column(name="lDH", type="decimal", scale=2, nullable=true)
     */
    private $lDH;

    /**
     * @var string
     *
     * @ORM\Column(name="aSAT", type="decimal", scale=2, nullable=true)
     */
    private $aSAT;

    /**
     * @var string
     *
     * @ORM\Column(name="aLAT", type="decimal", scale=2, nullable=true)
     */
    private $aLAT;


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
     * Set amylaseUrinaire
     *
     * @param string $amylaseUrinaire
     * @return Hepatique
     */
    public function setAmylaseUrinaire($amylaseUrinaire)
    {
        $this->amylaseUrinaire = $amylaseUrinaire;

        return $this;
    }

    /**
     * Get amylaseUrinaire
     *
     * @return string 
     */
    public function getAmylaseUrinaire()
    {
        return $this->amylaseUrinaire;
    }

    /**
     * Set alcool
     *
     * @param string $alcool
     * @return Hepatique
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return string 
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set amylase
     *
     * @param string $amylase
     * @return Hepatique
     */
    public function setAmylase($amylase)
    {
        $this->amylase = $amylase;

        return $this;
    }

    /**
     * Get amylase
     *
     * @return string 
     */
    public function getAmylase()
    {
        return $this->amylase;
    }

    /**
     * Set bilirubineTotal
     *
     * @param string $bilirubineTotal
     * @return Hepatique
     */
    public function setBilirubineTotal($bilirubineTotal)
    {
        $this->bilirubineTotal = $bilirubineTotal;

        return $this;
    }

    /**
     * Get bilirubineTotal
     *
     * @return string 
     */
    public function getBilirubineTotal()
    {
        return $this->bilirubineTotal;
    }

    /**
     * Set bilirubineLibre
     *
     * @param string $bilirubineLibre
     * @return Hepatique
     */
    public function setBilirubineLibre($bilirubineLibre)
    {
        $this->bilirubineLibre = $bilirubineLibre;

        return $this;
    }

    /**
     * Get bilirubineLibre
     *
     * @return string 
     */
    public function getBilirubineLibre()
    {
        return $this->bilirubineLibre;
    }

    /**
     * Set bilirubineConjuguee
     *
     * @param string $bilirubineConjuguee
     * @return Hepatique
     */
    public function setBilirubineConjuguee($bilirubineConjuguee)
    {
        $this->bilirubineConjuguee = $bilirubineConjuguee;

        return $this;
    }

    /**
     * Get bilirubineConjuguee
     *
     * @return string 
     */
    public function getBilirubineConjuguee()
    {
        return $this->bilirubineConjuguee;
    }

    /**
     * Set yGT
     *
     * @param string $yGT
     * @return Hepatique
     */
    public function setYGT($yGT)
    {
        $this->yGT = $yGT;

        return $this;
    }

    /**
     * Get yGT
     *
     * @return string 
     */
    public function getYGT()
    {
        return $this->yGT;
    }

    /**
     * Set nucleotidase
     *
     * @param string $nucleotidase
     * @return Hepatique
     */
    public function setNucleotidase($nucleotidase)
    {
        $this->nucleotidase = $nucleotidase;

        return $this;
    }

    /**
     * Get nucleotidase
     *
     * @return string 
     */
    public function getNucleotidase()
    {
        return $this->nucleotidase;
    }

    /**
     * Set lipase
     *
     * @param string $lipase
     * @return Hepatique
     */
    public function setLipase($lipase)
    {
        $this->lipase = $lipase;

        return $this;
    }

    /**
     * Get lipase
     *
     * @return string 
     */
    public function getLipase()
    {
        return $this->lipase;
    }

    /**
     * Set phosphatasesAcides
     *
     * @param string $phosphatasesAcides
     * @return Hepatique
     */
    public function setPhosphatasesAcides($phosphatasesAcides)
    {
        $this->phosphatasesAcides = $phosphatasesAcides;

        return $this;
    }

    /**
     * Get phosphatasesAcides
     *
     * @return string 
     */
    public function getPhosphatasesAcides()
    {
        return $this->phosphatasesAcides;
    }

    /**
     * Set phosphatasesAlcalines
     *
     * @param string $phosphatasesAlcalines
     * @return Hepatique
     */
    public function setPhosphatasesAlcalines($phosphatasesAlcalines)
    {
        $this->phosphatasesAlcalines = $phosphatasesAlcalines;

        return $this;
    }

    /**
     * Get phosphatasesAlcalines
     *
     * @return string 
     */
    public function getPhosphatasesAlcalines()
    {
        return $this->phosphatasesAlcalines;
    }

    /**
     * Set lDH
     *
     * @param string $lDH
     * @return Hepatique
     */
    public function setLDH($lDH)
    {
        $this->lDH = $lDH;

        return $this;
    }

    /**
     * Get lDH
     *
     * @return string 
     */
    public function getLDH()
    {
        return $this->lDH;
    }

    /**
     * Set aSAT
     *
     * @param string $aSAT
     * @return Hepatique
     */
    public function setASAT($aSAT)
    {
        $this->aSAT = $aSAT;

        return $this;
    }

    /**
     * Get aSAT
     *
     * @return string 
     */
    public function getASAT()
    {
        return $this->aSAT;
    }

    /**
     * Set aLAT
     *
     * @param string $aLAT
     * @return Hepatique
     */
    public function setALAT($aLAT)
    {
        $this->aLAT = $aLAT;

        return $this;
    }

    /**
     * Get aLAT
     *
     * @return string 
     */
    public function getALAT()
    {
        return $this->aLAT;
    }
}
