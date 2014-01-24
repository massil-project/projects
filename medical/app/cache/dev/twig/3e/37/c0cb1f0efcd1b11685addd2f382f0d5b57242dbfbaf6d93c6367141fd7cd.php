<?php

/* MassilUserBundle:EditSecurity:change.html.twig */
class __TwigTemplate_3e37c0cb1f0efcd1b11685addd2f382f0d5b57242dbfbaf6d93c6367141fd7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MassilUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">

<div class=\"col-md-6\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6\"></div>
\t\t<div class=\"col-md-6\">
\t\t\t<h2>Changer votre mot de passe</h2>
\t\t\t<br>
\t\t</div>
\t</div>
\t
\t<div class=\"row\">
\t\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_user_change_password"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" role=\"form\">
\t\t    
\t\t    ";
        // line 18
        if (array_key_exists("error", $context)) {
            // line 19
            echo "\t\t    \t<div class=\"col-md-6\"></div>
\t\t    \t<div class=\"col-md-6\">
\t\t\t    \t<div class=\"alert alert-danger\">
\t\t\t    \t\t";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
\t\t\t    \t</div>
\t\t    \t</div>
\t\t    ";
        }
        // line 26
        echo "\t\t    
\t\t    ";
        // line 27
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 28
            echo "\t\t    \t<div class=\"col-md-6\"></div>
\t\t    \t<div class=\"col-md-6\">
\t\t\t    \t<div class=\"alert alert-danger\">
\t\t\t    \t\t";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t    \t</div>
\t\t    \t</div>
\t\t    ";
        }
        // line 35
        echo "\t\t    
\t\t    ";
        // line 36
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPassword"), 'errors')) {
            // line 37
            echo "\t\t    \t<div class=\"col-md-6\"></div>
\t\t    \t<div class=\"col-md-6\">
\t\t\t    \t<div class=\"alert alert-danger\">
\t\t\t    \t\t";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPassword"), 'errors');
            echo "
\t\t\t    \t</div>
\t\t    \t</div>
\t\t    ";
        }
        // line 44
        echo "\t\t    
\t\t    <div class=\"form-group\">
\t\t    \t<label for=\"current_password\" class=\"col-sm-6 control-label\"> Mot de passe </label>
\t\t    \t<div class=\"col-sm-6\">
\t\t    \t\t<input type=\"password\" id=\"current_password\" required=\"required\" name=\"massil_userbundle_changepasswordtype[oldPassword]\" class=\"form-control\" placeholder=\"Mot de passe actuel\">
\t\t    \t</div>
\t\t    </div>
\t\t    
\t\t    ";
        // line 52
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), 'errors')) {
            // line 53
            echo "\t\t    \t<div class=\"col-md-6\"></div>
\t\t    \t<div class=\"col-md-6\">
\t\t\t    \t<div class=\"alert alert-danger\">
\t\t\t    \t\t";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), 'errors');
            echo "
\t\t\t    \t</div>
\t\t    \t</div>
\t\t    ";
        }
        // line 60
        echo "\t\t    
\t\t    <div class=\"form-group\">
\t\t    \t<label for=\"new_password\" class=\"col-sm-6 control-label\"> Nouveau mot de passe </label>
\t\t    \t<div class=\"col-sm-6\">
\t\t    \t\t<input type=\"password\" id=\"new_password\" required=\"required\" name=\"massil_userbundle_changepasswordtype[newPassword]\" class=\"form-control\" placeholder=\"Nouveau mot de passe\">
\t\t    \t</div>
\t\t    </div>
\t\t    
\t\t    ";
        // line 68
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPasswordConfirm"), 'errors')) {
            // line 69
            echo "\t\t    \t<div class=\"col-md-6\"></div>
\t\t    \t<div class=\"col-md-6\">
\t\t\t    \t<div class=\"alert alert-danger\">
\t\t\t    \t\t";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPasswordConfirm"), 'errors');
            echo "
\t\t\t    \t</div>
\t\t    \t</div>
\t\t    ";
        }
        // line 76
        echo "\t\t    
