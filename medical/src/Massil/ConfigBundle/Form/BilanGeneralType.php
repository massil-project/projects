<?php

namespace Massil\ConfigBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BilanGeneralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('taille')
            ->add('poids')
            ->add('tension')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\ConfigBundle\Entity\BilanGeneral'
        ));
    }

    public function getName()
    {
        return 'massil_configbundle_bilangeneraltype';
    }
}
