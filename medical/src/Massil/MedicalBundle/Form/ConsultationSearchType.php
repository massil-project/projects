<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsultationSearchType extends ConsultationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->remove('age')
        		->remove('taille')
        		->remove('poids')
        		->remove('tensionArterielle')
        		->remove('perimetreThoracique')
        		->remove('perimetreBrachial')
        		->remove('scapTriceps')
        		->remove('motif')
        		->remove('diagnostic')
        		->remove('ordonnance')
        		->remove('examen')
        		->remove('temperature')
        		->add('date','text')
        
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
        return 'massil_medicalbundle_consultationsearchtype';
    }
}
