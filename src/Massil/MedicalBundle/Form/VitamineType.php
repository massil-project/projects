<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VitamineType extends AbstractType
{
	private $params;
	
	public function __construct($params)
	{
		$this->params=$params;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P77 = a1
    	 * P78 = c
    	 * P79 = b1
    	 * P80 = b2
    	 * P81 = b3
    	 * P82 = b6
    	 * P83 = b9
    	 * P84 = b12
    	 * P85 = d3
    	 */
    	if (in_array('P77', $this->params))
    	{
    		$builder
	            ->add('a1')
    		;
    	}
    	if (in_array('P78', $this->params))
    	{
    		$builder
	            ->add('c')
    		;
    	}
    	if (in_array('P79', $this->params))
    	{
    		$builder
	            ->add('b1')
    		;
    	}
    	if (in_array('P80', $this->params))
    	{
    		$builder
	            ->add('b2')
    		;
    	}
    	if (in_array('P81', $this->params))
    	{
    		$builder
	            ->add('b3')
    		;
    	}
    	if (in_array('P82', $this->params))
    	{
    		$builder
	            ->add('b6')
    		;
    	}
    	if (in_array('P83', $this->params))
    	{
    		$builder
	            ->add('b9')
    		;
    	}
    	if (in_array('P84', $this->params))
    	{
    		$builder
	            ->add('b12')
    		;
    	}
    	if (in_array('P85', $this->params))
    	{
    		$builder
	            ->add('d3')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Vitamine'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_vitaminetype';
    }
}
