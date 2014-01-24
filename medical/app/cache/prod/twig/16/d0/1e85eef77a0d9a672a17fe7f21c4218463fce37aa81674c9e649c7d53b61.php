<?php

/* MassilMedicalBundle:Patient:add.html.twig */
class __TwigTemplate_16d01e85eef77a0d9a672a17fe7f21c4218463fce37aa81674c9e649c7d53b61 extends Twig_Template
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
        echo "\tAjouter patient
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
\t<h1><i class=\"glyphicon glyphicon-plus-sign\"></i> Ajouter un patient</h1>
</div> 
\t";
        // line 11
        $this->env->loadTemplate("MassilMedicalBundle:Patient:formulaire.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Patient:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
