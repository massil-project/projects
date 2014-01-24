<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'medical_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/medical',    ),  ),  4 =>   array (  ),),
        'medical_patient_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/patient/add',    ),  ),  4 =>   array (  ),),
        'medical_patient_home' => array (  0 =>   array (    0 => 'page',    1 => 'message',    2 => 'filter',    3 => 'direction',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::indexAction',    'message' => 'no',    'filter' => 'dateAjout',    'direction' => 'down',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'direction',    ),    1 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/\\.]++',      3 => 'filter',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'message',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    4 =>     array (      0 => 'text',      1 => '/medical/patient',    ),  ),  4 =>   array (  ),),
        'medical_patient_show' => array (  0 =>   array (    0 => 'id',    1 => 'page',    2 => 'message',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::showAction',    'page' => 1,    'message' => 'no',  ),  2 =>   array (    'id' => '\\d*',    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/medical/patient/show',    ),  ),  4 =>   array (  ),),
        'medical_patient_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::editAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/patient/edit',    ),  ),  4 =>   array (  ),),
        'medical_patient_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\PatientController::deleteAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/patient/delete',    ),  ),  4 =>   array (  ),),
        'medical_consultation_add' => array (  0 =>   array (    0 => 'id',    1 => 'message',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::addAction',    'message' => 'no',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'text',      1 => '/consultation/add',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/medical/patient',    ),  ),  4 =>   array (  ),),
        'medical_consultation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::editAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/consultation/edit',    ),  ),  4 =>   array (  ),),
        'medical_consultation_show' => array (  0 =>   array (    0 => 'id',    1 => 'message',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::showAction',    'message' => 'no',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/medical/consultation/show',    ),  ),  4 =>   array (  ),),
        'medical_consultation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::deleteAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/consultation/delete',    ),  ),  4 =>   array (  ),),
        'medical_antecedant_add' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::addAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/antecedant/add',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/medical/consultation',    ),  ),  4 =>   array (  ),),
        'medical_antecedant_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::editAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/antecedant/edit',    ),  ),  4 =>   array (  ),),
        'medical_antecedant_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\AntecedantController::deleteAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/antecedant/delete',    ),  ),  4 =>   array (  ),),
        'medical_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/recherche',    ),  ),  4 =>   array (  ),),
        'medical_recherche_avance' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\MedicalController::rechercheAvanceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/recherche/avance',    ),  ),  4 =>   array (  ),),
        'medical_consultation_jour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::jourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/consultation/jour',    ),  ),  4 =>   array (  ),),
        'medical_consultation_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\ConsultationController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/consultation/search',    ),  ),  4 =>   array (  ),),
        'medical_salle_show' => array (  0 =>   array (    0 => 'page',    1 => 'message',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::showAction',    'message' => 'no',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/medical/salle/show',    ),  ),  4 =>   array (  ),),
        'medical_salle_add_patient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::addAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medical/salle/add/patient',    ),  ),  4 =>   array (  ),),
        'medical_salle_change' => array (  0 =>   array (    0 => 'id',    1 => 'change',  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::changeStateAction',    'change' => 'default',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'change',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/medical/salle/change',    ),  ),  4 =>   array (  ),),
        'medical_salle_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\MedicalBundle\\Controller\\SalleController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/salle/search',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ressetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ressetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ressetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/ressetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'medical_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Massil\\UserBundle\\Controller\\EditSecurityController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medical/change_password',    ),  ),  4 =>   array (  ),),
        'console' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/console/',    ),  ),  4 =>   array (  ),),
        'console_exec' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/console',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}