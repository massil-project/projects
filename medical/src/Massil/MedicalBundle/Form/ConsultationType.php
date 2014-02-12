<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsultationType extends AbstractType
{
	private $bilanGeneralparams;
	private $isEdit;
	private $b01Active;
	public function __construct($bilanGeneralParams, $isEdit ,$b01Active)
	{
		$this->b01Active=$b01Active;
		$this->isEdit=$isEdit;
		$this->bilanGeneralparams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif','textarea',array('required'=>false))
            ->add('age','text',array('required'=>false))
            ->add('poids','text',array('required'=>false))
            ->add('taille','text',array('required'=>false))
            ->add('tensionArterielle','text',array('required'=>false))
            ->add('temperature','text',array('required'=>false))
            ->add('perimetreThoracique','text',array('required'=>false))
            ->add('perimetreBrachial','text',array('required'=>false))
            ->add('scapTriceps','text',array('required'=>false))
            ->add('diagnostic','textarea',array('required'=>false))
            ->add('ordonnance',new OrdonnanceType());
            if ($this->isEdit == true)
            {
            	$builder
		            ->add('examen',new ExamenType($this->bilanGeneralparams,true,$this->b01Active));
            }
            else 
            {
            	$builder
		            ->add('examen',new ExamenType($this->bilanGeneralparams,false,$this->b01Active));
            }
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Consultation'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_consultationtype';
    }
}
