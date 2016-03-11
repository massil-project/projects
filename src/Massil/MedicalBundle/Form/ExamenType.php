<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenType extends AbstractType
{
	private $bilanGeneralparams;
	private $isEdit;
	private $b01Active;
	public function __construct($bilanGeneralParams,$isEdit,$b01Active)
	{
		$this->b01Active=$b01Active;
		$this->bilanGeneralparams=$bilanGeneralParams;
		$this->isEdit=$isEdit;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	if ($this->isEdit == true)
    	{
    		if ($this->b01Active == false)
    		{
		        $builder
        		    ->add('bilanGeneralActive','hidden',array('data'=>'false'));
    		}
    		else 
    		{
		        $builder
        		    ->add('bilanGeneralActive','hidden',array('data'=>'true'));
    		}
    	}
    	else 
    	{
        	$builder
         	   ->add('bilanGeneralActive','hidden',array('data'=>'false'));    		
    	}
    	$builder
            ->add('bilangeneral',new BilanGeneralType($this->bilanGeneralparams))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Examen'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_examentype';
    }
}
