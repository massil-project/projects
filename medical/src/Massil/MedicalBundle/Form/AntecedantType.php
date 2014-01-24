<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AntecedantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','choice',array('choices'=>array('Chirurgicaux'=>'Chirurgicaux'
            											,'Medicaux'=>'Medicaux'
            											,'Familiaux'=>'Familiaux'
            											,'Allergiques'=>'Allergique'
            											,'Intolernaces'=>'Intolerances'
            											,'Obstetricaux'=>'Obstetricaux'
            											,'Gynecologiques'=>'Gynecologiques'
            											,'Autres'=>'Autres')
            							,'empty_value'=>'Choisissez un type'))
            ->add('contenu','textarea',array('required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Antecedant'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_antecedanttype';
    }
}
