<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_8013d5ad640b7583d8d2a90ab56542b29426bb13a25ffae92a1f436a53b8d81c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1188 => 330,  1182 => 329,  1176 => 328,  1170 => 327,  1164 => 326,  1158 => 325,  1152 => 324,  1146 => 323,  1140 => 322,  1124 => 316,  1117 => 315,  1115 => 314,  1112 => 313,  1089 => 309,  1064 => 308,  1062 => 307,  1059 => 306,  1047 => 301,  1042 => 300,  1040 => 299,  1037 => 298,  1028 => 292,  1022 => 290,  1019 => 289,  1014 => 288,  1012 => 287,  1009 => 286,  1002 => 281,  993 => 279,  989 => 278,  986 => 277,  983 => 276,  981 => 275,  978 => 274,  970 => 270,  968 => 269,  965 => 268,  958 => 263,  955 => 262,  947 => 257,  943 => 256,  939 => 255,  936 => 254,  934 => 253,  931 => 252,  923 => 248,  921 => 244,  919 => 243,  916 => 242,  894 => 235,  891 => 234,  888 => 233,  885 => 232,  882 => 231,  879 => 230,  876 => 229,  873 => 228,  870 => 227,  867 => 226,  864 => 225,  862 => 224,  859 => 223,  851 => 217,  848 => 216,  846 => 215,  843 => 214,  835 => 210,  832 => 209,  830 => 208,  827 => 207,  819 => 203,  816 => 202,  814 => 201,  811 => 200,  803 => 196,  800 => 195,  798 => 194,  795 => 193,  787 => 189,  784 => 188,  782 => 187,  779 => 186,  771 => 182,  768 => 181,  766 => 180,  763 => 179,  755 => 175,  753 => 174,  750 => 173,  742 => 169,  739 => 168,  737 => 167,  734 => 166,  726 => 162,  723 => 161,  721 => 160,  719 => 159,  716 => 158,  709 => 153,  699 => 152,  694 => 151,  685 => 148,  682 => 147,  680 => 146,  677 => 145,  669 => 139,  666 => 137,  665 => 136,  664 => 135,  659 => 134,  653 => 132,  650 => 131,  648 => 130,  645 => 129,  636 => 123,  632 => 122,  628 => 121,  624 => 120,  619 => 119,  613 => 117,  608 => 115,  605 => 114,  589 => 110,  568 => 104,  563 => 102,  546 => 98,  534 => 96,  527 => 93,  525 => 92,  499 => 89,  497 => 88,  494 => 87,  485 => 82,  482 => 81,  479 => 80,  471 => 77,  463 => 75,  460 => 74,  448 => 71,  438 => 69,  429 => 64,  421 => 62,  412 => 60,  405 => 58,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  329 => 26,  323 => 24,  295 => 16,  290 => 14,  287 => 13,  267 => 4,  260 => 330,  250 => 325,  233 => 312,  197 => 261,  346 => 321,  343 => 320,  299 => 278,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 150,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 138,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 116,  606 => 437,  603 => 436,  601 => 435,  587 => 109,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  505 => 391,  500 => 389,  385 => 160,  382 => 48,  367 => 42,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 20,  308 => 130,  289 => 120,  270 => 110,  242 => 96,  228 => 305,  225 => 87,  218 => 286,  206 => 77,  363 => 155,  357 => 152,  353 => 36,  351 => 150,  332 => 116,  315 => 110,  306 => 107,  300 => 105,  297 => 277,  274 => 97,  265 => 107,  263 => 95,  190 => 242,  175 => 65,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 43,  348 => 322,  327 => 140,  293 => 118,  288 => 101,  262 => 104,  259 => 103,  248 => 324,  153 => 77,  20 => 1,  23 => 1,  110 => 38,  100 => 36,  255 => 103,  226 => 298,  215 => 285,  178 => 66,  303 => 128,  296 => 175,  292 => 15,  279 => 115,  231 => 306,  223 => 297,  200 => 262,  113 => 40,  53 => 11,  591 => 275,  584 => 108,  573 => 271,  566 => 103,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 91,  517 => 90,  510 => 393,  487 => 229,  473 => 78,  466 => 76,  459 => 213,  450 => 72,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 61,  399 => 196,  392 => 191,  371 => 181,  364 => 41,  361 => 176,  358 => 175,  356 => 37,  352 => 172,  344 => 119,  334 => 27,  331 => 187,  324 => 139,  321 => 23,  318 => 111,  316 => 22,  304 => 149,  301 => 148,  291 => 102,  284 => 118,  281 => 138,  276 => 113,  272 => 6,  261 => 105,  244 => 322,  236 => 313,  211 => 105,  201 => 100,  184 => 239,  126 => 144,  118 => 49,  174 => 214,  161 => 199,  148 => 46,  212 => 79,  210 => 273,  124 => 129,  198 => 99,  192 => 251,  186 => 110,  167 => 84,  165 => 83,  146 => 178,  129 => 145,  104 => 87,  213 => 274,  202 => 265,  194 => 83,  191 => 67,  185 => 66,  180 => 63,  172 => 64,  160 => 70,  150 => 55,  114 => 108,  97 => 23,  84 => 41,  81 => 30,  286 => 119,  282 => 164,  277 => 114,  271 => 111,  266 => 160,  256 => 328,  251 => 101,  222 => 127,  207 => 93,  170 => 84,  134 => 158,  76 => 31,  70 => 19,  65 => 17,  34 => 4,  249 => 100,  245 => 109,  237 => 93,  232 => 115,  216 => 97,  205 => 267,  195 => 252,  188 => 90,  181 => 91,  152 => 77,  137 => 48,  90 => 27,  77 => 25,  58 => 15,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 70,  437 => 147,  435 => 68,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 183,  407 => 59,  402 => 57,  398 => 129,  393 => 52,  387 => 50,  384 => 49,  381 => 186,  379 => 47,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 21,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 144,  285 => 115,  283 => 100,  278 => 8,  268 => 85,  264 => 3,  258 => 329,  252 => 326,  247 => 132,  241 => 321,  229 => 87,  220 => 295,  214 => 106,  177 => 64,  169 => 207,  140 => 42,  132 => 69,  128 => 53,  107 => 37,  61 => 2,  38 => 6,  273 => 112,  269 => 5,  254 => 327,  243 => 92,  240 => 92,  238 => 319,  235 => 85,  230 => 82,  227 => 127,  224 => 81,  221 => 85,  219 => 84,  217 => 120,  208 => 268,  204 => 76,  179 => 222,  159 => 193,  143 => 43,  135 => 73,  119 => 114,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  196 => 92,  183 => 94,  171 => 213,  166 => 206,  163 => 82,  158 => 80,  156 => 192,  151 => 185,  142 => 45,  138 => 56,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 2,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 323,  157 => 59,  145 => 74,  139 => 166,  131 => 157,  123 => 61,  120 => 46,  115 => 40,  111 => 107,  108 => 33,  101 => 86,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 241,  182 => 223,  176 => 220,  173 => 85,  168 => 57,  164 => 200,  162 => 54,  154 => 186,  149 => 179,  147 => 75,  144 => 173,  141 => 172,  133 => 72,  130 => 39,  125 => 42,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 25,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