\t\t    <div class=\"form-group\">
\t\t    \t<label for=\"new_password_confirmation\" class=\"col-sm-6 control-label\"> Confirmation mot de passe </label>
\t\t    \t<div class=\"col-sm-6\">
\t\t    \t\t<input type=\"password\" id=\"new_password_confirmation\" required=\"required\" name=\"massil_userbundle_changepasswordtype[newPasswordConfirm]\" class=\"form-control\" placeholder=\"Confirmation nouveau mot de passe\">
\t\t    \t</div>
\t\t    </div>
\t\t
\t\t
\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t    
\t\t    <div class=\"row\">
\t\t    <div class=\"col-md-6\"></div>
\t\t    <div class=\"col-md-6\">
\t\t\t    <button class=\"btn btn-success\" type=\"submit\">
\t\t\t    \t<i class=\"glyphicon glyphicon-floppy-disk\"></i>
\t\t\t    \t\t Enregistrer 
\t\t\t    </button>
\t\t    </div>
\t\t    </div>
\t\t    
\t\t    
\t\t</form>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MassilUserBundle:EditSecurity:change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 52,  100 => 44,  255 => 107,  226 => 95,  215 => 93,  178 => 74,  303 => 176,  296 => 175,  292 => 174,  279 => 169,  231 => 143,  223 => 137,  200 => 118,  113 => 65,  53 => 13,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 188,  331 => 187,  324 => 158,  321 => 180,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 136,  272 => 164,  261 => 129,  244 => 99,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 61,  174 => 87,  161 => 97,  148 => 76,  212 => 117,  210 => 116,  124 => 60,  198 => 99,  192 => 96,  186 => 110,  167 => 84,  165 => 99,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 88,  194 => 83,  191 => 85,  185 => 81,  180 => 80,  172 => 70,  160 => 70,  150 => 85,  114 => 66,  97 => 38,  84 => 27,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 152,  222 => 127,  207 => 93,  170 => 84,  134 => 68,  76 => 31,  70 => 25,  65 => 20,  34 => 5,  249 => 149,  245 => 109,  237 => 98,  232 => 115,  216 => 97,  205 => 84,  195 => 77,  188 => 79,  181 => 91,  152 => 77,  137 => 48,  90 => 30,  77 => 25,  58 => 18,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 167,  337 => 103,  322 => 101,  314 => 179,  312 => 153,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 170,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 156,  252 => 80,  247 => 132,  241 => 119,  229 => 73,  220 => 126,  214 => 106,  177 => 88,  169 => 74,  140 => 83,  132 => 69,  128 => 53,  107 => 43,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 125,  243 => 131,  240 => 108,  238 => 145,  235 => 144,  230 => 82,  227 => 127,  224 => 111,  221 => 136,  219 => 94,  217 => 120,  208 => 89,  204 => 101,  179 => 105,  159 => 85,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 28,  67 => 23,  63 => 19,  59 => 22,  94 => 31,  89 => 36,  85 => 32,  75 => 27,  68 => 26,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 40,  88 => 37,  78 => 31,  46 => 12,  27 => 3,  44 => 9,  31 => 4,  28 => 3,  196 => 84,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 80,  156 => 79,  151 => 63,  142 => 45,  138 => 56,  136 => 69,  121 => 62,  117 => 56,  105 => 43,  91 => 33,  62 => 18,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 27,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 52,  123 => 47,  120 => 46,  115 => 50,  111 => 41,  108 => 54,  101 => 32,  98 => 32,  96 => 31,  83 => 35,  74 => 26,  66 => 26,  55 => 18,  52 => 18,  50 => 16,  43 => 9,  41 => 9,  35 => 4,  32 => 4,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 114,  189 => 71,  187 => 84,  182 => 76,  176 => 104,  173 => 64,  168 => 100,  164 => 82,  162 => 57,  154 => 83,  149 => 89,  147 => 63,  144 => 59,  141 => 72,  133 => 72,  130 => 41,  125 => 52,  122 => 71,  116 => 44,  112 => 53,  109 => 25,  106 => 38,  103 => 52,  99 => 35,  95 => 34,  92 => 36,  86 => 36,  82 => 38,  80 => 29,  73 => 27,  64 => 19,  60 => 20,  57 => 19,  54 => 19,  51 => 12,  48 => 13,  45 => 16,  42 => 8,  39 => 7,  36 => 11,  33 => 7,  30 => 6,);
    }
}
