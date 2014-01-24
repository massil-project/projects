<?php
namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pateintSalleAttente
 *
 * @ORM\Entity
 */
class PatientSalleAttente
{
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Massil\MedicalBundle\Entity\Patient",inversedBy="patientSalleAttentes")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $patient;
	
	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Massil\MedicalBundle\Entity\SalleAttente",inversedBy="patientSalleAttentes")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $salleAttente;
	
	
	/**
	 * @ORM\Column(name="datearrive", type="datetime")
	 */
	private $dateArrive;
	
	
	/**
	 * @ORM\Column(name="etatpatient", type="string", length=255)
	 */
	private $etatPatient;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->dateArrive = new  \DateTime();
		$this->etatPatient = 'en attente';
	}
	

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     * @return PatientSalleAttente
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime 
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set patient
     *
     * @param \Massil\MedicalBundle\Entity\Patient $patient
     * @return PatientSalleAttente
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
     * Set salleAttente
     *
     * @param \Massil\MedicalBundle\Entity\SalleAttente $salleAttente
     * @return PatientSalleAttente
     */
    public function setSalleAttente(\Massil\MedicalBundle\Entity\SalleAttente $salleAttente)
    {
        $this->salleAttente = $salleAttente;

        return $this;
    }

    /**
     * Get salleAttente
     *
     * @return \Massil\MedicalBundle\Entity\SalleAttente 
     */
    public function getSalleAttente()
    {
        return $this->salleAttente;
    }

    /**
     * Set etatPatient
     *
     * @param string $etatPatient
     * @return PatientSalleAttente
     */
    public function setEtatPatient($etatPatient)
    {
        $this->etatPatient = $etatPatient;

        return $this;
    }

    /**
     * Get etatPatient
     *
     * @return string 
     */
    public function getEtatPatient()
    {
        return $this->etatPatient;
    }
}
