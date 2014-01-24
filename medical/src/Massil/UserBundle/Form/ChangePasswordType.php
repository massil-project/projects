<?php
namespace Massil\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChangePasswordType extends AbstractType
{	
	public function buildForm(FormBuilderInterface $builder,array $options)
	{	
		$builder
				->add('oldPassword','password')
				->add('newPassword','password')
				->add('newPasswordConfirm','password')
		;
	}
	
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }

    public function getName()
    {
        return 'massil_userbundle_changepasswordtype';
    }
}