<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsultationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif','textarea',array('required'=>false))
            ->add('age','text',array('required'=>false))
            ->add('poids','text',array('required'=>false))
            ->add('taille','text',array('required'=>false))
            ->add('tensionArterielle','text',array('required'=>false))
            ->add('temperature','text',array('required'=>false))
            ->add('perimetreThoracique','text',array('required'=>false))
            ->add('perimetreBrachial','text',array('required'=>false))
            ->add('scapTriceps','text',array('required'=>false))
            ->add('diagnostic','textarea',array('required'=>false))
            ->add('ordonnance',new OrdonnanceType())
            ->add('examen',new ExamenType())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Consultation'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_consultationtype';
    }
}
