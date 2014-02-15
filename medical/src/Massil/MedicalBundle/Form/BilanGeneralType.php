<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BilanGeneralType extends AbstractType
{
	private $bilanGeneralParams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralParams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hemostase',new HemostaseType($this->bilanGeneralParams))
            ->add('fns',new FNSType($this->bilanGeneralParams))
            ->add('fer',new FerType($this->bilanGeneralParams))
            ->add('proteines',new ProteinesType($this->bilanGeneralParams))
            ->add('sucre',new SucreType($this->bilanGeneralParams))
            ->add('hepatique',new HepatiqueType($this->bilanGeneralParams))
            ->add('vitamine',new VitamineType($this->bilanGeneralParams))
            ->add('ecbuaslo',new ECBUASLOType($this->bilanGeneralParams))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\BilanGeneral'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_bilangeneraltype';
    }
}
