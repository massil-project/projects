<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_5b39eafba7423b4a77da39c3f984eb32e98267a613c9a7b4155b2927bb1ed979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("console"), "html", null, true);
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  407 => 131,  402 => 130,  398 => 129,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  360 => 109,  337 => 103,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  241 => 77,  220 => 70,  214 => 69,  169 => 60,  132 => 51,  128 => 49,  93 => 28,  269 => 94,  254 => 92,  238 => 85,  230 => 82,  227 => 81,  217 => 75,  208 => 68,  179 => 69,  138 => 54,  135 => 53,  94 => 28,  78 => 21,  71 => 17,  203 => 78,  189 => 71,  149 => 51,  144 => 49,  133 => 42,  95 => 28,  86 => 24,  54 => 10,  48 => 13,  57 => 11,  51 => 14,  34 => 5,  31 => 4,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  196 => 92,  182 => 66,  176 => 64,  173 => 65,  170 => 84,  163 => 62,  68 => 30,  62 => 27,  28 => 3,  353 => 121,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 97,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  283 => 88,  278 => 86,  274 => 97,  263 => 95,  258 => 81,  224 => 71,  136 => 71,  122 => 43,  117 => 39,  112 => 35,  109 => 34,  104 => 32,  85 => 25,  75 => 19,  72 => 18,  69 => 17,  58 => 25,  44 => 10,  178 => 66,  175 => 65,  161 => 63,  158 => 80,  154 => 58,  125 => 44,  121 => 50,  118 => 49,  87 => 25,  49 => 14,  46 => 7,  27 => 3,  91 => 27,  63 => 15,  385 => 160,  382 => 159,  374 => 116,  367 => 156,  363 => 126,  359 => 153,  357 => 123,  354 => 151,  351 => 120,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 72,  199 => 67,  193 => 73,  190 => 76,  187 => 70,  180 => 63,  174 => 65,  171 => 61,  166 => 56,  159 => 61,  151 => 59,  148 => 46,  143 => 56,  140 => 55,  107 => 36,  103 => 32,  100 => 39,  97 => 23,  88 => 25,  82 => 22,  79 => 21,  76 => 34,  61 => 13,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  246 => 90,  164 => 59,  157 => 56,  145 => 74,  139 => 49,  131 => 52,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  106 => 33,  101 => 32,  98 => 31,  92 => 27,  83 => 33,  80 => 21,  74 => 22,  66 => 20,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 19,  32 => 4,  29 => 3,  409 => 132,  400 => 180,  396 => 179,  393 => 126,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 110,  355 => 106,  348 => 153,  341 => 105,  334 => 145,  327 => 114,  312 => 98,  305 => 95,  298 => 91,  293 => 118,  288 => 101,  285 => 89,  276 => 113,  273 => 96,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 88,  240 => 86,  235 => 74,  229 => 73,  221 => 77,  219 => 76,  209 => 82,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  177 => 65,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 58,  141 => 48,  134 => 54,  130 => 41,  123 => 61,  119 => 42,  116 => 41,  113 => 48,  105 => 34,  102 => 32,  99 => 31,  96 => 37,  90 => 42,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 14,  59 => 14,  53 => 12,  45 => 12,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
