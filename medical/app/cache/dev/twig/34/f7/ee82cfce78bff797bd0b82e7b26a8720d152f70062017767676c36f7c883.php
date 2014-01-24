<?php

/* MassilMedicalBundle:Antecedant:edit.html.twig */
class __TwigTemplate_34f7ee82cfce78bff797bd0b82e7b26a8720d152f70062017767676c36f7c883 extends Twig_Template
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
        echo "\tAntecedants : ";
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div clas=\"page-header\">
\t\t<h1><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo " : <small>Antecedant</small></h1>
\t</div>
\t<div class=\"row\">
\t<div class=\"col-md-7\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Modifier un antecedant</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 18
        $this->env->loadTemplate("MassilMedicalBundle:Antecedant:formulaire.html.twig")->display($context);
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t";
        // line 23
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\t\t\ttinymce.init({ 
\t\t\t\tselector: \"textarea\",
\t\t\t\tlanguage: \"fr_FR\",
\t\t\t\tresize: false,
\t\t\t\theight: 220,
\t\t\t\tplugins:\"fullscreen textcolor print table preview template\",
\t\t\t\ttemplates: [
\t\t\t\t\t{title:'massil korichi',description:'some description here',content:'My contetnt here'}],
\t\t\t\ttools: \"inserttable\",
\t\t\t\ttoolbar: \"undo redo | bold italic underline | forecolor backcolor fontsizeselect |fullscreen | print preview\",
\t\t\t\tfontsize_formats: \"12pt 14pt 18pt 24pt 36pt\"
\t\t\t});
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Antecedant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  249 => 110,  245 => 109,  237 => 107,  232 => 100,  216 => 92,  205 => 84,  195 => 77,  188 => 73,  181 => 69,  152 => 52,  137 => 43,  90 => 13,  77 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  38 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 108,  238 => 85,  235 => 74,  230 => 82,  227 => 92,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 31,  68 => 14,  56 => 25,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 100,  49 => 20,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 16,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 54,  145 => 46,  139 => 45,  131 => 52,  123 => 35,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 17,  96 => 31,  83 => 10,  74 => 112,  66 => 23,  55 => 15,  52 => 21,  50 => 18,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 64,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 26,  109 => 25,  106 => 36,  103 => 18,  99 => 31,  95 => 16,  92 => 21,  86 => 28,  82 => 22,  80 => 9,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 19,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
