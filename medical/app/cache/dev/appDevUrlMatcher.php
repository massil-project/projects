<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/medical')) {
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

                // medical_antecedant_add
                if (preg_match('#^/medical/consultation/(?P<id>\\d*)/antecedant/add$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_antecedant_add')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::addAction',));
                }

            }

            if (0 === strpos($pathinfo, '/medical/antecedant')) {
                // medical_antecedant_edit
                if (0 === strpos($pathinfo, '/medical/antecedant/edit') && preg_match('#^/medical/antecedant/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_antecedant_edit')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::editAction',));
                }

                // medical_antecedant_delete
                if (0 === strpos($pathinfo, '/medical/antecedant/delete') && preg_match('#^/medical/antecedant/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medical_antecedant_delete')), array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/medical/recherche')) {
                // medical_recherche
                if ($pathinfo === '/medical/recherche') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAction',  '_route' => 'medical_recherche',);
                }

                // medical_recherche_avance
                if ($pathinfo === '/medical/recherche/avance') {
                    return array (  '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAvanceAction',  '_route' => 'medical_recherche_avance',);
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
