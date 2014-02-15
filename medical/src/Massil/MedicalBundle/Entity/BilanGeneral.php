<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BilanGeneral
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\BilanGeneralRepository")
 */
class BilanGeneral
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
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Hemostase",cascade={"persist","remove"})
     */
    private $hemostase;
    
    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\FNS", cascade={"persist","remove"})
     */
    private $fns;
    
    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Fer", cascade={"persist","remove"})
     */
    private $fer;

    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Proteines", cascade={"persist","remove"})
     */
    private $proteines;

    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Sucre", cascade={"persist","remove"})
     */
    private $sucre;

    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Hepatique", cascade={"persist","remove"})
     */
    private $hepatique;

    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Vitamine", cascade={"persist","remove"})
     */
    private $vitamine;

    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\ECBUASLO", cascade={"persist","remove"})
     */
    private $ecbuaslo;

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
     * Set hemostase
     *
     * @param \Massil\MedicalBundle\Entity\Hemostase $hemostase
     * @return BilanGeneral
     */
    public function setHemostase(\Massil\MedicalBundle\Entity\Hemostase $hemostase = null)
    {
        $this->hemostase = $hemostase;

        return $this;
    }

    /**
     * Get hemostase
     *
     * @return \Massil\MedicalBundle\Entity\Hemostase 
     */
    public function getHemostase()
    {
        return $this->hemostase;
    }

    /**
     * Set fns
     *
     * @param \Massil\MedicalBundle\Entity\FNS $fns
     * @return BilanGeneral
     */
    public function setFns(\Massil\MedicalBundle\Entity\FNS $fns = null)
    {
        $this->fns = $fns;

        return $this;
    }

    /**
     * Get fns
     *
     * @return \Massil\MedicalBundle\Entity\FNS 
     */
    public function getFns()
    {
        return $this->fns;
    }

    /**
     * Set fer
     *
     * @param \Massil\MedicalBundle\Entity\Fer $fer
     * @return BilanGeneral
     */
    public function setFer(\Massil\MedicalBundle\Entity\Fer $fer = null)
    {
        $this->fer = $fer;

        return $this;
    }

    /**
     * Get fer
     *
     * @return \Massil\MedicalBundle\Entity\Fer 
     */
    public function getFer()
    {
        return $this->fer;
    }

    /**
     * Set proteines
     *
     * @param \Massil\MedicalBundle\Entity\Proteines $proteines
     * @return BilanGeneral
     */
    public function setProteines(\Massil\MedicalBundle\Entity\Proteines $proteines = null)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return \Massil\MedicalBundle\Entity\Proteines 
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set sucre
     *
     * @param \Massil\MedicalBundle\Entity\Sucre $sucre
     * @return BilanGeneral
     */
    public function setSucre(\Massil\MedicalBundle\Entity\Sucre $sucre = null)
    {
        $this->sucre = $sucre;

        return $this;
    }

    /**
     * Get sucre
     *
     * @return \Massil\MedicalBundle\Entity\Sucre 
     */
    public function getSucre()
    {
        return $this->sucre;
    }

    /**
     * Set hepatique
     *
     * @param \Massil\MedicalBundle\Entity\Hepatique $hepatique
     * @return BilanGeneral
     */
    public function setHepatique(\Massil\MedicalBundle\Entity\Hepatique $hepatique = null)
    {
        $this->hepatique = $hepatique;

        return $this;
    }

    /**
     * Get hepatique
     *
     * @return \Massil\MedicalBundle\Entity\Hepatique 
     */
    public function getHepatique()
    {
        return $this->hepatique;
    }

    /**
     * Set vitamine
     *
     * @param \Massil\MedicalBundle\Entity\Vitamine $vitamine
     * @return BilanGeneral
     */
    public function setVitamine(\Massil\MedicalBundle\Entity\Vitamine $vitamine = null)
    {
        $this->vitamine = $vitamine;

        return $this;
    }

    /**
     * Get vitamine
     *
     * @return \Massil\MedicalBundle\Entity\Vitamine 
     */
    public function getVitamine()
    {
        return $this->vitamine;
    }

    /**
     * Set ecbuaslo
     *
     * @param \Massil\MedicalBundle\Entity\ECBUASLO $ecbuaslo
     * @return BilanGeneral
     */
    public function setEcbuaslo(\Massil\MedicalBundle\Entity\ECBUASLO $ecbuaslo = null)
    {
        $this->ecbuaslo = $ecbuaslo;

        return $this;
    }

    /**
     * Get ecbuaslo
     *
     * @return \Massil\MedicalBundle\Entity\ECBUASLO 
     */
    public function getEcbuaslo()
    {
        return $this->ecbuaslo;
    }
}
