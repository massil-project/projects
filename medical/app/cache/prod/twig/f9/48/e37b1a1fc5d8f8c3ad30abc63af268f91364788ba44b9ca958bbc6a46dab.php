<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f948e37b1a1fc5d8f8c3ad30abc63af268f91364788ba44b9ca958bbc6a46dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'recherche' => array($this, 'block_recherche'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "\t
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t
\t";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "\t
";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        echo "\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  74 => 13,  69 => 15,  67 => 13,  55 => 9,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  87 => 30,  82 => 28,  79 => 27,  73 => 23,  71 => 22,  64 => 12,  61 => 17,  58 => 16,  53 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,);
    }
}
