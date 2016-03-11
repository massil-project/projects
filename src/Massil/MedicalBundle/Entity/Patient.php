<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="Massil\MedicalBundle\Entity\PatientRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Patient
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
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(min="2")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\Length(min="2")
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date")
     * 
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="assure", type="boolean",nullable=true)
     */
    private $assure;

    /**
     * @var string
     *
     * @ORM\Column(name="etatcivil", type="string", length=255,nullable=true)
     */
    private $etatCivil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime")
     */
    private $dateAjout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateedition", type="datetime")
     */
    private $dateEdition;
    
    /**
     * @ORM\OneToMany(targetEntity="Massil\MedicalBundle\Entity\Consultation", mappedBy="patient",cascade={"remove"})
     */
    private $consultations;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Massil\MedicalBundle\Entity\Antecedant",mappedBy="patient",cascade={"remove"})
     */
    private $antecedants;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Massil\MedicalBundle\Entity\PatientSalleAttente",mappedBy="patient", cascade={"remove"})
     */
    private $patientSalleAttentes;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->antecedants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateAjout=new \DateTime();
        $this->dateEdition= new \DateTime();
    }
    /**
     * @ORM\PreUpdate()
     */
    public function updateDateEdition()
    {
    	$this->dateEdition=new \DateTime();
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
     * Set nom
     *
     * @param string $nom
     * @return Patient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Patient
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Patient
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Patient
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set assure
     *
     * @param boolean $assure
     * @return Patient
     */
    public function setAssure($assure)
    {
        $this->assure = $assure;

        return $this;
    }

    /**
     * Get assure
     *
     * @return boolean 
     */
    public function getAssure()
    {
        return $this->assure;
    }

    /**
     * Set atatcivil
     *
     * @param string $atatcivil
     * @return Patient
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get atatcivil
     *
     * @return string 
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return Patient
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime 
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Patient
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }


    /**
     * Add consultation
     *
     * @param \Massil\MedicalBundle\Entity\Consultation $consultation
     * @return Patient
     */
    public function addConsultation(\Massil\MedicalBundle\Entity\Consultation $consultation)
    {
        $this->consultations[] = $consultation;
		$consultation->setPatient($this);
        return $this;
    }

    /**
     * Remove consultation
     *
     * @param \Massil\MedicalBundle\Entity\Consultation $consultation
     */
    public function removeConsultation(\Massil\MedicalBundle\Entity\Consultation $consultation)
    {
        $this->consultations->removeElement($consultation);
    }

    /**
     * Get consultation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */

    /**
     * Get consultations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsultations()
    {
        return $this->consultations;
    }

    /**
     * Add antecedants
     *
     * @param \Massil\MedicalBundle\Entity\Antecedant $antecedants
     * @return Patient
     */
    public function addAntecedant(\Massil\MedicalBundle\Entity\Antecedant $antecedant)
    {
        $this->antecedants[] = $antecedant;
        $antecedant->setPatient($this);

        return $this;
    }

    /**
     * Remove antecedants
     *
     * @param \Massil\MedicalBundle\Entity\Antecedant $antecedants
     */
    public function removeAntecedant(\Massil\MedicalBundle\Entity\Antecedant $antecedant)
    {
        $this->antecedants->removeElement($antecedant);
    }

    /**
     * Get antecedants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAntecedants()
    {
        return $this->antecedants;
    }

    /**
     * Add patientSalleAttentes
     *
     * @param \Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttentes
     * @return Patient
     */
    public function addPatientSalleAttente(\Massil\MedicalBundle\Entity\PatientSalleAttente $patientSalleAttente)
    {
        $this->patientSalleAttentes[] = $patientSalleAttente;
        $patientSalleAttente->setPatient($this);

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
