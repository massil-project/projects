<?php

/* MassilMedicalBundle:Consultation:consul-details-vital.html.twig */
class __TwigTemplate_a093d9a749666a44d3da67a07c6f7cd28476af9a7611ab5298d31225f46e6bb6 extends Twig_Template
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
        return array (  198 => 100,  192 => 98,  188 => 96,  186 => 95,  177 => 88,  171 => 86,  167 => 84,  165 => 83,  156 => 76,  146 => 72,  144 => 71,  129 => 62,  125 => 60,  123 => 59,  108 => 50,  104 => 48,  93 => 40,  87 => 38,  81 => 35,  72 => 28,  66 => 26,  62 => 24,  51 => 16,  48 => 15,  42 => 13,  36 => 11,  33 => 10,  121 => 70,  114 => 52,  99 => 55,  91 => 51,  84 => 48,  82 => 47,  71 => 39,  60 => 23,  49 => 23,  38 => 15,  27 => 7,  19 => 1,  163 => 95,  161 => 94,  150 => 74,  148 => 84,  135 => 64,  133 => 72,  122 => 63,  120 => 62,  102 => 47,  95 => 53,  88 => 50,  83 => 36,  70 => 25,  56 => 13,  54 => 12,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 8,);
    }
}
