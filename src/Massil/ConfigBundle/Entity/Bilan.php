<?php

namespace Massil\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bilan
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\ConfigBundle\Entity\BilanRepository")
 */
class Bilan
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
     *@ORM\OneToMany(targetEntity="Massil\ConfigBundle\Entity\BilanParameter",mappedBy="bilan") 
     */
    private $bilanParameters;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;


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
     * Constructor
     */
    public function __construct($code,$nom)
    {
    	$this->setCode($code);
    	$this->setNom($nom);
        $this->bilanParameters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Bilan
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Bilan
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add bilanParameters
     *
     * @param \Massil\ConfigBundle\Entity\BilanParameter $bilanParameters
     * @return Bilan
     */
    public function addBilanParameter(\Massil\ConfigBundle\Entity\BilanParameter $bilanParameter)
    {
        $this->bilanParameters[] = $bilanParameter;
        $bilanParameter->setBilan($this);

        return $this;
    }

    /**
     * Remove bilanParameters
     *
     * @param \Massil\ConfigBundle\Entity\BilanParameter $bilanParameters
     */
    public function removeBilanParameter(\Massil\ConfigBundle\Entity\BilanParameter $bilanParameter)
    {
        $this->bilanParameters->removeElement($bilanParameter);
    }

    /**
     * Get bilanParameters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBilanParameters()
    {
        return $this->bilanParameters;
    }
}
