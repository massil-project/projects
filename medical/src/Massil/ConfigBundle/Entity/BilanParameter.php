<?php

namespace Massil\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BilanParameter
 *
 * @ORM\Entity
 *
 */
class BilanParameter
{
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Massil\ConfigBundle\Entity\Bilan",inversedBy="bilanParameters")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $bilan;

	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Massil\ConfigBundle\Entity\Parametere",inversedBy="bilanParameters")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $parametere;
   
    /**
     * @var boolean
     *
     * @ORM\Column(name="activation", type="boolean")
     */
    private $activation;


    /**
     * Set activation
     *
     * @param boolean $activation
     * @return BilanParameters
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return boolean 
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * Set bilan
     *
     * @param \Massil\ConfigBundle\Entity\Bilan $bilan
     * @return BilanParameter
     */
    public function setBilan(\Massil\ConfigBundle\Entity\Bilan $bilan)
    {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return \Massil\ConfigBundle\Entity\Bilan 
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set parametere
     *
     * @param \Massil\ConfigBundle\Entity\Parameter $parametere
     * @return BilanParameter
     */
    public function setParametere(\Massil\ConfigBundle\Entity\Parametere $parametere)
    {
        $this->parametere = $parametere;

        return $this;
    }

    /**
     * Get parametere
     *
     * @return \Massil\ConfigBundle\Entity\Parametere 
     */
    public function getParametere()
    {
        return $this->parametere;
    }
}
