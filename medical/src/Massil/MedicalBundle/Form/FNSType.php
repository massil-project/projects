<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FNSType extends AbstractType
{
	private $bilanGeneralParams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralParams=$bilanGeneralParams;
	}
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	/**
    	 * P12 = hematie
    	 * P13 = hemoglobine
    	 * P14 = hematocrite
    	 * P15 = vGM
    	 * P16 = tCMH
    	 * P17 = cCMH
    	 * P18 = leucocytes
    	 * P19 = reticulocytes
    	 * P20 = polynucleairesNeutrophiles
    	 * P21 = polynucleairesEosinophiles
    	 * P22 = polynucleairesBasophiles
    	 * P23 = lymphocytes
    	 * P24 = monocytes
    	 * P25 = plaquettes
    	 * P26 = hemoglobinesPlasmatique
    	 * P27 = hemoglobinesGlyqueeHbA1C
    	 * P28 = vS1 and vS2
    	 * P29 = proerythroblaste
    	 * P30 = erythroblasteBasophile
    	 * P31 = erythroblastePolychromatophile
    	 * P32 = erythroblasteAcidophile
    	 * P33 = myeloblaste
    	 * P34 = promyelocyte
    	 * P35 = myelocyteNeutrophile
    	 * P36 = metamyelocyteNeutrophile
    	 * P37 = polynucleaire
    	 * P38 = plasmocytes
    	 * P39 = megacaryocytaire
    	 */
    	
    	if (in_array('P12', $this->bilanGeneralParams))
    	{
    		$builder
            	->add('hematie')
    		;
    	}
    	if (in_array('P13', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hemoglobine')
    		;
    	}
    	if (in_array('P14', $this->bilanGeneralParams))
    	{
    		$builder
    	        ->add('hematocrite')
    		;
    	}
    	if (in_array('P15', $this->bilanGeneralParams))
    	{
    		$builder
        	    ->add('vGM')
    		;
    	}
    	if (in_array('P16', $this->bilanGeneralParams))
    	{
    		$builder
            	->add('tCMH')
    		;
    	}
    	if (in_array('P17', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('cCMH')
    		;
    	}
    	if (in_array('P18', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('leucocytes')
    		;
    	}
    	if (in_array('P19', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('reticulocytes')
    		;
    	}
    	if (in_array('P20', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('polynucleairesNeutrophiles')
    		;
    	}
    	if (in_array('P21', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('polynucleairesEosinophiles')
    		;
    	}
    	if (in_array('P22', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('polynucleairesBasophiles')
    		;
    	}
    	if (in_array('P23', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('lymphocytes')
    		;
    	}
    	if (in_array('P24', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('monocytes')
    		;
    	}
    	if (in_array('P25', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('plaquettes')
    		;
    	}
    	if (in_array('P26', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hemoglobinesPlasmatique')
    		;
    	}
    	if (in_array('P27', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('hemoglobinesGlyqueeHbA1C')
    		;
    	}
    	if (in_array('P28', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('vS1')
	            ->add('vS2')
    		;
    	}
    	if (in_array('P29', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('proerythroblaste')
    		;
    	}
    	if (in_array('P30', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('erythroblasteBasophile')
    		;
    	}
    	if (in_array('P31', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('erythroblastePolychromatophile')
    		;
    	}
    	if (in_array('P32', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('erythroblasteAcidophile')
    		;
    	}
    	if (in_array('P33', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('myeloblaste')
    		;
    	}
    	if (in_array('P34', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('promyelocyte')
    		;
    	}
    	if (in_array('P35', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('myelocyteNeutrophile')
    		;
    	}
    	if (in_array('P36', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('metamyelocyteNeutrophile')
    		;
    	}
    	if (in_array('P37', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('polynucleaire')
    		;
    	}
    	if (in_array('P38', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('plasmocytes')
    		;
    	}
    	if (in_array('P39', $this->bilanGeneralParams))
    	{
    		$builder
	            ->add('megacaryocytaire')
    		;
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\FNS'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_fnstype';
    }
}
