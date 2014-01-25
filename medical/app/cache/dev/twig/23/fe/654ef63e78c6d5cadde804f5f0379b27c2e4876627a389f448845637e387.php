<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_23fe654ef63e78c6d5cadde804f5f0379b27c2e4876627a389f448845637e387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 321,  343 => 320,  299 => 278,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  505 => 391,  500 => 389,  385 => 160,  382 => 159,  367 => 156,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  277 => 114,  270 => 110,  242 => 96,  228 => 88,  225 => 87,  206 => 77,  363 => 155,  357 => 152,  353 => 121,  351 => 150,  332 => 116,  315 => 110,  306 => 107,  300 => 105,  297 => 277,  274 => 97,  265 => 107,  263 => 95,  175 => 65,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 322,  327 => 140,  293 => 118,  288 => 101,  271 => 111,  262 => 104,  259 => 103,  248 => 96,  153 => 77,  20 => 1,  23 => 1,  110 => 38,  100 => 36,  255 => 103,  226 => 95,  215 => 93,  303 => 128,  296 => 175,  292 => 121,  279 => 115,  231 => 89,  200 => 118,  113 => 40,  53 => 11,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 393,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 119,  334 => 145,  331 => 187,  324 => 139,  321 => 112,  318 => 111,  316 => 155,  304 => 149,  301 => 148,  291 => 102,  284 => 118,  281 => 138,  276 => 113,  272 => 111,  261 => 105,  251 => 101,  244 => 136,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 49,  174 => 59,  210 => 116,  170 => 84,  124 => 60,  198 => 99,  186 => 110,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 31,  213 => 96,  202 => 77,  194 => 83,  191 => 67,  185 => 66,  180 => 63,  172 => 64,  160 => 70,  114 => 66,  97 => 23,  84 => 25,  81 => 24,  223 => 86,  218 => 83,  212 => 79,  207 => 93,  197 => 119,  192 => 96,  190 => 68,  178 => 66,  161 => 63,  150 => 55,  148 => 46,  134 => 54,  76 => 28,  70 => 19,  65 => 17,  34 => 4,  249 => 100,  245 => 109,  237 => 93,  232 => 115,  216 => 97,  205 => 84,  195 => 71,  188 => 90,  181 => 91,  152 => 77,  137 => 48,  90 => 27,  77 => 25,  58 => 15,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 179,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 144,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 130,  258 => 94,  252 => 80,  247 => 132,  241 => 119,  229 => 87,  220 => 70,  214 => 106,  177 => 64,  169 => 74,  140 => 42,  132 => 69,  128 => 53,  107 => 37,  61 => 23,  38 => 5,  273 => 112,  269 => 94,  254 => 125,  243 => 92,  240 => 92,  238 => 145,  235 => 85,  230 => 82,  227 => 127,  224 => 81,  221 => 85,  219 => 84,  217 => 120,  208 => 89,  204 => 76,  179 => 105,  159 => 53,  143 => 43,  135 => 73,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  94 => 31,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  196 => 92,  183 => 94,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 45,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 29,  62 => 14,  49 => 12,  24 => 2,  25 => 2,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 46,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 82,  162 => 54,  154 => 60,  149 => 89,  147 => 75,  144 => 59,  141 => 73,  133 => 72,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 31,  86 => 19,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
