<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BilanGeneralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hemostase',new HemostaseType())
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
