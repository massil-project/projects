<?php

/* MassilMedicalBundle::layout.html.twig */
class __TwigTemplate_f9bdf57989e66535a9b6170a93630c4773944d347df899f1a4ae61e3d54e5e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'recherche' => array($this, 'block_recherche'),
            'body' => array($this, 'block_body'),
            'medical_body' => array($this, 'block_medical_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_recherche($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MassilMedicalBundle:Medical:search"));
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayBlock('medical_body', $context, $blocks);
    }

    public function block_medical_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 131,  223 => 130,  218 => 129,  212 => 128,  207 => 126,  199 => 120,  197 => 119,  192 => 116,  190 => 115,  178 => 105,  176 => 104,  163 => 93,  161 => 92,  150 => 83,  148 => 82,  134 => 70,  132 => 69,  111 => 51,  105 => 48,  102 => 47,  89 => 36,  76 => 25,  62 => 13,  60 => 12,  50 => 9,  46 => 8,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
