<?php

/* MassilMedicalBundle:Consultation:show.html.twig */
class __TwigTemplate_09461538a01738ad2433bd3b2c00bc309d866d27c46a95053a8b921f266c348b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tConsultation: details
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h2><i class=\"glyphicon glyphicon-folder-open\"></i> Consultation : ";
        // line 9
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo " </h2>
\t\t<i> Le : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/y"), "html", null, true);
        echo " &agrave; ";
        echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H") . "h") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i")), "html", null, true);
        echo "</i>
\t\t<br><br>
\t";
        // line 12
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "consultation_saved")) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Consultation enregistr&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t
\t
\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "consultation_edit")) {
            // line 25
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Consultation modifi&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 36
        echo "\t
\t
\t\t<div class=\"btn-group\">
\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\tRetour au patient
\t\t\t</a>
\t\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_edit", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier cette consultation
\t\t\t</a>
\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer cette consultation
\t\t\t</a>
\t\t</div>
\t</div>
\t
\t
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Patient</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 62
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:patient.html.twig")->display($context);
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Constantes vitales</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 72
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-vital.html.twig")->display($context);
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Examens et diagnostic</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 84
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-examen.html.twig")->display($context);
        // line 85
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4> Ordonnance</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 94
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:consul-details-ordonnance.html.twig")->display($context);
        // line 95
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 95,  161 => 94,  150 => 85,  148 => 84,  135 => 73,  133 => 72,  122 => 63,  120 => 62,  102 => 47,  95 => 43,  88 => 39,  83 => 36,  70 => 25,  56 => 13,  54 => 12,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
