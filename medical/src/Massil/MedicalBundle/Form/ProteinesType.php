<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProteinesType extends AbstractType
{
	private $bilanGeneralParams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralParams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P44 = hemoglobineGlyquee
    	 * P45 = cRP
    	 * P46 = albumine
    	 * P47 = electrophoreseDesProteinesSeriques
    	 * P48 = hemoglobinurie
    	 * P49 = proteinurie
    	 * P50 = microAlbuminurie and microAlbuminurie2
    	 * P51 = prealbumines
    	 * P52 = cPK
    	 * P53 = troponine
    	 * P54 = fibrinogene
    	 * P55 = haptoglobine
    	 * P56 = myoglobine
    	 * P57 = hbCO
    	 * P58 = metHb
    	 * P59 = proteinurieDeBenceJones
    	 * P60 = hydroxyprolinurie
    	 */
    	if (in_array('P44', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hemoglobineGlyquee')
    		;
    	}
    	if (in_array('P45', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('cRP')
    		;
    	}
    	if (in_array('P46', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('albumine')
    		;
    	}
    	if (in_array('P47', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('electrophoreseDesProteinesSeriques')
    		;
    	}
    	if (in_array('P48', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hemoglobinurie','choice',array('required'=>false
	            										,'choices'=>array('Hemoglobinurie : Absente','Hemoglobinurie : Presente')
	            										,'empty_value'=>'Hemoglobinurie'
	            										,'empty_data'=>null))
    		;
    	}
    	if (in_array('P49', $this->bilanGeneralParams))
    	{
    		$builder
            	->add('proteinurie')
    		;
    	}
    	if (in_array('P50', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('microAlbuminurie')
    	        ->add('microAlbuminurie2')
    		;
    	}
    	if (in_array('P51', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('prealbumines')
    		;
    	}
    	if (in_array('P52', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('cPK')
    		;
    	}
    	if (in_array('P53', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('troponine')
    		;
    	}
    	if (in_array('P54', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('fibrinogene')
    		;
    	}
    	if (in_array('P55', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('haptoglobine')
    		;
    	}
    	if (in_array('P56', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('myoglobine')
    		;
    	}
    	if (in_array('P57', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hbCO')
    		;
    	}
    	if (in_array('P58', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('metHb')
    		;
    	}
    	if (in_array('P59', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('proteinurieDeBenceJones','choice',array('required'=>false
	            												,'choices'=>array('Proteinurie de Bence Jones : Absente','Proteinurie de Bence Jones : Presente')
	            												,'empty_data'=>null
	            												,'empty_value'=>'Proteinurie de Bence Jones'))
    		;
    	}
    	if (in_array('P60', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hydroxyprolinurie')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Proteines'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_proteinestype';
    }
}
