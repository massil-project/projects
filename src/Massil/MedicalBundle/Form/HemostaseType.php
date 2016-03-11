<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HemostaseType extends AbstractType
{
	private $bilanGeneralParams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralParams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P01 = tempsDeSaignementDuke
    	 * P02 = tempsDeSaignementIvy
    	 * P03 = tempsDeProthrombineINR
    	 * P04 = tempsDeCephalineActiveTCA
    	 * P05 = fibrinogene
    	 * P06 = facteurAntithemophiliqueVIII
    	 * P07 = facteurAntithemophiliqueIX
    	 * P08 = heparenimie
    	 * P09 = antiThrombineDosage
    	 * P10 = antiThrombineActive
    	 * P11 = proteineCS
    	 */
    	if (in_array('P01', $this->bilanGeneralParams))
    	{
    		$builder
    			->add('tempsDeSaignementDuke','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'temps de saignement Duke')));
    	}
    	if (in_array('P02', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('tempsDeSaignementIvy','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'temps de saignement Ivy')));
    	}
    	if (in_array('P03', $this->bilanGeneralParams))
    	{
    		$builder
            ->add('tempsDeProthrombineINR','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'temps de prothrombine')));
    	}
    	if (in_array('P04', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('tempsDeCephalineActiveTCA','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'temps de cephaline active')));
    	}
    	if (in_array('P05', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('fibrinogene','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'fibrinogene')));
    	}
    	if (in_array('P06', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('facteurAntithemophiliqueVIII','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'facteur anti-themophilique VIII')));
    	}
    	if (in_array('P07', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('facteurAntithemophiliqueIX','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'facteur anti-themophilique IX')));
    	}
    	if (in_array('P08', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('heparenimie','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'heparenimie')));
    	}
    	if (in_array('P09', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('antiThrombineDosage','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'dosage de l\'anti-thrombine')));
    	}
    	if (in_array('P10', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('antiThrombineActive','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'anti-thrombine active')));
    	}
    	if (in_array('P11', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('proteineCS','text',array('required'=>false
	            										,'attr'=>array('placeholder'=>'Proteine S/Proteine C')));
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Hemostase'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_hemostasetype';
    }
}
