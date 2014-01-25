<?php

/* MassilMedicalBundle:Consultation:show.html.twig */
class __TwigTemplate_e8e76e5fa6f6c71021aa448e46d6fe744360eb93edbcf391217582e222247dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'medical_body' => array($this, 'block_medical_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MassilMedicalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tConsultation: details
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h2><i class=\"glyphicon glyphicon-folder-open\"></i> Consultation : ";
        // line 9
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo " </h2>
\t\t<i> Le : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/y"), "html", null, true);
        echo " &agrave; ";
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H") . "h") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i")), "html", null, true);
        echo "</i>
\t\t<br><br>
\t";
        // line 12
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "consultation_saved")) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Consultation enregistr&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t
\t
\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "consultation_edit")) {
            // line 25
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Consultation modifi&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 36
        echo "\t
\t
\t\t<div class=\"btn-group\">
\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\tRetour au patient
\t\t\t</a>
\t\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_edit", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier cette consultation
\t\t\t</a>
\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer cette consultation
\t\t\t</a>
\t\t</div>
\t</div>
\t
\t
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Patient</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 62
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:patient.html.twig")->display($context);
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Constantes vitales</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 72
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-vital.html.twig")->display($context);
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Examens et diagnostic</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 84
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-examen.html.twig")->display($context);
        // line 85
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Ordonnance</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 94
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-ordonnance.html.twig")->display($context);
        // line 95
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 116,  170 => 84,  124 => 53,  198 => 106,  186 => 71,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 48,  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  114 => 66,  97 => 38,  84 => 48,  81 => 35,  223 => 130,  218 => 129,  212 => 117,  207 => 93,  197 => 119,  192 => 75,  190 => 115,  178 => 105,  161 => 94,  150 => 85,  148 => 84,  134 => 70,  76 => 25,  70 => 25,  65 => 14,  34 => 5,  249 => 110,  245 => 109,  237 => 107,  232 => 129,  216 => 97,  205 => 84,  195 => 77,  188 => 96,  181 => 93,  152 => 52,  137 => 48,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 132,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 131,  240 => 108,  238 => 130,  235 => 74,  230 => 82,  227 => 127,  224 => 71,  221 => 77,  219 => 121,  217 => 120,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 25,  67 => 23,  63 => 18,  59 => 11,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 33,  88 => 39,  78 => 26,  46 => 12,  27 => 7,  44 => 12,  31 => 4,  28 => 3,  196 => 105,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 69,  156 => 76,  151 => 63,  142 => 45,  138 => 59,  136 => 58,  121 => 70,  117 => 44,  105 => 43,  91 => 51,  62 => 24,  49 => 23,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 24,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 57,  123 => 59,  120 => 62,  115 => 50,  111 => 51,  108 => 48,  101 => 32,  98 => 17,  96 => 31,  83 => 36,  74 => 26,  66 => 23,  55 => 18,  52 => 16,  50 => 16,  43 => 9,  41 => 11,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 120,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 104,  173 => 64,  168 => 83,  164 => 63,  162 => 57,  154 => 58,  149 => 67,  147 => 63,  144 => 64,  141 => 60,  133 => 72,  130 => 41,  125 => 45,  122 => 63,  116 => 48,  112 => 49,  109 => 25,  106 => 42,  103 => 41,  99 => 55,  95 => 43,  92 => 36,  86 => 28,  82 => 47,  80 => 29,  73 => 19,  64 => 21,  60 => 20,  57 => 19,  54 => 12,  51 => 16,  48 => 13,  45 => 17,  42 => 13,  39 => 9,  36 => 11,  33 => 4,  30 => 6,);
    }
}
