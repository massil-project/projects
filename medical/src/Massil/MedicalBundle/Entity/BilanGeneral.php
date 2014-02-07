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
}
