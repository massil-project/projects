<?php

/* MassilMedicalBundle:Consultation:patient.html.twig */
class __TwigTemplate_22bf4ed72d6a66646fb7e337c2123856ddaa1fc2f28b317d30d0a7dd0f323f95 extends Twig_Template
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
\t\t\t<label class=\"col-md-6 control-label\"> Nom </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Pr&eacute;nom </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom")), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Date de naissance </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Sexe </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexe")), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Situation familiale </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "etatCivil")), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-6 control-label\"> Assurance </label>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t";
        // line 47
        if ((null === $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "assure"))) {
            // line 48
            echo "\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "assure") == 0)) {
                // line 51
                echo "\t\t\t\t\t\t\tNon
\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\tOui
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t</p>
\t\t\t</div>
\t\t</div>\t\t
\t</form>
</div>
<div class=\"col-md-2\">
</div>
<br>
<div class=\"col-md-9\">
\t<div class=\"btn-group\">
\t\t<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier ce patient
\t\t</a>
\t\t<a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_delete", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer ce patient
\t\t</a>
\t</div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 70,  114 => 66,  99 => 55,  91 => 51,  84 => 48,  82 => 47,  71 => 39,  60 => 31,  49 => 23,  38 => 15,  27 => 7,  19 => 1,  163 => 95,  161 => 94,  150 => 85,  148 => 84,  135 => 73,  133 => 72,  122 => 63,  120 => 62,  102 => 56,  95 => 53,  88 => 50,  83 => 36,  70 => 25,  56 => 13,  54 => 12,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
