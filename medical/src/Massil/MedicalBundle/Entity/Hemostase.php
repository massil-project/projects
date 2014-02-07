<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hemostase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\HemostaseRepository")
 */
class Hemostase
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
     * @ORM\Column(name="tempsDeSaignementDuke", type="string", length=255, nullable=true)
     */
    private $tempsDeSaignementDuke;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsDeSaignementIvy", type="string", length=255, nullable=true)
     */
    private $tempsDeSaignementIvy;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsDeProthrombineINR", type="string", length=255, nullable=true)
     */
    private $tempsDeProthrombineINR;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsDeCephalineActiveTCA", type="string", length=255, nullable=true)
     */
    private $tempsDeCephalineActiveTCA;

    /**
     * @var string
     *
     * @ORM\Column(name="fibrinogene", type="string", length=255, nullable=true)
     */
    private $fibrinogene;

    /**
     * @var string
     *
     * @ORM\Column(name="facteurAntithemophiliqueVIII", type="string", length=255, nullable=true)
     */
    private $facteurAntithemophiliqueVIII;

    /**
     * @var string
     *
     * @ORM\Column(name="facteurAntithemophiliqueIX", type="string", length=255, nullable=true)
     */
    private $facteurAntithemophiliqueIX;

    /**
     * @var string
     *
     * @ORM\Column(name="heparenimie", type="string", length=255, nullable=true)
     */
    private $heparenimie;

    /**
     * @var string
     *
     * @ORM\Column(name="antiThrombineDosage", type="string", length=255, nullable=true)
     */
    private $antiThrombineDosage;

    /**
     * @var string
     *
     * @ORM\Column(name="antiThrombineActive", type="string", length=255, nullable=true)
     */
    private $antiThrombineActive;

    /**
     * @var string
     *
     * @ORM\Column(name="proteineCS", type="string", length=255, nullable=true)
     */
    private $proteineCS;


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
     * Set tempsDeSaignementDuke
     *
     * @param string $tempsDeSaignementDuke
     * @return Hemostase
     */
    public function setTempsDeSaignementDuke($tempsDeSaignementDuke)
    {
        $this->tempsDeSaignementDuke = $tempsDeSaignementDuke;

        return $this;
    }

    /**
     * Get tempsDeSaignementDuke
     *
     * @return string 
     */
    public function getTempsDeSaignementDuke()
    {
        return $this->tempsDeSaignementDuke;
    }

    /**
     * Set tempsDeSaignementIvy
     *
     * @param string $tempsDeSaignementIvy
     * @return Hemostase
     */
    public function setTempsDeSaignementIvy($tempsDeSaignementIvy)
    {
        $this->tempsDeSaignementIvy = $tempsDeSaignementIvy;

        return $this;
    }

    /**
     * Get tempsDeSaignementIvy
     *
     * @return string 
     */
    public function getTempsDeSaignementIvy()
    {
        return $this->tempsDeSaignementIvy;
    }

    /**
     * Set tempsDeProthrombineINR
     *
     * @param string $tempsDeProthrombineINR
     * @return Hemostase
     */
    public function setTempsDeProthrombineINR($tempsDeProthrombineINR)
    {
        $this->tempsDeProthrombineINR = $tempsDeProthrombineINR;

        return $this;
    }

    /**
     * Get tempsDeProthrombineINR
     *
     * @return string 
     */
    public function getTempsDeProthrombineINR()
    {
        return $this->tempsDeProthrombineINR;
    }

    /**
     * Set tempsDeCephalineActiveTCA
     *
     * @param string $tempsDeCephalineActiveTCA
     * @return Hemostase
     */
    public function setTempsDeCephalineActiveTCA($tempsDeCephalineActiveTCA)
    {
        $this->tempsDeCephalineActiveTCA = $tempsDeCephalineActiveTCA;

        return $this;
    }

    /**
     * Get tempsDeCephalineActiveTCA
     *
     * @return string 
     */
    public function getTempsDeCephalineActiveTCA()
    {
        return $this->tempsDeCephalineActiveTCA;
    }

    /**
     * Set fibrinogene
     *
     * @param string $fibrinogene
     * @return Hemostase
     */
    public function setFibrinogene($fibrinogene)
    {
        $this->fibrinogene = $fibrinogene;

        return $this;
    }

    /**
     * Get fibrinogene
     *
     * @return string 
     */
    public function getFibrinogene()
    {
        return $this->fibrinogene;
    }

    /**
     * Set facteurAntithemophiliqueVIII
     *
     * @param string $facteurAntithemophiliqueVIII
     * @return Hemostase
     */
    public function setFacteurAntithemophiliqueVIII($facteurAntithemophiliqueVIII)
    {
        $this->facteurAntithemophiliqueVIII = $facteurAntithemophiliqueVIII;

        return $this;
    }

    /**
     * Get facteurAntithemophiliqueVIII
     *
     * @return string 
     */
    public function getFacteurAntithemophiliqueVIII()
    {
        return $this->facteurAntithemophiliqueVIII;
    }

    /**
     * Set facteurAntithemophiliqueIX
     *
     * @param string $facteurAntithemophiliqueIX
     * @return Hemostase
     */
    public function setFacteurAntithemophiliqueIX($facteurAntithemophiliqueIX)
    {
        $this->facteurAntithemophiliqueIX = $facteurAntithemophiliqueIX;

        return $this;
    }

    /**
     * Get facteurAntithemophiliqueIX
     *
     * @return string 
     */
    public function getFacteurAntithemophiliqueIX()
    {
        return $this->facteurAntithemophiliqueIX;
    }

    /**
     * Set heparenimie
     *
     * @param string $heparenimie
     * @return Hemostase
     */
    public function setHeparenimie($heparenimie)
    {
        $this->heparenimie = $heparenimie;

        return $this;
    }

    /**
     * Get heparenimie
     *
     * @return string 
     */
    public function getHeparenimie()
    {
        return $this->heparenimie;
    }

    /**
     * Set antiThrombineDosage
     *
     * @param string $antiThrombineDosage
     * @return Hemostase
     */
    public function setAntiThrombineDosage($antiThrombineDosage)
    {
        $this->antiThrombineDosage = $antiThrombineDosage;

        return $this;
    }

    /**
     * Get antiThrombineDosage
     *
     * @return string 
     */
    public function getAntiThrombineDosage()
    {
        return $this->antiThrombineDosage;
    }

    /**
     * Set antiThrombineActive
     *
     * @param string $antiThrombineActive
     * @return Hemostase
     */
    public function setAntiThrombineActive($antiThrombineActive)
    {
        $this->antiThrombineActive = $antiThrombineActive;

        return $this;
    }

    /**
     * Get antiThrombineActive
     *
     * @return string 
     */
    public function getAntiThrombineActive()
    {
        return $this->antiThrombineActive;
    }

    /**
     * Set proteineCS
     *
     * @param string $proteineCS
     * @return Hemostase
     */
    public function setProteineCS($proteineCS)
    {
        $this->proteineCS = $proteineCS;

        return $this;
    }

    /**
     * Get proteineCS
     *
     * @return string 
     */
    public function getProteineCS()
    {
        return $this->proteineCS;
    }
}
