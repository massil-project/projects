<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * salleAttente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\SalleAttenteRepository")
 */
class SalleAttente
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Massil\MedicalBundle\Entity\PatientSalleAttente",mappedBy="salleAttente")
     */
    private $patientSalleAttentes;
    
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
     * Set date
     *
     * @param \DateTime $date
     * @return salleAttente
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
     * Constructor
     */
    public function __construct()
    {
        $this->patientSalleAttentes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime();
    }

    /**
     * Add patientSalleAttentes
     *
     * @param \Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttentes
     * @return SalleAttente
     */
    public function addPatientSalleAttente(\Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttente)
    {
        $this->patientSalleAttentes[] = $patientSalleAttente;
        $patientSalleAttente->setSalleAttente($this);

        return $this;
    }

    /**
     * Remove patientSalleAttentes
     *
     * @param \Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttentes
     */
    public function removePatientSalleAttente(\Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttente)
    {
        $this->patientSalleAttentes->removeElement($patientSalleAttente);
    }

    /**
     * Get patientSalleAttentes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPatientSalleAttentes()
    {
        return $this->patientSalleAttentes;
    }
}
