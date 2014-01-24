<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\ConsultationRepository")
 */
class Consultation
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
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $motif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="decimal", nullable=true)
     */
    private $poids;

    /**
     * @var string
     * 
     * @ORM\Column(name="taille", type="decimal", nullable=true)
     */
    private $taille;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="tensionarterielle", type="decimal",nullable=true)
     */
    private $tensionArterielle;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="decimal",nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="perimetreThoracique", type="decimal",nullable=true)
     */
    private $perimetreThoracique;

    /**
     * @var string
     *
     * @ORM\Column(name="perimetreBrachial", type="decimal",nullable=true)
     */
    private $perimetreBrachial;

    /**
     * @var string
     *
     * @ORM\Column(name="scapTriceps", type="decimal",nullable=true)
     */
    private $scapTriceps;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostic", type="text",nullable=true)
     */
    private $diagnostic;

	
    /**
     * @ORM\ManyToOne(targetEntity="Massil\MedicalBundle\Entity\Patient",inversedBy="consultations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;
    
    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Ordonnance",cascade={"persist","remove"})
     */
    private $ordonnance;
    
    /**
     * @ORM\OneToOne(targetEntity="Massil\MedicalBundle\Entity\Examen",cascade={"persist","remove"})
     */
    private $examen;
    
    
    /**
     * Constructor
     * 
     */
    public function __construct()
    {
    	$this->date=new \DateTime();
    }
    
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
     * Set motif
     *
     * @param string $motif
     * @return Consultation
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Consultation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Consultation
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set poids
     *
     * @param string $poids
     * @return Consultation
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set tensionArterielle
     *
     * @param string $tensionArterielle
     * @return Consultation
     */
    public function setTensionArterielle($tensionArterielle)
    {
        $this->tensionArterielle = $tensionArterielle;

        return $this;
    }

    /**
     * Get tensionArterielle
     *
     * @return string 
     */
    public function getTensionArterielle()
    {
        return $this->tensionArterielle;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     * @return Consultation
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set perimetreThoracique
     *
     * @param string $perimetreThoracique
     * @return Consultation
     */
    public function setPerimetreThoracique($perimetreThoracique)
    {
        $this->perimetreThoracique = $perimetreThoracique;

        return $this;
    }

    /**
     * Get perimetreThoracique
     *
     * @return string 
     */
    public function getPerimetreThoracique()
    {
        return $this->perimetreThoracique;
    }

    /**
     * Set perimetreBrachial
     *
     * @param string $perimetreBrachial
     * @return Consultation
     */
    public function setPerimetreBrachial($perimetreBrachial)
    {
        $this->perimetreBrachial = $perimetreBrachial;

        return $this;
    }

    /**
     * Get perimetreBrachial
     *
     * @return string 
     */
    public function getPerimetreBrachial()
    {
        return $this->perimetreBrachial;
    }

    /**
     * Set scapTriceps
     *
     * @param string $scapTriceps
     * @return Consultation
     */
    public function setScapTriceps($scapTriceps)
    {
        $this->scapTriceps = $scapTriceps;

        return $this;
    }

    /**
     * Get scapTriceps
     *
     * @return string 
     */
    public function getScapTriceps()
    {
        return $this->scapTriceps;
    }

    /**
     * Set diagnostic
     *
     * @param string $diagnostic
     * @return Consultation
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    /**
     * Get diagnostic
     *
     * @return string 
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set patient
     *
     * @param \Massil\MedicalBundle\Entity\Patient $patient
     * @return Consultation
     */
    public function setPatient(\Massil\MedicalBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Massil\MedicalBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return Consultation
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille; 
    }

    /**
     * Set ordonnance
     *
     * @param \Massil\MedicalBundle\Entity\Ordonnance $ordonnance
     * @return Consultation
     */
    public function setOrdonnance(\Massil\MedicalBundle\Entity\Ordonnance $ordonnance = null)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \Massil\MedicalBundle\Entity\Ordonnance 
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set examen
     *
     * @param \Massil\MedicalBundle\Entity\Examen $examen
     * @return Consultation
     */
    public function setExamen(\Massil\MedicalBundle\Entity\Examen $examen = null)
    {
        $this->examen = $examen;

        return $this;
    }

    /**
     * Get examen
     *
     * @return \Massil\MedicalBundle\Entity\Examen 
     */
    public function getExamen()
    {
        return $this->examen;
    }
}
