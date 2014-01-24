<?php

/* MassilMedicalBundle:Consultation:ordonnance.html.twig */
class __TwigTemplate_6e7b81bca2071c22eb9ee2ec4dadfb0e4d4a004c8c68d6450270ef5ac3bfc4b2 extends Twig_Template
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'errors')) {
            // line 2
            echo "\t<div class=\"alert alert-danger\">
\t\t";
            // line 3
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'errors');
            echo "
\t</div>
";
        }
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ordonnance"), "contenu"), 'widget', array("attr" => array("class" => "massil_ordonnance")));
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:ordonnance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  216 => 97,  213 => 96,  204 => 92,  202 => 91,  194 => 86,  191 => 85,  185 => 82,  182 => 81,  180 => 80,  172 => 75,  169 => 74,  160 => 70,  150 => 64,  141 => 60,  138 => 59,  136 => 58,  128 => 53,  125 => 52,  119 => 49,  116 => 48,  114 => 47,  106 => 42,  103 => 41,  97 => 38,  94 => 37,  92 => 36,  84 => 31,  81 => 30,  75 => 27,  72 => 26,  70 => 25,  64 => 21,  56 => 17,  54 => 16,  49 => 14,  37 => 9,  35 => 8,  32 => 7,  25 => 3,  22 => 2,  19 => 1,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  258 => 154,  256 => 153,  251 => 150,  249 => 149,  237 => 139,  235 => 138,  222 => 127,  220 => 126,  209 => 117,  207 => 93,  188 => 100,  183 => 97,  170 => 90,  163 => 71,  158 => 69,  154 => 83,  151 => 82,  147 => 63,  134 => 70,  132 => 69,  111 => 51,  105 => 48,  102 => 47,  89 => 36,  76 => 25,  62 => 13,  60 => 19,  50 => 9,  46 => 13,  43 => 7,  40 => 10,  33 => 4,  30 => 6,);
    }
}
