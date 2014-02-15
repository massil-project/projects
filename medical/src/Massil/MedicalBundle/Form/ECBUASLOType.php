<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ECBUASLOType extends AbstractType
{
	private $params;
	
	public function __construct($params)
	{
		$this->params=$params;
	}
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P86 = cytologique
    	 * P87 = bacteriologique
    	 * P88 = aSLO
    	 */
    	
    	if (in_array('P86', $this->params))
    	{
    		$builder
	            ->add('cytologique')
    		;
    	}
    	if (in_array('P87', $this->params))
    	{
    		$builder
	            ->add('bacteriologique')
    		;
    	}
    	if (in_array('P88', $this->params))
    	{
    		$builder
	            ->add('aSLO')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\ECBUASLO'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_ecbuaslotype';
    }
}
