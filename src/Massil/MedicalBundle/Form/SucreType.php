<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SucreType extends AbstractType
{
	private $params;
	public function __construct($params)
	{
		$this->params=$params;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P61= glycemie
    	 * P62= glucose
    	 * P63= glucoseUrinaire
    	 * P64= peptideC
    	 */
    	if (in_array('P61', $this->params))
    	{
    		$builder
	            ->add('glycemie')
    		;
    	}
    	if (in_array('P62', $this->params))
    	{
    		$builder
	            ->add('glucose')
    		;
    	}
    	if (in_array('P63', $this->params))
    	{
    		$builder
	            ->add('glucoseUrinaire','choice',array('required'=>false
	            										,'choices'=>array('Glucose Urinaire : Absente','Glucose Urinaire : Presente')
	            										,'empty_value'=>'Glucose Urinaire'
	            										,'empty_data'=>NULL))
    		;
    	}
    	if (in_array('P64', $this->params))
    	{
    		$builder
	            ->add('peptideC')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Sucre'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_sucretype';
    }
}
