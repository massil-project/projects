<?php

/* MassilMedicalBundle:Consultation:consul-details-vital.html.twig */
class __TwigTemplate_ca5bd94fbd9e0d8acc65c3e003462fd0b80ab1fb1a7c9c9e83ca69c5fb7228e8 extends Twig_Template
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
        echo "<div class=\"col-md-12\">
\t<form class=\"form-horizontal\" role=\"form\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Age  </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 7
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "age"))) {
            // line 8
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t\t\t";
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateNaissance")) < $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date", array(0 => "-36months"), "method"))) {
                // line 11
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "age"), "html", null, true);
                echo " Ans
\t\t\t\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "age"), "html", null, true);
                echo " Mois
\t\t\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Poids </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 23
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "poids"))) {
            // line 24
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "poids"), "html", null, true);
            echo " Kgs
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Taille </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 35
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "taille"))) {
            // line 36
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "taille"), "html", null, true);
            echo " Cm
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Tension arterielle </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 47
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "tensionArterielle"))) {
            // line 48
            echo "\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "tensionArterielle"), "html", null, true);
            echo " Cm/Hg
\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Temperature </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 59
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "temperature"))) {
            // line 60
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "temperature"), "html", null, true);
            echo " C&deg;
\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Perim&eacute;tre thoracique </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 71
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "perimetreThoracique"))) {
            // line 72
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "perimetreThoracique"), "html", null, true);
            echo " Cm
\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Perim&eacute;tre brachial </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 83
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "perimetreBrachial"))) {
            // line 84
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "perimetreBrachial"), "html", null, true);
            echo " Cm
\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Scap triceps </label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t";
        // line 95
        if ((null === $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "scapTriceps"))) {
            // line 96
            echo "\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "scapTriceps"), "html", null, true);
            echo " Cm
\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:consul-details-vital.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 100,  186 => 95,  167 => 84,  165 => 83,  146 => 72,  129 => 62,  104 => 48,  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  114 => 52,  97 => 38,  84 => 31,  81 => 35,  223 => 130,  218 => 129,  212 => 128,  207 => 93,  197 => 119,  192 => 98,  190 => 115,  178 => 105,  161 => 92,  150 => 74,  148 => 82,  134 => 70,  76 => 25,  70 => 25,  65 => 22,  34 => 8,  249 => 110,  245 => 109,  237 => 107,  232 => 100,  216 => 97,  205 => 84,  195 => 77,  188 => 96,  181 => 69,  152 => 52,  137 => 43,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 13,  38 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 108,  238 => 85,  235 => 74,  230 => 82,  227 => 131,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 64,  119 => 49,  102 => 47,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 17,  87 => 38,  21 => 2,  26 => 1,  93 => 40,  88 => 6,  78 => 21,  46 => 13,  27 => 7,  44 => 12,  31 => 4,  28 => 5,  196 => 90,  183 => 82,  171 => 86,  166 => 71,  163 => 71,  158 => 69,  156 => 76,  151 => 63,  142 => 45,  138 => 59,  136 => 58,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 24,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 16,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 52,  123 => 59,  120 => 40,  115 => 43,  111 => 51,  108 => 50,  101 => 32,  98 => 17,  96 => 31,  83 => 36,  74 => 112,  66 => 26,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 8,  32 => 7,  29 => 8,  209 => 82,  203 => 78,  199 => 120,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 104,  173 => 64,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 63,  144 => 71,  141 => 60,  133 => 42,  130 => 41,  125 => 60,  122 => 43,  116 => 48,  112 => 26,  109 => 25,  106 => 42,  103 => 41,  99 => 31,  95 => 16,  92 => 36,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 21,  60 => 23,  57 => 17,  54 => 16,  51 => 16,  48 => 15,  45 => 17,  42 => 13,  39 => 9,  36 => 11,  33 => 10,  30 => 6,);
    }
}
