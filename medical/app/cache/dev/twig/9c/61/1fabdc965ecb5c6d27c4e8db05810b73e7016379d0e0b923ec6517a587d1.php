<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9c611fabdc965ecb5c6d27c4e8db05810b73e7016379d0e0b923ec6517a587d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'fixed_navbar' => array($this, 'block_fixed_navbar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "\tConnexion
";
    }

    // line 13
    public function block_fixed_navbar($context, array $blocks = array())
    {
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "
<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\" class=\"form-signin\" role=\"form\">

\t<h2 class=\"form-signin-heading\">Identifiez-vous !!</h2>
\t
\t";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t<p> Nom d'utilisateur ou mot de passe incorrect</p>
\t\t</div>
\t";
        }
        // line 27
        echo "\t
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autofocus/>

    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" />

    <label class=\"checkbox\">
    \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \tSe souvenir de moi
    </label>

    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
    
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  23 => 3,  110 => 52,  100 => 44,  255 => 107,  226 => 95,  215 => 93,  178 => 74,  303 => 176,  296 => 175,  292 => 174,  279 => 169,  231 => 143,  223 => 137,  200 => 118,  113 => 65,  53 => 13,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 188,  331 => 187,  324 => 158,  321 => 180,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 136,  272 => 164,  261 => 129,  244 => 99,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 61,  174 => 87,  161 => 97,  148 => 76,  212 => 117,  210 => 116,  124 => 60,  198 => 99,  192 => 96,  186 => 110,  167 => 84,  165 => 99,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 88,  194 => 83,  191 => 85,  185 => 81,  180 => 80,  172 => 70,  160 => 70,  150 => 85,  114 => 66,  97 => 38,  84 => 27,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 152,  222 => 127,  207 => 93,  170 => 84,  134 => 68,  76 => 34,  70 => 25,  65 => 20,  34 => 5,  249 => 149,  245 => 109,  237 => 98,  232 => 115,  216 => 97,  205 => 84,  195 => 77,  188 => 79,  181 => 91,  152 => 77,  137 => 48,  90 => 30,  77 => 14,  58 => 16,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 167,  337 => 103,  322 => 101,  314 => 179,  312 => 153,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 170,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 156,  252 => 80,  247 => 132,  241 => 119,  229 => 73,  220 => 126,  214 => 106,  177 => 88,  169 => 74,  140 => 83,  132 => 69,  128 => 53,  107 => 43,  61 => 17,  38 => 7,  273 => 96,  269 => 94,  254 => 125,  243 => 131,  240 => 108,  238 => 145,  235 => 144,  230 => 82,  227 => 127,  224 => 111,  221 => 136,  219 => 94,  217 => 120,  208 => 89,  204 => 101,  179 => 105,  159 => 85,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 22,  67 => 13,  63 => 19,  59 => 22,  94 => 31,  89 => 36,  85 => 38,  75 => 27,  68 => 26,  56 => 13,  87 => 30,  21 => 2,  26 => 1,  93 => 40,  88 => 37,  78 => 31,  46 => 7,  27 => 7,  44 => 9,  31 => 4,  28 => 3,  196 => 84,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 80,  156 => 79,  151 => 63,  142 => 45,  138 => 56,  136 => 69,  121 => 62,  117 => 56,  105 => 43,  91 => 33,  62 => 18,  49 => 12,  24 => 4,  25 => 2,  19 => 1,  79 => 27,  72 => 23,  69 => 15,  47 => 12,  40 => 5,  37 => 7,  22 => 1,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 52,  123 => 47,  120 => 46,  115 => 50,  111 => 41,  108 => 54,  101 => 32,  98 => 32,  96 => 31,  83 => 35,  74 => 33,  66 => 26,  55 => 21,  52 => 18,  50 => 19,  43 => 6,  41 => 7,  35 => 4,  32 => 12,  29 => 4,  209 => 117,  203 => 78,  199 => 67,  193 => 114,  189 => 71,  187 => 84,  182 => 76,  176 => 104,  173 => 64,  168 => 100,  164 => 82,  162 => 57,  154 => 83,  149 => 89,  147 => 63,  144 => 59,  141 => 72,  133 => 72,  130 => 41,  125 => 52,  122 => 71,  116 => 44,  112 => 53,  109 => 25,  106 => 38,  103 => 52,  99 => 35,  95 => 34,  92 => 36,  86 => 36,  82 => 28,  80 => 29,  73 => 23,  64 => 18,  60 => 20,  57 => 19,  54 => 19,  51 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 6,  36 => 8,  33 => 2,  30 => 6,);
    }
}
