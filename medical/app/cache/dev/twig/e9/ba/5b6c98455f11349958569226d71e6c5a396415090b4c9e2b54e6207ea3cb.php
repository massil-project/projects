<?php

/* MassilMedicalBundle:Consultation:add.html.twig */
class __TwigTemplate_e9ba5b6c98455f11349958569226d71e6c5a396415090b4c9e2b54e6207ea3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'medical_body' => array($this, 'block_medical_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "\tConsultation : ";
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_medical_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"page-header\">
\t\t<h1><i class=\"glyphicon glyphicon-pushpin\"></i> Consultation : <small> <i class=\"glyphicon glyphicon-user\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "</small></h1>
\t\t<i><strong>le : </strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/Y"), "html", null, true);
        echo " <strong> &agrave; : </strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H"), "html", null, true);
        echo "<strong>h</strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i"), "html", null, true);
        echo "</i>
\t</div>
\t
\t";
        // line 12
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_delete")) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant supprim&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>


\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_saved")) {
            // line 25
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant enregitr&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_edit")) {
            // line 36
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant modifi&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 47
        echo "\t
\t<form method=\"post\" ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<div class=\"row\">
\t<div class=\"btn-group col-md-6\">
\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour vers patient
\t\t</a>
\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t<i class=\"glyphicon glyphicon-floppy-disk\"></i>
\t\t\tEnregistrer
\t\t</button>
\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Constantes vitales</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 69
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:constante.html.twig")->display($context);
        // line 70
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-7\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Ant&egrave;cedants</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["antecedants"]) ? $context["antecedants"] : $this->getContext($context, "antecedants")));
        foreach ($context['_seq'] as $context["_key"] => $context["antecedant"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "type"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">";
            // line 84
            echo $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "contenu");
            echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_antecedant_edit", array("id" => $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_antecedant_delete", array("id" => $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['antecedant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"center-block\">
\t\t\t\t\t\t<a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_antecedant_add", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i>
\t\t\t\t\t\t\tAjouter un antecedant
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Motif de consultation</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 116
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:motif.html.twig")->display($context);
        // line 117
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Diagnostic</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 126
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:diagnostic.html.twig")->display($context);
        // line 127
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Ordonance</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 138
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:ordonnance.html.twig")->display($context);
        // line 139
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Examens</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t";
        // line 149
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:clinique.html.twig")->display($context);
        // line 150
        echo "\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t";
        // line 153
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:paraclinique.html.twig")->display($context);
        // line 154
        echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!--\$(\"#massil_medicalbundle_consultationtype_diagnostic\").val()-->
\t</div>
\t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
\t";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 163
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/add-tinymce-config.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 150,  222 => 127,  207 => 116,  170 => 90,  134 => 70,  76 => 25,  70 => 24,  65 => 22,  34 => 5,  249 => 149,  245 => 109,  237 => 139,  232 => 100,  216 => 92,  205 => 84,  195 => 77,  188 => 100,  181 => 69,  152 => 52,  137 => 43,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 154,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 126,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 36,  61 => 13,  38 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 108,  238 => 85,  235 => 138,  230 => 82,  227 => 92,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 47,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  94 => 28,  89 => 36,  85 => 25,  75 => 31,  68 => 14,  56 => 25,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 97,  171 => 61,  166 => 71,  163 => 86,  158 => 84,  156 => 66,  151 => 82,  142 => 45,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 13,  49 => 20,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 16,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 52,  123 => 35,  120 => 40,  115 => 43,  111 => 51,  108 => 36,  101 => 32,  98 => 17,  96 => 31,  83 => 30,  74 => 112,  66 => 23,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 64,  168 => 62,  164 => 59,  162 => 57,  154 => 83,  149 => 51,  147 => 81,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 26,  109 => 25,  106 => 36,  103 => 18,  99 => 31,  95 => 16,  92 => 21,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 23,  60 => 12,  57 => 17,  54 => 19,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
