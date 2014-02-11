<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/medical')) {
            if (0 === strpos($pathinfo, '/medical/config')) {
                // medical_config_bilan
                if (0 === strpos($pathinfo, '/medical/config/bilan') && preg_match('#^/medical/config/bilan/(?P<bilan>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_config_bilan')), array (  '_controller' => 'Massil\\ConfigBundle\\Controller\\ParamController::setBilanAction',));
                }

                // medical_config_init
                if ($pathinfo === '/medical/config/init') {
                    return array (  '_controller' => 'Massil\\ConfigBundle\\Controller\\ParamController::initAction',  '_route' => 'medical_config_init',);
                }

                // medical_config_test
                if ($pathinfo === '/medical/config/test') {
                    return array (  '_controller' => 'Massil\\ConfigBundle\\Controller\\ParamController::testAction',  '_route' => 'medical_config_test',);
                }

            }

            // medical_home
            if (preg_match('#^/medical(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_home')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/medical/patient')) {
                // medical_patient_add
                if ($pathinfo === '/medical/patient/add') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::addAction',  '_route' => 'medical_patient_add',);
                }

                // medical_patient_home
                if (preg_match('#^/medical/patient(?:/(?P<page>\\d*)(?:/(?P<message>[^/\\.]++)(?:\\.(?P<filter>[^/\\.]++)(?:\\.(?P<direction>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_patient_home')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::indexAction',  'message' => 'no',  'filter' => 'dateAjout',  'direction' => 'down',  'page' => 1,));
                }

                // medical_patient_show
                if (0 === strpos($pathinfo, '/medical/patient/show') && preg_match('#^/medical/patient/show/(?P<id>\\d*)(?:/(?P<page>\\d*)(?:\\.(?P<message>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_patient_show')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::showAction',  'page' => 1,  'message' => 'no',));
                }

                // medical_patient_edit
                if (0 === strpos($pathinfo, '/medical/patient/edit') && preg_match('#^/medical/patient/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_patient_edit')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::editAction',));
                }

                // medical_patient_delete
                if (0 === strpos($pathinfo, '/medical/patient/delete') && preg_match('#^/medical/patient/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_patient_delete')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::deleteAction',));
                }

                // medical_consultation_add
                if (preg_match('#^/medical/patient/(?P<id>\\d*)/consultation/add(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_consultation_add')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::addAction',  'message' => 'no',));
                }

            }

            if (0 === strpos($pathinfo, '/medical/consultation')) {
                // medical_consultation_edit
                if (0 === strpos($pathinfo, '/medical/consultation/edit') && preg_match('#^/medical/consultation/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_consultation_edit')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::editAction',));
                }

                // medical_consultation_show
                if (0 === strpos($pathinfo, '/medical/consultation/show') && preg_match('#^/medical/consultation/show/(?P<id>\\d*)(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_consultation_show')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::showAction',  'message' => 'no',));
                }

                // medical_consultation_delete
                if (0 === strpos($pathinfo, '/medical/consultation/delete') && preg_match('#^/medical/consultation/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_consultation_delete')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/medical/recherche')) {
                // medical_recherche
                if (preg_match('#^/medical/recherche(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_recherche')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAction',  'page' => 1,));
                }

                // medical_recherche_avance
                if (0 === strpos($pathinfo, '/medical/recherche/avance') && preg_match('#^/medical/recherche/avance(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_recherche_avance')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAvanceAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/medical/consultation')) {
                // medical_consultation_jour
                if ($pathinfo === '/medical/consultation/jour') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::jourAction',  '_route' => 'medical_consultation_jour',);
                }

                // medical_consultation_search
                if ($pathinfo === '/medical/consultation/search') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::searchAction',  '_route' => 'medical_consultation_search',);
                }

            }

            if (0 === strpos($pathinfo, '/medical/salle')) {
                // medical_salle_show
                if (0 === strpos($pathinfo, '/medical/salle/show') && preg_match('#^/medical/salle/show(?:/(?P<page>\\d*)(?:/(?P<message>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_salle_show')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::showAction',  'message' => 'no',  'page' => 1,));
                }

                // medical_salle_add_patient
                if (0 === strpos($pathinfo, '/medical/salle/add/patient') && preg_match('#^/medical/salle/add/patient/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_salle_add_patient')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::addAction',));
                }

                // medical_salle_change
                if (0 === strpos($pathinfo, '/medical/salle/change') && preg_match('#^/medical/salle/change/(?P<id>\\d*)(?:/(?P<change>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_salle_change')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::changeStateAction',  'change' => 'default',));
                }

                // medical_salle_search
                if ($pathinfo === '/medical/salle/search') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::searchAction',  '_route' => 'medical_salle_search',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/ressetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/ressetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/ressetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/ressetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/ressetting/reset') && preg_match('#^/ressetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // medical_user_change_password
        if ($pathinfo === '/medical/change_password') {
            return array (  '_controller' => 'Massil\\UserBundle\\Controller\\EditSecurityController::changePasswordAction',  '_route' => 'medical_user_change_password',);
        }

        if (0 === strpos($pathinfo, '/console')) {
            // console
            if (rtrim($pathinfo, '/') === '/console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'console');
                }

                return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (preg_match('#^/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
