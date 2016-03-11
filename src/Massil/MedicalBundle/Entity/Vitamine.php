<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vitamine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vitamine
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
     * @ORM\Column(name="a1", type="decimal", scale=2, nullable=true)
     */
    private $a1;

    /**
     * @var string
     *
     * @ORM\Column(name="c", type="decimal", scale=2, nullable=true)
     */
    private $c;

    /**
     * @var string
     *
     * @ORM\Column(name="b1", type="decimal", scale=2, nullable=true)
     */
    private $b1;

    /**
     * @var string
     *
     * @ORM\Column(name="b2", type="decimal", scale=2, nullable=true)
     */
    private $b2;

    /**
     * @var string
     *
     * @ORM\Column(name="b3", type="decimal", scale=2, nullable=true)
     */
    private $b3;

    /**
     * @var string
     *
     * @ORM\Column(name="b6", type="decimal", scale=2, nullable=true)
     */
    private $b6;

    /**
     * @var string
     *
     * @ORM\Column(name="b9", type="decimal", scale=2, nullable=true)
     */
    private $b9;

    /**
     * @var string
     *
     * @ORM\Column(name="b12", type="decimal", scale=2, nullable=true)
     */
    private $b12;

    /**
     * @var string
     *
     * @ORM\Column(name="d3", type="decimal", scale=2, nullable=true)
     */
    private $d3;


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
     * Set a1
     *
     * @param string $a1
     * @return Vitamine
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;

        return $this;
    }

    /**
     * Get a1
     *
     * @return string 
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * Set c
     *
     * @param string $c
     * @return Vitamine
     */
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c
     *
     * @return string 
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set b1
     *
     * @param string $b1
     * @return Vitamine
     */
    public function setB1($b1)
    {
        $this->b1 = $b1;

        return $this;
    }

    /**
     * Get b1
     *
     * @return string 
     */
    public function getB1()
    {
        return $this->b1;
    }

    /**
     * Set b2
     *
     * @param string $b2
     * @return Vitamine
     */
    public function setB2($b2)
    {
        $this->b2 = $b2;

        return $this;
    }

    /**
     * Get b2
     *
     * @return string 
     */
    public function getB2()
    {
        return $this->b2;
    }

    /**
     * Set b3
     *
     * @param string $b3
     * @return Vitamine
     */
    public function setB3($b3)
    {
        $this->b3 = $b3;

        return $this;
    }

    /**
     * Get b3
     *
     * @return string 
     */
    public function getB3()
    {
        return $this->b3;
    }

    /**
     * Set b6
     *
     * @param string $b6
     * @return Vitamine
     */
    public function setB6($b6)
    {
        $this->b6 = $b6;

        return $this;
    }

    /**
     * Get b6
     *
     * @return string 
     */
    public function getB6()
    {
        return $this->b6;
    }

    /**
     * Set b9
     *
     * @param string $b9
     * @return Vitamine
     */
    public function setB9($b9)
    {
        $this->b9 = $b9;

        return $this;
    }

    /**
     * Get b9
     *
     * @return string 
     */
    public function getB9()
    {
        return $this->b9;
    }

    /**
     * Set b12
     *
     * @param string $b12
     * @return Vitamine
     */
    public function setB12($b12)
    {
        $this->b12 = $b12;

        return $this;
    }

    /**
     * Get b12
     *
     * @return string 
     */
    public function getB12()
    {
        return $this->b12;
    }

    /**
     * Set d3
     *
     * @param string $d3
     * @return Vitamine
     */
    public function setD3($d3)
    {
        $this->d3 = $d3;

        return $this;
    }

    /**
     * Get d3
     *
     * @return string 
     */
    public function getD3()
    {
        return $this->d3;
    }
}
