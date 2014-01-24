<?php

/* MassilMedicalBundle:Consultation:edit.html.twig */
class __TwigTemplate_9d5d43e47c5912d7795ea0da7dfbb36f56f3ac705a50b8aa049711e8b9cec296 extends Twig_Template
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
\t<form method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<div class=\"row\">
\t<div class=\"btn-group col-md-6\">
\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour vers patient
\t\t</a>
\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t<i class=\"glyphicon glyphicon-floppy-disk\"></i>
\t\t\tEnregistrer
\t\t</button>
\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer cette consultation
\t\t</a>
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
        // line 36
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:constante.html.twig")->display($context);
        // line 37
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
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["antecedants"]) ? $context["antecedants"] : $this->getContext($context, "antecedants")));
        foreach ($context['_seq'] as $context["_key"] => $context["antecedant"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "type"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">";
            // line 51
            echo $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "contenu");
            echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_antecedant_edit", array("id" => $this->getAttribute((isset($context["antecedant"]) ? $context["antecedant"] : $this->getContext($context, "antecedant")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
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
        // line 64
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"center-block\">
\t\t\t\t\t\t<a href=\"";
        // line 67
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
        // line 83
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:motif.html.twig")->display($context);
        // line 84
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
        // line 93
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:diagnostic.html.twig")->display($context);
        // line 94
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
        // line 105
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:ordonnance.html.twig")->display($context);
        // line 106
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
        // line 116
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:clinique.html.twig")->display($context);
        // line 117
        echo "\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t";
        // line 120
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:paraclinique.html.twig")->display($context);
        // line 121
        echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!--\$(\"#massil_medicalbundle_consultationtype_diagnostic\").val()-->
\t</div>
\t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
\t";
        // line 129
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 130
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/edit-tinymce-config.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 117,  210 => 116,  124 => 53,  198 => 106,  192 => 98,  186 => 95,  167 => 84,  165 => 83,  146 => 72,  129 => 62,  104 => 48,  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  150 => 74,  114 => 52,  97 => 38,  84 => 31,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 150,  222 => 127,  207 => 93,  170 => 84,  134 => 70,  76 => 22,  70 => 25,  65 => 14,  34 => 5,  249 => 149,  245 => 109,  237 => 139,  232 => 129,  216 => 97,  205 => 84,  195 => 77,  188 => 96,  181 => 93,  152 => 52,  137 => 43,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 154,  252 => 80,  247 => 132,  241 => 77,  229 => 73,  220 => 126,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 19,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 131,  240 => 108,  238 => 130,  235 => 138,  230 => 82,  227 => 127,  224 => 71,  221 => 77,  219 => 121,  217 => 120,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 64,  119 => 51,  102 => 47,  71 => 19,  67 => 23,  63 => 15,  59 => 11,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 17,  87 => 38,  21 => 2,  26 => 1,  93 => 36,  88 => 6,  78 => 21,  46 => 8,  27 => 7,  44 => 12,  31 => 4,  28 => 3,  196 => 105,  183 => 94,  171 => 86,  166 => 71,  163 => 71,  158 => 69,  156 => 76,  151 => 82,  142 => 45,  138 => 59,  136 => 58,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 24,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 16,  40 => 6,  37 => 9,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 57,  123 => 59,  120 => 40,  115 => 50,  111 => 51,  108 => 48,  101 => 32,  98 => 17,  96 => 31,  83 => 36,  74 => 112,  66 => 26,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 8,  32 => 7,  29 => 8,  209 => 117,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 64,  168 => 83,  164 => 59,  162 => 57,  154 => 83,  149 => 67,  147 => 63,  144 => 64,  141 => 60,  133 => 42,  130 => 41,  125 => 60,  122 => 43,  116 => 48,  112 => 49,  109 => 25,  106 => 42,  103 => 41,  99 => 31,  95 => 37,  92 => 36,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 21,  60 => 23,  57 => 18,  54 => 16,  51 => 16,  48 => 15,  45 => 17,  42 => 13,  39 => 9,  36 => 11,  33 => 4,  30 => 3,);
    }
}
