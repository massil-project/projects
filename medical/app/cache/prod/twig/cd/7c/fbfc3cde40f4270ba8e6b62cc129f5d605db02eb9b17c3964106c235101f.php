<?php

/* MassilMedicalBundle:Consultation:consul-details-examen.html.twig */
class __TwigTemplate_cd7cfbfc3cde40f4270ba8e6b62cc129f5d605db02eb9b17c3964106c235101f extends Twig_Template
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
        echo "<div class=\"well\">
\t";
        // line 2
        echo $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "motif");
        echo "
</div>
<div class=\"well\">
\t";
        // line 5
        echo $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "diagnostic");
        echo "
</div>
<div class=\"well\">
\t";
        // line 8
        echo $this->getAttribute((isset($context["examen"]) ? $context["examen"] : $this->getContext($context, "examen")), "clinique");
        echo "
</div>
<div class=\"well\">
\t";
        // line 11
        echo $this->getAttribute((isset($context["examen"]) ? $context["examen"] : $this->getContext($context, "examen")), "paraclinique");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:consul-details-examen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 2,  198 => 100,  192 => 98,  188 => 96,  186 => 95,  177 => 88,  171 => 86,  167 => 84,  165 => 83,  156 => 76,  146 => 72,  144 => 71,  129 => 62,  125 => 60,  123 => 59,  108 => 50,  104 => 48,  93 => 40,  87 => 38,  81 => 35,  72 => 28,  66 => 26,  62 => 24,  51 => 16,  48 => 15,  42 => 13,  36 => 11,  33 => 10,  121 => 70,  114 => 52,  99 => 55,  91 => 51,  84 => 48,  82 => 47,  71 => 39,  60 => 23,  49 => 23,  38 => 15,  27 => 7,  19 => 1,  163 => 95,  161 => 94,  150 => 74,  148 => 84,  135 => 64,  133 => 72,  122 => 63,  120 => 62,  102 => 47,  95 => 53,  88 => 50,  83 => 36,  70 => 25,  56 => 13,  54 => 12,  47 => 10,  43 => 9,  40 => 11,  37 => 7,  32 => 4,  29 => 8,);
    }
}