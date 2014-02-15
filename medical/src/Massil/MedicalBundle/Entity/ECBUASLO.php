<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ECBUASLO
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ECBUASLO
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
     * @ORM\Column(name="cytologique", type="decimal", scale=2, nullable=true)
     */
    private $cytologique;

    /**
     * @var string
     *
     * @ORM\Column(name="bacteriologique", type="decimal", scale=2, nullable=true)
     */
    private $bacteriologique;

    /**
     * @var string
     *
     * @ORM\Column(name="aSLO", type="decimal", scale=2, nullable=true)
     */
    private $aSLO;


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
     * Set cytologique
     *
     * @param string $cytologique
     * @return ECBUASLO
     */
    public function setCytologique($cytologique)
    {
        $this->cytologique = $cytologique;

        return $this;
    }

    /**
     * Get cytologique
     *
     * @return string 
     */
    public function getCytologique()
    {
        return $this->cytologique;
    }

    /**
     * Set bacteriologique
     *
     * @param string $bacteriologique
     * @return ECBUASLO
     */
    public function setBacteriologique($bacteriologique)
    {
        $this->bacteriologique = $bacteriologique;

        return $this;
    }

    /**
     * Get bacteriologique
     *
     * @return string 
     */
    public function getBacteriologique()
    {
        return $this->bacteriologique;
    }

    /**
     * Set aSLO
     *
     * @param string $aSLO
     * @return ECBUASLO
     */
    public function setASLO($aSLO)
    {
        $this->aSLO = $aSLO;

        return $this;
    }

    /**
     * Get aSLO
     *
     * @return string 
     */
    public function getASLO()
    {
        return $this->aSLO;
    }
}
