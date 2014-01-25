<?php

/* MassilMedicalBundle:Consultation:add.html.twig */
class __TwigTemplate_d0154b130ea4702131b2a22fdf375e4f17f1c5ed8983d032427514cbaac1bf40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'medical_body' => array($this, 'block_medical_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "\tConsultation : ";
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_medical_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"page-header\">
\t\t<h1><i class=\"glyphicon glyphicon-pushpin\"></i> Consultation : <small> <i class=\"glyphicon glyphicon-user\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "</small></h1>
\t\t<i><strong>le : </strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/Y"), "html", null, true);
        echo " <strong> &agrave; : </strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H"), "html", null, true);
        echo "<strong>h</strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i"), "html", null, true);
        echo "</i>
\t</div>
\t
\t";
        // line 12
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_delete")) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant supprim&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>


\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_saved")) {
            // line 25
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant enregitr&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "antecedant_edit")) {
            // line 36
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Antecedant modifi&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 47
        echo "\t
\t<form method=\"post\" ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<div class=\"row\">
\t<div class=\"btn-group col-md-6\">
\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour vers patient
\t\t</a>
\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t<i class=\"glyphicon glyphicon-floppy-disk\"></i>
\t\t\tEnregistrer
\t\t</button>
\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Constantes vitales</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 69
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:constante.html.twig")->display($context);
        // line 70
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Motif de consultation</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 82
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:motif.html.twig")->display($context);
        // line 83
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Diagnostic</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 92
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:diagnostic.html.twig")->display($context);
        // line 93
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Ordonance</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 104
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:ordonnance.html.twig")->display($context);
        // line 105
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4>Examens</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t";
        // line 115
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:clinique.html.twig")->display($context);
        // line 116
        echo "\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t";
        // line 119
        $this->env->loadTemplate("MassilMedicalBundle:Consultation:paraclinique.html.twig")->display($context);
        // line 120
        echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!--\$(\"#massil_medicalbundle_consultationtype_diagnostic\").val()-->
\t</div>
\t";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
\t";
        // line 128
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 129
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/add-tinymce-config.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 131,  223 => 130,  218 => 129,  212 => 128,  207 => 126,  199 => 120,  197 => 119,  192 => 116,  190 => 115,  178 => 105,  176 => 104,  163 => 93,  161 => 92,  150 => 83,  148 => 82,  134 => 70,  132 => 69,  111 => 51,  105 => 48,  102 => 47,  89 => 36,  76 => 25,  62 => 13,  60 => 12,  50 => 9,  46 => 8,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
