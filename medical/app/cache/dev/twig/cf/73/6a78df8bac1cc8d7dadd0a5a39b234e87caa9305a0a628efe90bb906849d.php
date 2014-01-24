<?php

/* MassilMedicalBundle:Patient:delete.html.twig */
class __TwigTemplate_cf736a78df8bac1cc8d7dadd0a5a39b234e87caa9305a0a628efe90bb906849d extends Twig_Template
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
\t<h1><i class=\"glyphicon glyphicon-trash\"></i> Supprimer patient : ";
        // line 5
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "</h1>
</div>

<div class=\"row\">
\t<div class=\"alert alert-warning\">
\t\t<h5>
\t\t\t<i class=\"glyphicon glyphicon-warning-sign\"></i>
\t\t\t<strong>Attention : </strong> Ce patient va &ecirc;tre supprim&eacute; !
\t\t</h5> 
\t</div>
</div>


<p> Et&ecirc;s-vous certain de supprimer ce patient ?</p>
<form method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_delete", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\">
\t<a href=\"";
        // line 20
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
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Patient:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 76,  161 => 69,  148 => 84,  212 => 117,  210 => 116,  124 => 53,  198 => 106,  192 => 75,  186 => 71,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 42,  213 => 96,  202 => 90,  194 => 86,  191 => 85,  185 => 81,  180 => 80,  172 => 75,  160 => 70,  150 => 85,  114 => 66,  97 => 38,  84 => 48,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 150,  222 => 127,  207 => 93,  170 => 84,  134 => 56,  76 => 28,  70 => 25,  65 => 14,  34 => 5,  249 => 149,  245 => 109,  237 => 139,  232 => 129,  216 => 97,  205 => 84,  195 => 77,  188 => 82,  181 => 93,  152 => 65,  137 => 48,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 154,  252 => 80,  247 => 132,  241 => 77,  229 => 73,  220 => 126,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 43,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 131,  240 => 108,  238 => 130,  235 => 138,  230 => 82,  227 => 127,  224 => 71,  221 => 77,  219 => 121,  217 => 120,  208 => 68,  204 => 92,  179 => 78,  159 => 61,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 26,  67 => 23,  63 => 18,  59 => 11,  94 => 37,  89 => 36,  85 => 32,  75 => 27,  68 => 14,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 37,  88 => 39,  78 => 26,  46 => 12,  27 => 3,  44 => 12,  31 => 4,  28 => 3,  196 => 105,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 68,  156 => 76,  151 => 82,  142 => 45,  138 => 59,  136 => 58,  121 => 70,  117 => 44,  105 => 43,  91 => 51,  62 => 24,  49 => 23,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 24,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 55,  123 => 59,  120 => 50,  115 => 50,  111 => 51,  108 => 48,  101 => 32,  98 => 39,  96 => 31,  83 => 36,  74 => 26,  66 => 28,  55 => 20,  52 => 16,  50 => 16,  43 => 9,  41 => 11,  35 => 8,  32 => 4,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 84,  182 => 81,  176 => 77,  173 => 64,  168 => 83,  164 => 63,  162 => 57,  154 => 83,  149 => 64,  147 => 63,  144 => 64,  141 => 60,  133 => 72,  130 => 41,  125 => 52,  122 => 51,  116 => 48,  112 => 45,  109 => 25,  106 => 42,  103 => 41,  99 => 55,  95 => 38,  92 => 36,  86 => 28,  82 => 31,  80 => 29,  73 => 27,  64 => 21,  60 => 20,  57 => 19,  54 => 12,  51 => 19,  48 => 13,  45 => 11,  42 => 13,  39 => 9,  36 => 11,  33 => 6,  30 => 6,);
    }
}
