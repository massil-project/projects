<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HepatiqueType extends AbstractType
{
	private $params;
	
	public function __construct($params)
	{
		$this->params=$params;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P65 = amylaseUrinaire
    	 * P66 = alcool
    	 * P67 = amylase
    	 * P68 = bilirubineTotal and bilirubineLibre and bilirubineConjuguee
    	 * P69 = yGT
    	 * P70 = nucleotidase
    	 * P71 = lipase
    	 * P72 = phosphatasesAcides
    	 * P73 = phosphatasesAlcalines
    	 * P74 = lDH
    	 * P75 = aSAT
    	 * P76 = aLAT
    	 */
    	
    	if (in_array('P65', $this->params))
    	{
    		$builder
	            ->add('amylaseUrinaire')
    		;
    	}
    	if (in_array('P66', $this->params))
    	{
    		$builder
	            ->add('alcool')
    		;
    	}
    	if (in_array('P67', $this->params))
    	{
    		$builder
	            ->add('amylase')
    		;
    	}
    	if (in_array('P68', $this->params))
    	{
    		$builder
	            ->add('bilirubineTotal')
	            ->add('bilirubineLibre')
	            ->add('bilirubineConjuguee')
    		;
    	}
    	if (in_array('P69', $this->params))
    	{
    		$builder
	            ->add('yGT')
    		;
    	}
    	if (in_array('P70', $this->params))
    	{
    		$builder
	            ->add('nucleotidase')
    		;
    	}
    	if (in_array('P71', $this->params))
    	{
    		$builder
	            ->add('lipase')
    		;
    	}
    	if (in_array('P72', $this->params))
    	{
    		$builder
	            ->add('phosphatasesAcides')
    		;
    	}
    	if (in_array('P73', $this->params))
    	{
    		$builder
	            ->add('phosphatasesAlcalines')
    		;
    	}
    	if (in_array('P74', $this->params))
    	{
    		$builder
	            ->add('lDH')
    		;
    	}
    	if (in_array('P75', $this->params))
    	{
    		$builder
	            ->add('aSAT')
    		;
    	}
    	if (in_array('P76', $this->params))
    	{
    		$builder
	            ->add('aLAT')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Hepatique'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_hepatiquetype';
    }
}
