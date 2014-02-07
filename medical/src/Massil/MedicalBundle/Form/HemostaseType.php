<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HemostaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tempsDeSaignementDuke')
            ->add('tempsDeSaignementIvy')
            ->add('tempsDeProthrombineINR')
            ->add('tempsDeCephalineActiveTCA')
            ->add('fibrinogene')
            ->add('facteurAntithemophiliqueVIII')
            ->add('facteurAntithemophiliqueIX')
            ->add('heparenimie')
            ->add('antiThrombineDosage')
            ->add('antiThrombineActive')
            ->add('proteineCS')
        ;
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
