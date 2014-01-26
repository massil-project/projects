<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametres
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\ParametresRepository")
 */
class Parametres
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
     * @var array
     *
     * @ORM\Column(name="hematie", type="array")
     */
    private $hematie;

    /**
     * @var array
     *
     * @ORM\Column(name="hemoglobine", type="array")
     */
    private $hemoglobine;

    /**
     * @var array
     *
     * @ORM\Column(name="hematocrite", type="array")
     */
    private $hematocrite;

    /**
     * @var array
     *
     * @ORM\Column(name="VGM", type="array")
     */
    private $vgm;

    /**
     * @var array
     *
     * @ORM\Column(name="TCMH", type="array")
     */
    private $tcmh;

    /**
     * @var array
     *
     * @ORM\Column(name="CCMH", type="array")
     */
    private $ccmh;

    /**
     * @var array
     *
     * @ORM\Column(name="leucocytes", type="array")
     */
    private $leucocytes;

    /**
     * @var array
     *
     * @ORM\Column(name="polynucleaires_neutrophiles", type="array")
     */
    private $polynucleairesNeutrophiles;

    /**
     * @var array
     *
     * @ORM\Column(name="polynucleaire_eosinophiles", type="array")
     */
    private $polynucleaireEosinophiles;

    /**
     * @var array
     *
     * @ORM\Column(name="polynucleaire_basophiles", type="array")
     */
    private $polynucleaireBasophiles;

    /**
     * @var array
     *
     * @ORM\Column(name="lymphocytes", type="array")
     */
    private $lymphocytes;

    /**
     * @var array
     *
     * @ORM\Column(name="monocytes", type="array")
     */
    private $monocytes;

    /**
     * @var array
     *
     * @ORM\Column(name="hemoglobines_plasmatique", type="array")
     */
    private $hemoglobinesPlasmatique;

    /**
     * @var array
     *
     * @ORM\Column(name="fer_serique", type="array")
     */
    private $ferSerique;

    /**
     * @var array
     *
     * @ORM\Column(name="TIBC", type="array")
     */
    private $tibc;

    /**
     * @var array
     *
     * @ORM\Column(name="glycemie", type="array")
     */
    private $glycemie;

    /**
     * @var array
     *
     * @ORM\Column(name="hemoglobine_glyquee", type="array")
     */
    private $hemoglobineGlyquee;

    /**
     * @var array
     *
     * @ORM\Column(name="CRP", type="array")
     */
    private $crp;

    /**
     * @var array
     *
     * @ORM\Column(name="albumine", type="array")
     */
    private $albumine;

    /**
     * @var array
     *
     * @ORM\Column(name="electrophorese_des_proteines_serique", type="array")
     */
    private $electrophoreseDesProteinesSerique;

    /**
     * @var array
     *
     * @ORM\Column(name="hemoglobinurie", type="array")
     */
    private $hemoglobinurie;

    /**
     * @var array
     *
     * @ORM\Column(name="proteinurie", type="array")
     */
    private $proteinurie;

    /**
     * @var array
     *
     * @ORM\Column(name="microalbuminurie", type="array")
     */
    private $microalbuminurie;


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
     * Set hematie
     *
     * @param array $hematie
     * @return Parametres
     */
    public function setHematie($hematie)
    {
        $this->hematie = $hematie;

        return $this;
    }

    /**
     * Get hematie
     *
     * @return array 
     */
    public function getHematie()
    {
        return $this->hematie;
    }

    /**
     * Set hemoglobine
     *
     * @param array $hemoglobine
     * @return Parametres
     */
    public function setHemoglobine($hemoglobine)
    {
        $this->hemoglobine = $hemoglobine;

        return $this;
    }

    /**
     * Get hemoglobine
     *
     * @return array 
     */
    public function getHemoglobine()
    {
        return $this->hemoglobine;
    }

    /**
     * Set hematocrite
     *
     * @param array $hematocrite
     * @return Parametres
     */
    public function setHematocrite($hematocrite)
    {
        $this->hematocrite = $hematocrite;

        return $this;
    }

    /**
     * Get hematocrite
     *
     * @return array 
     */
    public function getHematocrite()
    {
        return $this->hematocrite;
    }

    /**
     * Set VGM
     *
     * @param array $vgm
     * @return Parametres
     */
    public function setVGM($vgm)
    {
        $this->vgm = $vgm;

        return $this;
    }

    /**
     * Get VGM
     *
     * @return array 
     */
    public function getVGM()
    {
        return $this->vgm;
    }

    /**
     * Set TCMH
     *
     * @param array $tcmh
     * @return Parametres
     */
    public function setTCMH($tcmh)
    {
        $this->tcmh = $tcmh;

        return $this;
    }

    /**
     * Get TCMH
     *
     * @return array 
     */
    public function getTCMH()
    {
        return $this->tcmh;
    }

    /**
     * Set CCMH
     *
     * @param array $ccmh
     * @return Parametres
     */
    public function setCCMH($ccmh)
    {
        $this->ccmh = $ccmh;

        return $this;
    }

    /**
     * Get CCMH
     *
     * @return array 
     */
    public function getCCMH()
    {
        return $this->ccmh;
    }

    /**
     * Set leucocytes
     *
     * @param array $leucocytes
     * @return Parametres
     */
    public function setLeucocytes($leucocytes)
    {
        $this->leucocytes = $leucocytes;

        return $this;
    }

    /**
     * Get leucocytes
     *
     * @return array 
     */
    public function getLeucocytes()
    {
        return $this->leucocytes;
    }

    /**
     * Set polynucleairesNeutrophiles
     *
     * @param array $polynucleairesNeutrophiles
     * @return Parametres
     */
    public function setPolynucleairesNeutrophiles($polynucleairesNeutrophiles)
    {
        $this->polynucleairesNeutrophiles = $polynucleairesNeutrophiles;

        return $this;
    }

    /**
     * Get polynucleairesNeutrophiles
     *
     * @return array 
     */
    public function getPolynucleairesNeutrophiles()
    {
        return $this->polynucleairesNeutrophiles;
    }

    /**
     * Set polynucleaireEosinophiles
     *
     * @param array $polynucleaireEosinophiles
     * @return Parametres
     */
    public function setPolynucleaireEosinophiles($polynucleaireEosinophiles)
    {
        $this->polynucleaireEosinophiles = $polynucleaireEosinophiles;

        return $this;
    }

    /**
     * Get polynucleaireEosinophiles
     *
     * @return array 
     */
    public function getPolynucleaireEosinophiles()
    {
        return $this->polynucleaireEosinophiles;
    }

    /**
     * Set polynucleaireBasophiles
     *
     * @param array $polynucleaireBasophiles
     * @return Parametres
     */
    public function setPolynucleaireBasophiles($polynucleaireBasophiles)
    {
        $this->polynucleaireBasophiles = $polynucleaireBasophiles;

        return $this;
    }

    /**
     * Get polynucleaireBasophiles
     *
     * @return array 
     */
    public function getPolynucleaireBasophiles()
    {
        return $this->polynucleaireBasophiles;
    }

    /**
     * Set lymphocytes
     *
     * @param array $lymphocytes
     * @return Parametres
     */
    public function setLymphocytes($lymphocytes)
    {
        $this->lymphocytes = $lymphocytes;

        return $this;
    }

    /**
     * Get lymphocytes
     *
     * @return array 
     */
    public function getLymphocytes()
    {
        return $this->lymphocytes;
    }

    /**
     * Set monocytes
     *
     * @param array $monocytes
     * @return Parametres
     */
    public function setMonocytes($monocytes)
    {
        $this->monocytes = $monocytes;

        return $this;
    }

    /**
     * Get monocytes
     *
     * @return array 
     */
    public function getMonocytes()
    {
        return $this->monocytes;
    }

    /**
     * Set hemoglobinesPlasmatique
     *
     * @param array $hemoglobinesPlasmatique
     * @return Parametres
     */
    public function setHemoglobinesPlasmatique($hemoglobinesPlasmatique)
    {
        $this->hemoglobinesPlasmatique = $hemoglobinesPlasmatique;

        return $this;
    }

    /**
     * Get hemoglobinesPlasmatique
     *
     * @return array 
     */
    public function getHemoglobinesPlasmatique()
    {
        return $this->hemoglobinesPlasmatique;
    }

    /**
     * Set ferSerique
     *
     * @param array $ferSerique
     * @return Parametres
     */
    public function setFerSerique($ferSerique)
    {
        $this->ferSerique = $ferSerique;

        return $this;
    }

    /**
     * Get ferSerique
     *
     * @return array 
     */
    public function getFerSerique()
    {
        return $this->ferSerique;
    }

    /**
     * Set TIBC
     *
     * @param array $tibc
     * @return Parametres
     */
    public function setTIBC($tibc)
    {
        $this->tibc = $tibc;

        return $this;
    }

    /**
     * Get TIBC
     *
     * @return array 
     */
    public function getTIBC()
    {
        return $this->tibc;
    }

    /**
     * Set glycemie
     *
     * @param array $glycemie
     * @return Parametres
     */
    public function setGlycemie($glycemie)
    {
        $this->glycemie = $glycemie;

        return $this;
    }

    /**
     * Get glycemie
     *
     * @return array 
     */
    public function getGlycemie()
    {
        return $this->glycemie;
    }

    /**
     * Set hemoglobineGlyquee
     *
     * @param array $hemoglobineGlyquee
     * @return Parametres
     */
    public function setHemoglobineGlyquee($hemoglobineGlyquee)
    {
        $this->hemoglobineGlyquee = $hemoglobineGlyquee;

        return $this;
    }

    /**
     * Get hemoglobineGlyquee
     *
     * @return array 
     */
    public function getHemoglobineGlyquee()
    {
        return $this->hemoglobineGlyquee;
    }

    /**
     * Set CRP
     *
     * @param array $crp
     * @return Parametres
     */
    public function setCRP($crp)
    {
        $this->crp = $crp;

        return $this;
    }

    /**
     * Get CRP
     *
     * @return array 
     */
    public function getCRP()
    {
        return $this->crp;
    }

    /**
     * Set albumine
     *
     * @param array $albumine
     * @return Parametres
     */
    public function setAlbumine($albumine)
    {
        $this->albumine = $albumine;

        return $this;
    }

    /**
     * Get albumine
     *
     * @return array 
     */
    public function getAlbumine()
    {
        return $this->albumine;
    }

    /**
     * Set electrophoreseDesProteinesSerique
     *
     * @param array $electrophoreseDesProteinesSerique
     * @return Parametres
     */
    public function setElectrophoreseDesProteinesSerique($electrophoreseDesProteinesSerique)
    {
        $this->electrophoreseDesProteinesSerique = $electrophoreseDesProteinesSerique;

        return $this;
    }

    /**
     * Get electrophoreseDesProteinesSerique
     *
     * @return array 
     */
    public function getElectrophoreseDesProteinesSerique()
    {
        return $this->electrophoreseDesProteinesSerique;
    }

    /**
     * Set hemoglobinurie
     *
     * @param array $hemoglobinurie
     * @return Parametres
     */
    public function setHemoglobinurie($hemoglobinurie)
    {
        $this->hemoglobinurie = $hemoglobinurie;

        return $this;
    }

    /**
     * Get hemoglobinurie
     *
     * @return array 
     */
    public function getHemoglobinurie()
    {
        return $this->hemoglobinurie;
    }

    /**
     * Set proteinurie
     *
     * @param array $proteinurie
     * @return Parametres
     */
    public function setProteinurie($proteinurie)
    {
        $this->proteinurie = $proteinurie;

        return $this;
    }

    /**
     * Get proteinurie
     *
     * @return array 
     */
    public function getProteinurie()
    {
        return $this->proteinurie;
    }

    /**
     * Set microalbuminurie
     *
     * @param array $microalbuminurie
     * @return Parametres
     */
    public function setMicroalbuminurie($microalbuminurie)
    {
        $this->microalbuminurie = $microalbuminurie;

        return $this;
    }

    /**
     * Get microalbuminurie
     *
     * @return array 
     */
    public function getMicroalbuminurie()
    {
        return $this->microalbuminurie;
    }
}
