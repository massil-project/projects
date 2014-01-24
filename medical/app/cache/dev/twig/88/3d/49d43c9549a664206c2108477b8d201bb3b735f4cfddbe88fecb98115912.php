<?php

/* MassilMedicalBundle:Consultation:constante.html.twig */
class __TwigTemplate_883d49d43c9549a664206c2108477b8d201bb3b735f4cfddbe88fecb98115912 extends Twig_Template
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
        echo "\t";
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 2
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 3
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t</div>
\t\t<br>
\t";
        }
        // line 7
        echo "\t<div class=\"input-group\">
\t\t";
        // line 8
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'errors')) {
            // line 9
            echo "\t\t<div class=\"alert alert-danger\">
\t\t";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'errors');
            echo "\t
\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t<span class=\"input-group-addon\"><strong>Age</strong></span>
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Age du patient")));
        echo "
\t\t<span class=\"input-group-addon\">
\t\t";
        // line 16
        if ((twig_date_converter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateNaissance")) < twig_date_converter($this->env, "-36months"))) {
            // line 17
            echo "\t\t\tAnn&egrave;es
\t\t";
        } else {
            // line 19
            echo "\t\t\tMois
\t\t";
        }
        // line 21
        echo "\t\t</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poids"), 'errors')) {
            // line 26
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poids"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t<span class=\"input-group-addon\"><strong>Poids</strong></span>
\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poids"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Poids du patient")));
        echo "
\t\t<span class=\"input-group-addon\">Kgs</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 36
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'errors')) {
            // line 37
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t<span class=\"input-group-addon\"><strong>Taille</strong></span>
\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Taille du patient")));
        echo "
\t\t<span class=\"input-group-addon\">Cm</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 47
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tensionArterielle"), 'errors')) {
            // line 48
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tensionArterielle"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 52
        echo "\t\t<span class=\"input-group-addon\"><strong>Tension Arteri&egrave;lle</strong></span>
\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tensionArterielle"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tension arterielle du patient")));
        echo "
\t\t<span class=\"input-group-addon\">cmHg</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 58
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperature"), 'errors')) {
            // line 59
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperature"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 63
        echo "\t\t<span class=\"input-group-addon\"><strong>Temp&eacute;rature</strong></span>
\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperature"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Temperature du patient")));
        echo "
\t\t<span class=\"input-group-addon\">&deg;C</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 69
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreThoracique"), 'errors')) {
            // line 70
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreThoracique"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 74
        echo "\t\t<span class=\"input-group-addon\"><strong>P&egrave;rim. Thoracique</strong></span>
\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreThoracique"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Perimetre thoracique du patient")));
        echo "
\t\t<span class=\"input-group-addon\">Cm</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 80
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreBrachial"), 'errors')) {
            // line 81
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreBrachial"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 85
        echo "\t\t<span class=\"input-group-addon\"><strong>P&egrave;rim. Brachial</strong></span>
\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetreBrachial"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Perimetre brachiale du patient")));
        echo "
\t\t<span class=\"input-group-addon\">Cm</span>
\t</div>
\t<br>
\t<div class=\"input-group\">
\t\t";
        // line 91
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scapTriceps"), 'errors')) {
            // line 92
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scapTriceps"), 'errors');
            echo "
\t\t\t</div>
\t\t";
        }
        // line 96
        echo "\t\t<span class=\"input-group-addon\"><strong>Scap Triceps</strong></span>
\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scapTriceps"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Sacap Triceps du patient")));
        echo "
\t\t<span class=\"input-group-addon\">Cm</span>
\t</div>
\t<br>";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:constante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 96,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  180 => 80,  172 => 75,  160 => 70,  150 => 64,  114 => 47,  97 => 38,  84 => 31,  81 => 30,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 150,  222 => 127,  207 => 93,  170 => 90,  134 => 70,  76 => 25,  70 => 25,  65 => 22,  34 => 5,  249 => 149,  245 => 109,  237 => 139,  232 => 100,  216 => 97,  205 => 84,  195 => 77,  188 => 100,  181 => 69,  152 => 52,  137 => 43,  90 => 34,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 154,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 126,  214 => 69,  177 => 65,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 36,  61 => 13,  38 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 108,  238 => 85,  235 => 138,  230 => 82,  227 => 92,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 47,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  94 => 37,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 17,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 13,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 97,  171 => 61,  166 => 71,  163 => 71,  158 => 69,  156 => 66,  151 => 82,  142 => 45,  138 => 59,  136 => 58,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 13,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 26,  69 => 25,  47 => 16,  40 => 10,  37 => 9,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 52,  123 => 35,  120 => 40,  115 => 43,  111 => 51,  108 => 36,  101 => 32,  98 => 17,  96 => 31,  83 => 30,  74 => 112,  66 => 23,  55 => 15,  52 => 16,  50 => 9,  43 => 7,  41 => 11,  35 => 8,  32 => 7,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 64,  168 => 62,  164 => 59,  162 => 57,  154 => 83,  149 => 51,  147 => 63,  144 => 49,  141 => 60,  133 => 42,  130 => 41,  125 => 52,  122 => 43,  116 => 48,  112 => 26,  109 => 25,  106 => 42,  103 => 41,  99 => 31,  95 => 16,  92 => 36,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 21,  60 => 19,  57 => 17,  54 => 16,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
