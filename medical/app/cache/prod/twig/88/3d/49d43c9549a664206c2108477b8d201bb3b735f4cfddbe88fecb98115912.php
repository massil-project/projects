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
        return array (  216 => 97,  213 => 96,  204 => 92,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  182 => 81,  180 => 80,  172 => 75,  169 => 74,  160 => 70,  150 => 64,  141 => 60,  138 => 59,  136 => 58,  128 => 53,  125 => 52,  119 => 49,  116 => 48,  114 => 47,  106 => 42,  103 => 41,  97 => 38,  94 => 37,  92 => 36,  84 => 31,  81 => 30,  75 => 27,  72 => 26,  70 => 25,  64 => 21,  56 => 17,  54 => 16,  49 => 14,  37 => 9,  35 => 8,  32 => 7,  25 => 3,  22 => 2,  19 => 1,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  258 => 154,  256 => 153,  251 => 150,  249 => 149,  237 => 139,  235 => 138,  222 => 127,  220 => 126,  209 => 117,  207 => 93,  188 => 100,  183 => 97,  170 => 90,  163 => 71,  158 => 69,  154 => 83,  151 => 82,  147 => 63,  134 => 70,  132 => 69,  111 => 51,  105 => 48,  102 => 47,  89 => 36,  76 => 25,  62 => 13,  60 => 19,  50 => 9,  46 => 13,  43 => 7,  40 => 10,  33 => 4,  30 => 3,);
    }
}
