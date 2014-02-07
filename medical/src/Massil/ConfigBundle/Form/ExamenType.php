<?php

namespace Massil\ConfigBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('generaleActivation','hidden',array('data'=>'false'))
            ->add('bilanGeneral',new BilanGeneralType())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\ConfigBundle\Entity\Examen'
        ));
    }

    public function getName()
    {
        return 'massil_configbundle_examentype';
    }
}
