<?php

/* MassilMedicalBundle:Consultation:ordonnance.html.twig */
class __TwigTemplate_6e7b81bca2071c22eb9ee2ec4dadfb0e4d4a004c8c68d6450270ef5ac3bfc4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'errors')) {
            // line 2
            echo "\t<div class=\"alert alert-danger\">
\t\t";
            // line 3
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'errors');
            echo "
\t</div>
";
        }
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'widget', array("attr" => array("class" => "massil_ordonnance")));
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:ordonnance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 117,  210 => 116,  124 => 53,  198 => 106,  192 => 75,  186 => 71,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 48,  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  150 => 55,  114 => 52,  97 => 38,  84 => 28,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 150,  222 => 127,  207 => 93,  170 => 84,  134 => 70,  76 => 25,  70 => 22,  65 => 14,  34 => 5,  249 => 149,  245 => 109,  237 => 139,  232 => 129,  216 => 97,  205 => 84,  195 => 77,  188 => 96,  181 => 93,  152 => 52,  137 => 48,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 154,  252 => 80,  247 => 132,  241 => 77,  229 => 73,  220 => 126,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 19,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 131,  240 => 108,  238 => 130,  235 => 138,  230 => 82,  227 => 127,  224 => 71,  221 => 77,  219 => 121,  217 => 120,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 51,  135 => 64,  119 => 51,  102 => 47,  71 => 19,  67 => 23,  63 => 18,  59 => 11,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 17,  87 => 38,  21 => 2,  26 => 1,  93 => 33,  88 => 30,  78 => 26,  46 => 12,  27 => 7,  44 => 12,  31 => 4,  28 => 3,  196 => 105,  183 => 94,  171 => 86,  166 => 71,  163 => 71,  158 => 69,  156 => 76,  151 => 82,  142 => 45,  138 => 59,  136 => 58,  121 => 46,  117 => 44,  105 => 43,  91 => 27,  62 => 24,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 25,  47 => 16,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 57,  123 => 59,  120 => 40,  115 => 50,  111 => 51,  108 => 48,  101 => 32,  98 => 17,  96 => 31,  83 => 36,  74 => 112,  66 => 26,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 8,  32 => 4,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 64,  168 => 83,  164 => 63,  162 => 57,  154 => 83,  149 => 67,  147 => 63,  144 => 64,  141 => 60,  133 => 47,  130 => 41,  125 => 45,  122 => 44,  116 => 48,  112 => 49,  109 => 25,  106 => 42,  103 => 41,  99 => 31,  95 => 37,  92 => 36,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 21,  60 => 17,  57 => 18,  54 => 15,  51 => 16,  48 => 13,  45 => 17,  42 => 13,  39 => 9,  36 => 11,  33 => 4,  30 => 6,);
    }
}
