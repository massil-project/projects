<?php

/* ::layout.html.twig */
class __TwigTemplate_603d6592640095b0b6a88fbbcdff0c4dad13c33fb39b691f2d4675fce57fe030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'favicon' => array($this, 'block_favicon'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'fixed_navbar' => array($this, 'block_fixed_navbar'),
            'recherche' => array($this, 'block_recherche'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
    \t<meta charset=\"utf-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"\">
    \t<meta name=\"author\" content=\"\">
    \t";
        // line 9
        $this->displayBlock('favicon', $context, $blocks);
        // line 12
        echo "\t\t
    \t<title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
    \t<!-- Bootstrap core CSS -->
    \t";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 20
        echo "    <!-- Custom styles for this template -->

  \t</head> 

  <body style=\"padding-top:70px\">
\t";
        // line 25
        $this->displayBlock('fixed_navbar', $context, $blocks);
        // line 100
        echo "
    <div class=\"container\">
\t\t";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 109
        $this->displayBlock('javascript', $context, $blocks);
        // line 114
        echo "
\t</body>
</html>";
    }

    // line 9
    public function block_favicon($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t<link rel=\"icon\" type=\"image/ico\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("medical_bag.ico"), "html", null, true);
        echo "\"/>
\t\t";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 17
        echo "    \t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-formhelpers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t\t";
    }

    // line 25
    public function block_fixed_navbar($context, array $blocks = array())
    {
        // line 26
        echo "    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_home"), "html", null, true);
        echo "\">Cabinet Medical</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Patient <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_add"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un patient</a></li>
                <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Liste des patients</a></li>
              \t<li class=\"divider\"></li>
                <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_recherche_avance"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-search\"></i> Rechercher un patient</a></li>              \t
              </ul>
            </li>
            
            ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("ROLE_MEDECIN")) {
            // line 50
            echo "\t            <li class=\"dropdown\">
\t              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Consultation <b class=\"caret\"></b></a>
\t              <ul class=\"dropdown-menu\">
\t                <li><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_jour"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i> Consultation du jour </a></li>
\t                <li class=\"divider\"></li>
\t                <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_search"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-search\"></i> Consultation par date </a></li>
\t              </ul>
\t            </li>
            ";
        }
        // line 59
        echo "            
            
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Liste d'attente <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_show"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-time\"></i> Aujourd'hui </a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_search"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-search\"></i> Recherhce par date</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 71
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 72
            echo "            \t<li class=\"dropdown\">
            \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\t\t<i class=\"glyphicon glyphicon-user\"></i>
            \t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "
            \t\t</a>
            \t\t<ul class=\"dropdown-menu\">
            \t\t\t<li>
            \t\t\t\t<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_user_change_password"), "html", null, true);
            echo "\">
            \t\t\t\t\t<i class=\"glyphicon glyphicon-refresh\"></i>
            \t\t\t\t\t Changer le mot de passe
            \t\t\t\t</a>
            \t\t\t</li>
            \t\t\t<li class=\"divider\"></li>
            \t\t\t<li>
            \t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
            \t\t\t\t\t<i class=\"glyphicon glyphicon-log-out\"></i>
            \t\t\t\t\tDeconnexion
            \t\t\t\t</a>
            \t\t\t</li>
            \t\t</ul>
            \t</li>
            ";
        }
        // line 94
        echo "            ";
        $this->displayBlock('recherche', $context, $blocks);
        // line 95
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
\t";
    }

    // line 94
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
    }

    // line 109
    public function block_javascript($context, array $blocks = array())
    {
        // line 110
        echo "\t    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-formhelpers.min.js"), "html", null, true);
        echo "\"></script>
  \t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 112,  252 => 111,  247 => 110,  244 => 109,  239 => 102,  234 => 94,  226 => 95,  223 => 94,  212 => 86,  202 => 79,  195 => 75,  190 => 72,  188 => 71,  180 => 66,  175 => 64,  168 => 59,  161 => 55,  156 => 53,  151 => 50,  149 => 49,  142 => 45,  137 => 43,  133 => 42,  123 => 35,  112 => 26,  109 => 25,  103 => 18,  98 => 17,  95 => 16,  90 => 13,  83 => 10,  80 => 9,  72 => 109,  62 => 102,  56 => 25,  49 => 20,  47 => 16,  41 => 13,  38 => 12,  36 => 9,  26 => 1,  77 => 14,  74 => 114,  69 => 15,  67 => 13,  55 => 9,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  87 => 30,  82 => 28,  79 => 27,  73 => 23,  71 => 22,  64 => 103,  61 => 17,  58 => 100,  53 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,);
    }
}
