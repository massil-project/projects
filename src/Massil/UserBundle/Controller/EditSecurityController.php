<?php
namespace Massil\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Massil\UserBundle\Form\ChangePasswordType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\SecurityContext;

class EditSecurityController extends Controller
{
	public function changePasswordAction()
	{
		$user = $this->getUser();
		
		/**
		 * verification de l'utilisateur si il est authentifié
		 * 
		 **/
		if (!is_object($user) || !$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		
        
		
		$em = $this->get('doctrine.orm.entity_manager');
		//$user=$this->container->get('security.context')->getToken()->getUser();
		$userManager = $this->container->get('fos_user.user_manager');
		
		
		$form = $this->createForm(new ChangePasswordType());
		
		$request=$this->getRequest();
		
		if ($request->getMethod()=='POST')
		{
			$form->bind($request);
			
			$userPassword = $user->getPassword();
			
			$userSalt = $user->getSalt();
			
			$oldPassword = $form->get('oldPassword')->getData();
			
			$newPassword = $form->get('newPassword')->getData();
			
			$newComfimedPassword = $form->get('newPasswordConfirm')->getData();
			
			$comparaison = new MessageDigestPasswordEncoder();
			
			//Compare the data base user password and the one given in the form
			
			$oldPasswordCompare = $comparaison->isPasswordValid($userPassword,$oldPassword,$userSalt);
			
			if ($oldPasswordCompare == false)
			{
				$error = 'Ancien mot de passe incorrect';
				
				return $this->render('MassilUserBundle:EditSecurity:change.html.twig',array('form'=>$form->createView()
																					,'error'=>$error));
			}
			
			//Compare the new password and his confirmation
			
			if ($newPassword == $newComfimedPassword)
			{
				$manipulator = $this->get('fos_user.util.user_manipulator');
		
				$manipulator->changePassword($user,$newPassword);
		
				$em->flush();
				
				return $this->redirect($this->generateUrl('fos_user_profile_show'));
			}
			else 
			{
				$error = 'Nouveau mot de passe incorrect';
				
				return $this->render('MassilUserBundle:EditSecurity:change.html.twig',array('user'=>$this->getUser()
																					,'form'=>$form->createView()
																					,'error'=>$error));
				
			}
		}
		
		return $this->render('MassilUserBundle:EditSecurity:change.html.twig',array('user'=>$this->getUser()
																					,'form'=>$form->createView()));
	}
}