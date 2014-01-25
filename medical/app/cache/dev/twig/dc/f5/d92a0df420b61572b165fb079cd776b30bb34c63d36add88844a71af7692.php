<?php

/* MassilMedicalBundle:Patient:edit.html.twig */
class __TwigTemplate_dcf5d92a0df420b61572b165fb079cd776b30bb34c63d36add88844a71af7692 extends Twig_Template
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
        echo "\t<div class=\"page-header\">
\t\t<h1><i class=\"glyphicon glyphicon-edit\"></i>Modifier patient: ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "
\t</div>
\t
\t";
        // line 8
        $this->env->loadTemplate("MassilMedicalBundle:Patient:formulaire.html.twig")->display($context);
        // line 9
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Patient:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 76,  210 => 116,  170 => 84,  124 => 53,  198 => 106,  186 => 71,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 42,  213 => 96,  202 => 90,  194 => 86,  191 => 85,  185 => 81,  180 => 80,  172 => 75,  160 => 70,  114 => 66,  97 => 38,  84 => 48,  81 => 35,  223 => 130,  218 => 129,  212 => 117,  207 => 93,  197 => 119,  192 => 75,  190 => 115,  178 => 105,  161 => 69,  150 => 85,  148 => 84,  134 => 56,  76 => 28,  70 => 25,  65 => 14,  34 => 5,  249 => 110,  245 => 109,  237 => 107,  232 => 129,  216 => 97,  205 => 84,  195 => 77,  188 => 82,  181 => 93,  152 => 65,  137 => 48,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 132,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 43,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 131,  240 => 108,  238 => 130,  235 => 74,  230 => 82,  227 => 127,  224 => 71,  221 => 77,  219 => 121,  217 => 120,  208 => 68,  204 => 92,  179 => 78,  159 => 61,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 26,  67 => 23,  63 => 18,  59 => 11,  94 => 37,  89 => 36,  85 => 32,  75 => 27,  68 => 14,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 37,  88 => 39,  78 => 26,  46 => 12,  27 => 3,  44 => 12,  31 => 4,  28 => 3,  196 => 105,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 68,  156 => 76,  151 => 63,  142 => 45,  138 => 59,  136 => 58,  121 => 70,  117 => 44,  105 => 43,  91 => 51,  62 => 24,  49 => 23,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 24,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 55,  123 => 59,  120 => 50,  115 => 50,  111 => 51,  108 => 48,  101 => 32,  98 => 39,  96 => 31,  83 => 36,  74 => 26,  66 => 28,  55 => 20,  52 => 16,  50 => 16,  43 => 9,  41 => 11,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 120,  193 => 84,  189 => 71,  187 => 84,  182 => 81,  176 => 77,  173 => 64,  168 => 83,  164 => 63,  162 => 57,  154 => 58,  149 => 64,  147 => 63,  144 => 64,  141 => 60,  133 => 72,  130 => 41,  125 => 52,  122 => 51,  116 => 48,  112 => 45,  109 => 25,  106 => 42,  103 => 41,  99 => 55,  95 => 38,  92 => 36,  86 => 28,  82 => 31,  80 => 29,  73 => 27,  64 => 21,  60 => 20,  57 => 19,  54 => 12,  51 => 19,  48 => 13,  45 => 11,  42 => 9,  39 => 9,  36 => 11,  33 => 6,  30 => 6,);
    }
}
