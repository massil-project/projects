<?php

/* ::layout.html.twig */
class __TwigTemplate_267fdda5c036c647f6758d2e7204ee96daf8a6163d65aa4f600a5a3c2675abd6 extends Twig_Template
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
        // line 98
        echo "
    <div class=\"container\">
\t\t";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 107
        $this->displayBlock('javascript', $context, $blocks);
        // line 112
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home"), "html", null, true);
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
            
\t            <li class=\"dropdown\">
\t              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Consultation <b class=\"caret\"></b></a>
\t              <ul class=\"dropdown-menu\">
\t                <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_jour"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i> Consultation du jour </a></li>
\t                <li class=\"divider\"></li>
\t                <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_search"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-search\"></i> Consultation par date </a></li>
\t              </ul>
\t            </li>
            
            
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Liste d'attente <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_show"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-time\"></i> Aujourd'hui </a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_search"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-search\"></i> Recherhce par date</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
             ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
            \t<li class=\"dropdown\">
            \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            \t\t\t<i class=\"glyphicon glyphicon-user\"></i>
            \t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
            \t\t</a>
            \t\t<ul class=\"dropdown-menu\">
            \t\t\t<li>
            \t\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_user_change_password"), "html", null, true);
            echo "\">
            \t\t\t\t\t<i class=\"glyphicon glyphicon-refresh\"></i>
            \t\t\t\t\t Changer le mot de passe
            \t\t\t\t</a>
            \t\t\t</li>
            \t\t\t<li class=\"divider\"></li>
            \t\t\t<li>
            \t\t\t\t<a href=\"";
            // line 84
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
        // line 92
        echo "            ";
        $this->displayBlock('recherche', $context, $blocks);
        // line 93
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
\t";
    }

    // line 92
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        // line 108
        echo "\t    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-formhelpers.js"), "html", null, true);
        echo "\"></script>
  \t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 110,  245 => 109,  240 => 108,  237 => 107,  227 => 92,  219 => 93,  216 => 92,  205 => 84,  195 => 77,  188 => 73,  173 => 64,  168 => 62,  157 => 54,  142 => 45,  137 => 43,  133 => 42,  123 => 35,  112 => 26,  109 => 25,  98 => 17,  95 => 16,  90 => 13,  83 => 10,  80 => 9,  74 => 112,  72 => 107,  64 => 101,  62 => 100,  58 => 98,  56 => 25,  49 => 20,  47 => 16,  41 => 13,  38 => 12,  36 => 9,  26 => 1,  43 => 6,  33 => 3,  30 => 2,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  480 => 225,  473 => 221,  466 => 217,  459 => 213,  453 => 210,  450 => 209,  446 => 207,  442 => 205,  440 => 204,  435 => 202,  431 => 201,  427 => 200,  423 => 199,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  384 => 187,  381 => 186,  374 => 182,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  341 => 167,  334 => 163,  331 => 162,  324 => 158,  321 => 157,  318 => 156,  316 => 155,  312 => 153,  304 => 149,  301 => 148,  294 => 144,  291 => 143,  284 => 139,  281 => 138,  278 => 137,  276 => 136,  272 => 134,  264 => 130,  261 => 129,  254 => 125,  251 => 124,  244 => 120,  241 => 119,  238 => 118,  236 => 117,  232 => 100,  224 => 111,  221 => 110,  214 => 106,  211 => 105,  204 => 101,  201 => 100,  198 => 99,  196 => 98,  192 => 96,  184 => 92,  181 => 69,  174 => 87,  171 => 86,  164 => 82,  161 => 81,  158 => 80,  156 => 79,  152 => 52,  144 => 73,  141 => 72,  134 => 68,  131 => 67,  124 => 63,  121 => 62,  118 => 61,  116 => 60,  108 => 54,  106 => 53,  103 => 18,  91 => 42,  78 => 31,  65 => 20,  63 => 19,  54 => 14,  50 => 12,  46 => 10,  44 => 9,  40 => 5,  37 => 6,  32 => 4,  29 => 3,);
    }
}
