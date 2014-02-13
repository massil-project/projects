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
}
