<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNaissance','birthday',array('widget'=>'single_text'
            										,'format'=>'dd/MM/yyyy'))
            ->add('sexe','choice',array('choices'=>array('male'=>'Male','femele'=>'Femele')))
            ->add('assure','choice',array('choices'=>array('Non','Oui')
            								,'empty_value'=>'Assurance du patient'
            								,'required'=>false
            								,'empty_data'=>null))
            ->add('etatCivil','choice',array('choices'=>array('marie'=>'marie'
            													,'divorce'=>'divorce'
            													,'celibataire'=>'celibataire')
            									,'empty_value'=>'Situation familiale du patient'
            									,'required'=>false
            									,'empty_data'=>null))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Patient'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_patienttype';
    }
}
