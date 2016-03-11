<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FerType extends AbstractType
{
	private $bilanGeneralParams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralParams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P40 = ferSerique
    	 * P41 = tIBC
    	 * P42 = ferritine
    	 * P43 = transferrine
    	 */
    	if (in_array('P40', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('ferSerique')
    		;
    	}
    	if (in_array('P41', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('tIBC')
    		;
    	}
    	if (in_array('P42', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('ferritine')
    		;
    	}
    	if (in_array('P43', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('transferrine')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Fer'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_fertype';
    }
}
