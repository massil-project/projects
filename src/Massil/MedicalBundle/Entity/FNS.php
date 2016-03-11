<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FNS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\FNSRepository")
 */
class FNS
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
     * @ORM\Column(name="hematie", type="decimal", scale=2, nullable=true)
     */
    private $hematie;

    /**
     * @var string
     *
     * @ORM\Column(name="hemoglobine", type="decimal", scale=2, nullable=true)
     */
    private $hemoglobine;

    /**
     * @var string
     *
     * @ORM\Column(name="hematocrite", type="decimal", scale=2, nullable=true)
     */
    private $hematocrite;

    /**
     * @var string
     *
     * @ORM\Column(name="vGM", type="decimal", scale=2, nullable=true)
     */
    private $vGM;

    /**
     * @var string
     *
     * @ORM\Column(name="tCMH", type="decimal", scale=2, nullable=true)
     */
    private $tCMH;

    /**
     * @var string
     *
     * @ORM\Column(name="cCMH", type="decimal", scale=2, nullable=true)
     */
    private $cCMH;

    /**
     * @var string
     *
     * @ORM\Column(name="leucocytes", type="decimal", scale=2, nullable=true)
     */
    private $leucocytes;

    /**
     * @var string
     *
     * @ORM\Column(name="reticulocytes", type="decimal", scale=2, nullable=true)
     */
    private $reticulocytes;

    /**
     * @var string
     *
     * @ORM\Column(name="polynucleairesNeutrophiles", type="decimal", scale=2, nullable=true)
     */
    private $polynucleairesNeutrophiles;

    /**
     * @var string
     *
     * @ORM\Column(name="polynucleairesEosinophiles", type="decimal", scale=2, nullable=true)
     */
    private $polynucleairesEosinophiles;

    /**
     * @var string
     *
     * @ORM\Column(name="polynucleairesBasophiles", type="decimal", scale=2, nullable=true)
     */
    private $polynucleairesBasophiles;

    /**
     * @var string
     *
     * @ORM\Column(name="lymphocytes", type="decimal", scale=2, nullable=true)
     */
    private $lymphocytes;

    /**
     * @var string
     *
     * @ORM\Column(name="monocytes", type="decimal", scale=2, nullable=true)
     */
    private $monocytes;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquettes", type="decimal", scale=2, nullable=true)
     */
    private $plaquettes;

    /**
     * @var string
     *
     * @ORM\Column(name="hemoglobinesPlasmatique", type="decimal", scale=2, nullable=true)
     */
    private $hemoglobinesPlasmatique;

    /**
     * @var string
     *
     * @ORM\Column(name="hemoglobinesGlyqueeHbA1C", type="decimal", scale=2, nullable=true)
     */
    private $hemoglobinesGlyqueeHbA1C;

    /**
     * @var string
     *
     * @ORM\Column(name="vS1", type="decimal", scale=2, nullable=true)
     */
    private $vS1;

    /**
     * @var string
     *
     * @ORM\Column(name="vS2", type="decimal", scale=2, nullable=true)
     */
    private $vS2;

    /**
     * @var string
     *
     * @ORM\Column(name="proerythroblaste", type="decimal", scale=2, nullable=true)
     */
    private $proerythroblaste;

    /**
     * @var string
     *
     * @ORM\Column(name="erythroblasteBasophile", type="decimal", scale=2, nullable=true)
     */
    private $erythroblasteBasophile;

    /**
     * @var string
     *
     * @ORM\Column(name="erythroblastePolychromatophile", type="decimal", scale=2, nullable=true)
     */
    private $erythroblastePolychromatophile;

    /**
     * @var string
     *
     * @ORM\Column(name="erythroblasteAcidophile", type="decimal", scale=2, nullable=true)
     */
    private $erythroblasteAcidophile;

    /**
     * @var string
     *
     * @ORM\Column(name="myeloblaste", type="decimal", scale=2, nullable=true)
     */
    private $myeloblaste;

    /**
     * @var string
     *
     * @ORM\Column(name="promyelocyte", type="decimal", scale=2, nullable=true)
     */
    private $promyelocyte;

    /**
     * @var string
     *
     * @ORM\Column(name="myelocyteNeutrophile", type="decimal", scale=2, nullable=true)
     */
    private $myelocyteNeutrophile;

    /**
     * @var string
     *
     * @ORM\Column(name="metamyelocyteNeutrophile", type="decimal", scale=2, nullable=true)
     */
    private $metamyelocyteNeutrophile;

    /**
     * @var string
     *
     * @ORM\Column(name="polynucleaire", type="decimal", scale=2, nullable=true)
     */
    private $polynucleaire;

    /**
     * @var string
     *
     * @ORM\Column(name="plasmocytes", type="decimal", scale=2, nullable=true)
     */
    private $plasmocytes;

    /**
     * @var string
     *
     * @ORM\Column(name="megacaryocytaire", type="decimal", scale=2, nullable=true)
     */
    private $megacaryocytaire;


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
     * @param string $hematie
     * @return FNS
     */
    public function setHematie($hematie)
    {
        $this->hematie = $hematie;

        return $this;
    }

    /**
     * Get hematie
     *
     * @return string 
     */
    public function getHematie()
    {
        return $this->hematie;
    }

    /**
     * Set hemoglobine
     *
     * @param string $hemoglobine
     * @return FNS
     */
    public function setHemoglobine($hemoglobine)
    {
        $this->hemoglobine = $hemoglobine;

        return $this;
    }

    /**
     * Get hemoglobine
     *
     * @return string 
     */
    public function getHemoglobine()
    {
        return $this->hemoglobine;
    }

    /**
     * Set hematocrite
     *
     * @param string $hematocrite
     * @return FNS
     */
    public function setHematocrite($hematocrite)
    {
        $this->hematocrite = $hematocrite;

        return $this;
    }

    /**
     * Get hematocrite
     *
     * @return string 
     */
    public function getHematocrite()
    {
        return $this->hematocrite;
    }

    /**
     * Set vGM
     *
     * @param string $vGM
     * @return FNS
     */
    public function setVGM($vGM)
    {
        $this->vGM = $vGM;

        return $this;
    }

    /**
     * Get vGM
     *
     * @return string 
     */
    public function getVGM()
    {
        return $this->vGM;
    }

    /**
     * Set tCMH
     *
     * @param string $tCMH
     * @return FNS
     */
    public function setTCMH($tCMH)
    {
        $this->tCMH = $tCMH;

        return $this;
    }

    /**
     * Get tCMH
     *
     * @return string 
     */
    public function getTCMH()
    {
        return $this->tCMH;
    }

    /**
     * Set cCMH
     *
     * @param string $cCMH
     * @return FNS
     */
    public function setCCMH($cCMH)
    {
        $this->cCMH = $cCMH;

        return $this;
    }

    /**
     * Get cCMH
     *
     * @return string 
     */
    public function getCCMH()
    {
        return $this->cCMH;
    }

    /**
     * Set leucocytes
     *
     * @param string $leucocytes
     * @return FNS
     */
    public function setLeucocytes($leucocytes)
    {
        $this->leucocytes = $leucocytes;

        return $this;
    }

    /**
     * Get leucocytes
     *
     * @return string 
     */
    public function getLeucocytes()
    {
        return $this->leucocytes;
    }

    /**
     * Set reticulocytes
     *
     * @param string $reticulocytes
     * @return FNS
     */
    public function setReticulocytes($reticulocytes)
    {
        $this->reticulocytes = $reticulocytes;

        return $this;
    }

    /**
     * Get reticulocytes
     *
     * @return string 
     */
    public function getReticulocytes()
    {
        return $this->reticulocytes;
    }

    /**
     * Set polynucleairesNeutrophiles
     *
     * @param string $polynucleairesNeutrophiles
     * @return FNS
     */
    public function setPolynucleairesNeutrophiles($polynucleairesNeutrophiles)
    {
        $this->polynucleairesNeutrophiles = $polynucleairesNeutrophiles;

        return $this;
    }

    /**
     * Get polynucleairesNeutrophiles
     *
     * @return string 
     */
    public function getPolynucleairesNeutrophiles()
    {
        return $this->polynucleairesNeutrophiles;
    }

    /**
     * Set polynucleairesEosinophiles
     *
     * @param string $polynucleairesEosinophiles
     * @return FNS
     */
    public function setPolynucleairesEosinophiles($polynucleairesEosinophiles)
    {
        $this->polynucleairesEosinophiles = $polynucleairesEosinophiles;

        return $this;
    }

    /**
     * Get polynucleairesEosinophiles
     *
     * @return string 
     */
    public function getPolynucleairesEosinophiles()
    {
        return $this->polynucleairesEosinophiles;
    }

    /**
     * Set polynucleairesBasophiles
     *
     * @param string $polynucleairesBasophiles
     * @return FNS
     */
    public function setPolynucleairesBasophiles($polynucleairesBasophiles)
    {
        $this->polynucleairesBasophiles = $polynucleairesBasophiles;

        return $this;
    }

    /**
     * Get polynucleairesBasophiles
     *
     * @return string 
     */
    public function getPolynucleairesBasophiles()
    {
        return $this->polynucleairesBasophiles;
    }

    /**
     * Set lymphocytes
     *
     * @param string $lymphocytes
     * @return FNS
     */
    public function setLymphocytes($lymphocytes)
    {
        $this->lymphocytes = $lymphocytes;

        return $this;
    }

    /**
     * Get lymphocytes
     *
     * @return string 
     */
    public function getLymphocytes()
    {
        return $this->lymphocytes;
    }

    /**
     * Set monocytes
     *
     * @param string $monocytes
     * @return FNS
     */
    public function setMonocytes($monocytes)
    {
        $this->monocytes = $monocytes;

        return $this;
    }

    /**
     * Get monocytes
     *
     * @return string 
     */
    public function getMonocytes()
    {
        return $this->monocytes;
    }

    /**
     * Set plaquettes
     *
     * @param string $plaquettes
     * @return FNS
     */
    public function setPlaquettes($plaquettes)
    {
        $this->plaquettes = $plaquettes;

        return $this;
    }

    /**
     * Get plaquettes
     *
     * @return string 
     */
    public function getPlaquettes()
    {
        return $this->plaquettes;
    }

    /**
     * Set hemoglobinesPlasmatique
     *
     * @param string $hemoglobinesPlasmatique
     * @return FNS
     */
    public function setHemoglobinesPlasmatique($hemoglobinesPlasmatique)
    {
        $this->hemoglobinesPlasmatique = $hemoglobinesPlasmatique;

        return $this;
    }

    /**
     * Get hemoglobinesPlasmatique
     *
     * @return string 
     */
    public function getHemoglobinesPlasmatique()
    {
        return $this->hemoglobinesPlasmatique;
    }

    /**
     * Set hemoglobinesGlyqueeHbA1C
     *
     * @param string $hemoglobinesGlyqueeHbA1C
     * @return FNS
     */
    public function setHemoglobinesGlyqueeHbA1C($hemoglobinesGlyqueeHbA1C)
    {
        $this->hemoglobinesGlyqueeHbA1C = $hemoglobinesGlyqueeHbA1C;

        return $this;
    }

    /**
     * Get hemoglobinesGlyqueeHbA1C
     *
     * @return string 
     */
    public function getHemoglobinesGlyqueeHbA1C()
    {
        return $this->hemoglobinesGlyqueeHbA1C;
    }

    /**
     * Set vS1
     *
     * @param string $vS1
     * @return FNS
     */
    public function setVS1($vS1)
    {
        $this->vS1 = $vS1;

        return $this;
    }

    /**
     * Get vS1
     *
     * @return string 
     */
    public function getVS1()
    {
        return $this->vS1;
    }

    /**
     * Set vS2
     *
     * @param string $vS2
     * @return FNS
     */
    public function setVS2($vS2)
    {
        $this->vS2 = $vS2;

        return $this;
    }

    /**
     * Get vS2
     *
     * @return string 
     */
    public function getVS2()
    {
        return $this->vS2;
    }

    /**
     * Set proerythroblaste
     *
     * @param string $proerythroblaste
     * @return FNS
     */
    public function setProerythroblaste($proerythroblaste)
    {
        $this->proerythroblaste = $proerythroblaste;

        return $this;
    }

    /**
     * Get proerythroblaste
     *
     * @return string 
     */
    public function getProerythroblaste()
    {
        return $this->proerythroblaste;
    }

    /**
     * Set erythroblasteBasophile
     *
     * @param string $erythroblasteBasophile
     * @return FNS
     */
    public function setErythroblasteBasophile($erythroblasteBasophile)
    {
        $this->erythroblasteBasophile = $erythroblasteBasophile;

        return $this;
    }

    /**
     * Get erythroblasteBasophile
     *
     * @return string 
     */
    public function getErythroblasteBasophile()
    {
        return $this->erythroblasteBasophile;
    }

    /**
     * Set erythroblastePolychromatophile
     *
     * @param string $erythroblastePolychromatophile
     * @return FNS
     */
    public function setErythroblastePolychromatophile($erythroblastePolychromatophile)
    {
        $this->erythroblastePolychromatophile = $erythroblastePolychromatophile;

        return $this;
    }

    /**
     * Get erythroblastePolychromatophile
     *
     * @return string 
     */
    public function getErythroblastePolychromatophile()
    {
        return $this->erythroblastePolychromatophile;
    }

    /**
     * Set erythroblasteAcidophile
     *
     * @param string $erythroblasteAcidophile
     * @return FNS
     */
    public function setErythroblasteAcidophile($erythroblasteAcidophile)
    {
        $this->erythroblasteAcidophile = $erythroblasteAcidophile;

        return $this;
    }

    /**
     * Get erythroblasteAcidophile
     *
     * @return string 
     */
    public function getErythroblasteAcidophile()
    {
        return $this->erythroblasteAcidophile;
    }

    /**
     * Set myeloblaste
     *
     * @param string $myeloblaste
     * @return FNS
     */
    public function setMyeloblaste($myeloblaste)
    {
        $this->myeloblaste = $myeloblaste;

        return $this;
    }

    /**
     * Get myeloblaste
     *
     * @return string 
     */
    public function getMyeloblaste()
    {
        return $this->myeloblaste;
    }

    /**
     * Set promyelocyte
     *
     * @param string $promyelocyte
     * @return FNS
     */
    public function setPromyelocyte($promyelocyte)
    {
        $this->promyelocyte = $promyelocyte;

        return $this;
    }

    /**
     * Get promyelocyte
     *
     * @return string 
     */
    public function getPromyelocyte()
    {
        return $this->promyelocyte;
    }

    /**
     * Set myelocyteNeutrophile
     *
     * @param string $myelocyteNeutrophile
     * @return FNS
     */
    public function setMyelocyteNeutrophile($myelocyteNeutrophile)
    {
        $this->myelocyteNeutrophile = $myelocyteNeutrophile;

        return $this;
    }

    /**
     * Get myelocyteNeutrophile
     *
     * @return string 
     */
    public function getMyelocyteNeutrophile()
    {
        return $this->myelocyteNeutrophile;
    }

    /**
     * Set metamyelocyteNeutrophile
     *
     * @param string $metamyelocyteNeutrophile
     * @return FNS
     */
    public function setMetamyelocyteNeutrophile($metamyelocyteNeutrophile)
    {
        $this->metamyelocyteNeutrophile = $metamyelocyteNeutrophile;

        return $this;
    }

    /**
     * Get metamyelocyteNeutrophile
     *
     * @return string 
     */
    public function getMetamyelocyteNeutrophile()
    {
        return $this->metamyelocyteNeutrophile;
    }

    /**
     * Set polynucleaire
     *
     * @param string $polynucleaire
     * @return FNS
     */
    public function setPolynucleaire($polynucleaire)
    {
        $this->polynucleaire = $polynucleaire;

        return $this;
    }

    /**
     * Get polynucleaire
     *
     * @return string 
     */
    public function getPolynucleaire()
    {
        return $this->polynucleaire;
    }

    /**
     * Set plasmocytes
     *
     * @param string $plasmocytes
     * @return FNS
     */
    public function setPlasmocytes($plasmocytes)
    {
        $this->plasmocytes = $plasmocytes;

        return $this;
    }

    /**
     * Get plasmocytes
     *
     * @return string 
     */
    public function getPlasmocytes()
    {
        return $this->plasmocytes;
    }

    /**
     * Set megacaryocytaire
     *
     * @param string $megacaryocytaire
     * @return FNS
     */
    public function setMegacaryocytaire($megacaryocytaire)
    {
        $this->megacaryocytaire = $megacaryocytaire;

        return $this;
    }

    /**
     * Get megacaryocytaire
     *
     * @return string 
     */
    public function getMegacaryocytaire()
    {
        return $this->megacaryocytaire;
    }
}
