<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheAvanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search','search',array('required'=>false))
            ->add('age','choice',array('choices'=>array('>3'=>'Moins de 3 ans'
            											,'3<>20'=>'Entre 3 et 20 ans'
            											,'20<>40'=>'Entre 20 et 40 ans'
            											,'40<>60'=>'Entre 40 et 60 ans'
            											,'60<'=>'Plus de 60 ans')
            							,'empty_value'=>'Choisissez l\'age'
            							,'empty_data'=>null
            							,'required'=>false))
            ->add('sexe','choice',array('choices'=>array('male'=>'Male','femele'=>'Femele')
            							,'empty_value'=>'Choisissez le sexe'
            							,'empty_data'=>null
            							,'required'=>FALSE))
            ->add('assurance','choice',array('choices'=>array('Non','Oui')
            								,'empty_value'=>'Choisissez l\'assurance'
            								,'required'=>false
            								,'empty_data'=>null))
            ->add('etatCivil','choice',array('choices'=>array('marie'=>'marie'
            													,'divorce'=>'divorce'
            													,'celibataire'=>'celibataire')
            									,'empty_value'=>'Choisissez la Situation familiale'
            									,'required'=>false
            									,'empty_data'=>null))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\RechercheAvance'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_rechercheavancetype';
    }
}
