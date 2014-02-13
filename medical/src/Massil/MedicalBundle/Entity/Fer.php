<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\FerRepository")
 */
class Fer
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
     * @ORM\Column(name="ferSerique", type="decimal", scale=3 , nullable=true)
     */
    private $ferSerique;

    /**
     * @var string
     *
     * @ORM\Column(name="tIBC", type="decimal", scale=3 ,nullable=true)
     */
    private $tIBC;

    /**
     * @var string
     *
     * @ORM\Column(name="ferritine", type="decimal", scale=3, nullable=true)
     */
    private $ferritine;

    /**
     * @var string
     *
     * @ORM\Column(name="transferrine", type="decimal", scale=3, nullable=true)
     */
    private $transferrine;


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
     * Set ferSerique
     *
     * @param string $ferSerique
     * @return Fer
     */
    public function setFerSerique($ferSerique)
    {
        $this->ferSerique = $ferSerique;

        return $this;
    }

    /**
     * Get ferSerique
     *
     * @return string 
     */
    public function getFerSerique()
    {
        return $this->ferSerique;
    }

    /**
     * Set tIBC
     *
     * @param string $tIBC
     * @return Fer
     */
    public function setTIBC($tIBC)
    {
        $this->tIBC = $tIBC;

        return $this;
    }

    /**
     * Get tIBC
     *
     * @return string 
     */
    public function getTIBC()
    {
        return $this->tIBC;
    }

    /**
     * Set ferritine
     *
     * @param string $ferritine
     * @return Fer
     */
    public function setFerritine($ferritine)
    {
        $this->ferritine = $ferritine;

        return $this;
    }

    /**
     * Get ferritine
     *
     * @return string 
     */
    public function getFerritine()
    {
        return $this->ferritine;
    }

    /**
     * Set transferrine
     *
     * @param string $transferrine
     * @return Fer
     */
    public function setTransferrine($transferrine)
    {
        $this->transferrine = $transferrine;

        return $this;
    }

    /**
     * Get transferrine
     *
     * @return string 
     */
    public function getTransferrine()
    {
        return $this->transferrine;
    }
}
