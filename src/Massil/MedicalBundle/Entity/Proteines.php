<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proteines
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\ProteinesRepository")
 */
class Proteines
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
     * @ORM\Column(name="hemoglobineGlyquee", type="decimal", scale=2, nullable=true)
     */
    private $hemoglobineGlyquee;

    /**
     * @var string
     *
     * @ORM\Column(name="cRP", type="decimal", scale=2, nullable=true)
     */
    private $cRP;

    /**
     * @var string
     *
     * @ORM\Column(name="albumine", type="decimal", scale=2, nullable=true)
     */
    private $albumine;

    /**
     * @var string
     *
     * @ORM\Column(name="electrophoreseDesProteinesSeriques", type="decimal", scale=2, nullable=true)
     */
    private $electrophoreseDesProteinesSeriques;

    /**
     * @var string
     *
     * @ORM\Column(name="hemoglobinurie", type="boolean", nullable=true)
     */
    private $hemoglobinurie;

    /**
     * @var string
     *
     * @ORM\Column(name="proteinurie", type="decimal", scale=2, nullable=true)
     */
    private $proteinurie;

    /**
     * @var string
     *
     * @ORM\Column(name="microAlbuminurie", type="decimal", scale=2, nullable=true)
     */
    private $microAlbuminurie;

    /**
     * @var string
     *
     * @ORM\Column(name="microAlbuminurie2", type="decimal", scale=2, nullable=true)
     */
    private $microAlbuminurie2;

    /**
     * @var string
     *
     * @ORM\Column(name="prealbumines", type="decimal", scale=2, nullable=true)
     */
    private $prealbumines;

    /**
     * @var string
     *
     * @ORM\Column(name="cPK", type="decimal", scale=2, nullable=true)
     */
    private $cPK;

    /**
     * @var string
     *
     * @ORM\Column(name="troponine", type="decimal", scale=2, nullable=true)
     */
    private $troponine;

    /**
     * @var string
     *
     * @ORM\Column(name="fibrinogene", type="decimal", scale=2, nullable=true)
     */
    private $fibrinogene;

    /**
     * @var string
     *
     * @ORM\Column(name="haptoglobine", type="decimal", scale=2, nullable=true)
     */
    private $haptoglobine;

    /**
     * @var string
     *
     * @ORM\Column(name="myoglobine", type="decimal", scale=2, nullable=true)
     */
    private $myoglobine;

    /**
     * @var string
     *
     * @ORM\Column(name="hbCO", type="decimal", scale=2, nullable=true)
     */
    private $hbCO;

    /**
     * @var string
     *
     * @ORM\Column(name="metHb", type="decimal", scale=2, nullable=true)
     */
    private $metHb;

    /**
     * @var string
     *
     * @ORM\Column(name="proteinurieDeBenceJones",type="boolean" , nullable=true)
     */
    private $proteinurieDeBenceJones;

    /**
     * @var string
     *
     * @ORM\Column(name="hydroxyprolinurie", type="decimal", scale=2, nullable=true)
     */
    private $hydroxyprolinurie;


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
     * Set hemoglobineGlyquee
     *
     * @param string $hemoglobineGlyquee
     * @return Proteines
     */
    public function setHemoglobineGlyquee($hemoglobineGlyquee)
    {
        $this->hemoglobineGlyquee = $hemoglobineGlyquee;

        return $this;
    }

    /**
     * Get hemoglobineGlyquee
     *
     * @return string 
     */
    public function getHemoglobineGlyquee()
    {
        return $this->hemoglobineGlyquee;
    }

    /**
     * Set cRP
     *
     * @param string $cRP
     * @return Proteines
     */
    public function setCRP($cRP)
    {
        $this->cRP = $cRP;

        return $this;
    }

    /**
     * Get cRP
     *
     * @return string 
     */
    public function getCRP()
    {
        return $this->cRP;
    }

    /**
     * Set albumine
     *
     * @param string $albumine
     * @return Proteines
     */
    public function setAlbumine($albumine)
    {
        $this->albumine = $albumine;

        return $this;
    }

    /**
     * Get albumine
     *
     * @return string 
     */
    public function getAlbumine()
    {
        return $this->albumine;
    }

    /**
     * Set electrophoreseDesProteinesSeriques
     *
     * @param string $electrophoreseDesProteinesSeriques
     * @return Proteines
     */
    public function setElectrophoreseDesProteinesSeriques($electrophoreseDesProteinesSeriques)
    {
        $this->electrophoreseDesProteinesSeriques = $electrophoreseDesProteinesSeriques;

        return $this;
    }

    /**
     * Get electrophoreseDesProteinesSeriques
     *
     * @return string 
     */
    public function getElectrophoreseDesProteinesSeriques()
    {
        return $this->electrophoreseDesProteinesSeriques;
    }

    /**
     * Set hemoglobinurie
     *
     * @param string $hemoglobinurie
     * @return Proteines
     */
    public function setHemoglobinurie($hemoglobinurie)
    {
        $this->hemoglobinurie = $hemoglobinurie;

        return $this;
    }

    /**
     * Get hemoglobinurie
     *
     * @return string 
     */
    public function getHemoglobinurie()
    {
        return $this->hemoglobinurie;
    }

    /**
     * Set proteinurie
     *
     * @param string $proteinurie
     * @return Proteines
     */
    public function setProteinurie($proteinurie)
    {
        $this->proteinurie = $proteinurie;

        return $this;
    }

    /**
     * Get proteinurie
     *
     * @return string 
     */
    public function getProteinurie()
    {
        return $this->proteinurie;
    }

    /**
     * Set microAlbuminurie
     *
     * @param string $microAlbuminurie
     * @return Proteines
     */
    public function setMicroAlbuminurie($microAlbuminurie)
    {
        $this->microAlbuminurie = $microAlbuminurie;

        return $this;
    }

    /**
     * Get microAlbuminurie
     *
     * @return string 
     */
    public function getMicroAlbuminurie()
    {
        return $this->microAlbuminurie;
    }

    /**
     * Set microAlbuminurie2
     *
     * @param string $microAlbuminurie2
     * @return Proteines
     */
    public function setMicroAlbuminurie2($microAlbuminurie2)
    {
        $this->microAlbuminurie2 = $microAlbuminurie2;

        return $this;
    }

    /**
     * Get microAlbuminurie2
     *
     * @return string 
     */
    public function getMicroAlbuminurie2()
    {
        return $this->microAlbuminurie2;
    }

    /**
     * Set prealbumines
     *
     * @param string $prealbumines
     * @return Proteines
     */
    public function setPrealbumines($prealbumines)
    {
        $this->prealbumines = $prealbumines;

        return $this;
    }

    /**
     * Get prealbumines
     *
     * @return string 
     */
    public function getPrealbumines()
    {
        return $this->prealbumines;
    }

    /**
     * Set cPK
     *
     * @param string $cPK
     * @return Proteines
     */
    public function setCPK($cPK)
    {
        $this->cPK = $cPK;

        return $this;
    }

    /**
     * Get cPK
     *
     * @return string 
     */
    public function getCPK()
    {
        return $this->cPK;
    }

    /**
     * Set troponine
     *
     * @param string $troponine
     * @return Proteines
     */
    public function setTroponine($troponine)
    {
        $this->troponine = $troponine;

        return $this;
    }

    /**
     * Get troponine
     *
     * @return string 
     */
    public function getTroponine()
    {
        return $this->troponine;
    }

    /**
     * Set fibrinogene
     *
     * @param string $fibrinogene
     * @return Proteines
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
     * Set haptoglobine
     *
     * @param string $haptoglobine
     * @return Proteines
     */
    public function setHaptoglobine($haptoglobine)
    {
        $this->haptoglobine = $haptoglobine;

        return $this;
    }

    /**
     * Get haptoglobine
     *
     * @return string 
     */
    public function getHaptoglobine()
    {
        return $this->haptoglobine;
    }

    /**
     * Set myoglobine
     *
     * @param string $myoglobine
     * @return Proteines
     */
    public function setMyoglobine($myoglobine)
    {
        $this->myoglobine = $myoglobine;

        return $this;
    }

    /**
     * Get myoglobine
     *
     * @return string 
     */
    public function getMyoglobine()
    {
        return $this->myoglobine;
    }

    /**
     * Set hbCO
     *
     * @param string $hbCO
     * @return Proteines
     */
    public function setHbCO($hbCO)
    {
        $this->hbCO = $hbCO;

        return $this;
    }

    /**
     * Get hbCO
     *
     * @return string 
     */
    public function getHbCO()
    {
        return $this->hbCO;
    }

    /**
     * Set metHb
     *
     * @param string $metHb
     * @return Proteines
     */
    public function setMetHb($metHb)
    {
        $this->metHb = $metHb;

        return $this;
    }

    /**
     * Get metHb
     *
     * @return string 
     */
    public function getMetHb()
    {
        return $this->metHb;
    }

    /**
     * Set proteinurieDeBenceJones
     *
     * @param string $proteinurieDeBenceJones
     * @return Proteines
     */
    public function setProteinurieDeBenceJones($proteinurieDeBenceJones)
    {
        $this->proteinurieDeBenceJones = $proteinurieDeBenceJones;

        return $this;
    }

    /**
     * Get proteinurieDeBenceJones
     *
     * @return string 
     */
    public function getProteinurieDeBenceJones()
    {
        return $this->proteinurieDeBenceJones;
    }

    /**
     * Set hydroxyprolinurie
     *
     * @param string $hydroxyprolinurie
     * @return Proteines
     */
    public function setHydroxyprolinurie($hydroxyprolinurie)
    {
        $this->hydroxyprolinurie = $hydroxyprolinurie;

        return $this;
    }

    /**
     * Get hydroxyprolinurie
     *
     * @return string 
     */
    public function getHydroxyprolinurie()
    {
        return $this->hydroxyprolinurie;
    }
}
