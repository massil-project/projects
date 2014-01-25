<?php

/* MassilMedicalBundle:Consultation:delete.html.twig */
class __TwigTemplate_90faa9826c92074e18104b1e8a6939deccfa36d58f5d67a7ad6a68b228937e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_medical_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
\t<h1><i class=\"glyphicon glyphicon-trash\"></i> Supprimer consultation : ";
        // line 5
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "</h1>
\t<i><strong>le : </strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/Y"), "html", null, true);
        echo " <strong> &agrave; : </strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H"), "html", null, true);
        echo "<strong>h</strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i"), "html", null, true);
        echo "</i>
</div>

<div class=\"row\">
\t<div class=\"alert alert-warning\">
\t\t<i class=\"glyphicon glyphicon-warning-sign\"></i>
\t\t<strong>Attention : </strong> Cette consultation va &ecirc;tre supprim&eacute; ! 
\t</div>
</div>


<p> Et&ecirc;s-vous certain de supprimer cette consultation ?</p>
<form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\">
\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour au patient
\t</a>
\t<button class=\"btn btn-danger\" type=\"submit\">
\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\tSupprimer
\t</button>
\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 100,  186 => 95,  167 => 84,  165 => 83,  146 => 72,  129 => 62,  104 => 48,  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  114 => 52,  97 => 38,  84 => 31,  81 => 35,  223 => 130,  218 => 129,  212 => 128,  207 => 93,  197 => 119,  192 => 98,  190 => 115,  178 => 105,  161 => 92,  150 => 74,  148 => 82,  134 => 70,  76 => 25,  70 => 25,  65 => 22,  34 => 5,  249 => 110,  245 => 109,  237 => 107,  232 => 100,  216 => 97,  205 => 84,  195 => 77,  188 => 96,  181 => 69,  152 => 52,  137 => 43,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 19,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 108,  238 => 85,  235 => 74,  230 => 82,  227 => 131,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 64,  119 => 49,  102 => 47,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 17,  87 => 38,  21 => 2,  26 => 1,  93 => 40,  88 => 6,  78 => 21,  46 => 13,  27 => 7,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 86,  166 => 71,  163 => 71,  158 => 69,  156 => 76,  151 => 63,  142 => 45,  138 => 59,  136 => 58,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 24,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 16,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 52,  123 => 59,  120 => 40,  115 => 43,  111 => 51,  108 => 50,  101 => 32,  98 => 17,  96 => 31,  83 => 36,  74 => 112,  66 => 26,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 8,  32 => 7,  29 => 8,  209 => 82,  203 => 78,  199 => 120,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 104,  173 => 64,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 63,  144 => 71,  141 => 60,  133 => 42,  130 => 41,  125 => 60,  122 => 43,  116 => 48,  112 => 26,  109 => 25,  106 => 42,  103 => 41,  99 => 31,  95 => 16,  92 => 36,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 21,  60 => 23,  57 => 18,  54 => 16,  51 => 16,  48 => 15,  45 => 17,  42 => 13,  39 => 9,  36 => 11,  33 => 10,  30 => 6,);
    }
}
