<?php

namespace Massil\ConfigBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Massil\ConfigBundle\Entity\Parametere;

class ParamType extends AbstractType
{
	private $params;
	
	public function __construct($params)
	{
		$this->params=$params;
	}
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * 
    	 */
    	$parameters=$this->params;
    	
    	foreach ($parameters as $param)
    	{
    		$bilanParam = $param->getBilanParameters();
    		$data = $bilanParam[0]->getActivation(); 
    		$name = $param->getCode();
    		$label = $param->getNom();
    		
    		$builder
    			->add($name,'checkbox',array('data'=>$data
    										,'required'=>FALSE
    										,'label'=>html_entity_decode($label)));
    	}
    	
    	
    	/**
    	 * 
    	 */
    	/**
        $builder
            ->add('taille','checkbox',array('data'=>true))
            ->add('poids','checkbox',array('data'=>true))
            ->add('tension','checkbox',array('data'=>false))
        ;
        **/
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }

    public function getName()
    {
        return 'massil_configbundle_paramtype';
    }
}
