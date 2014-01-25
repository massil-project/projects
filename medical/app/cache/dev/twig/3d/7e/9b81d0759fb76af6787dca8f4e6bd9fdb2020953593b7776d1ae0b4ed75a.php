<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3d7e9b81d0759fb76af6787dca8f4e6bd9fdb2020953593b7776d1ae0b4ed75a extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  348 => 153,  327 => 141,  293 => 118,  288 => 116,  271 => 111,  262 => 104,  259 => 103,  248 => 96,  153 => 56,  20 => 1,  23 => 1,  110 => 52,  100 => 39,  255 => 107,  226 => 95,  215 => 93,  303 => 176,  296 => 175,  292 => 174,  279 => 169,  231 => 143,  200 => 118,  113 => 48,  53 => 12,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 145,  331 => 187,  324 => 158,  321 => 180,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 113,  272 => 164,  261 => 129,  251 => 97,  244 => 99,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 49,  174 => 87,  210 => 116,  170 => 84,  124 => 60,  198 => 99,  186 => 110,  167 => 84,  165 => 60,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 75,  194 => 83,  191 => 67,  185 => 67,  180 => 80,  172 => 64,  160 => 70,  114 => 66,  97 => 28,  84 => 24,  81 => 23,  223 => 137,  218 => 129,  212 => 117,  207 => 93,  197 => 119,  192 => 96,  190 => 115,  178 => 66,  161 => 63,  150 => 55,  148 => 76,  134 => 54,  76 => 31,  70 => 19,  65 => 16,  34 => 5,  249 => 110,  245 => 109,  237 => 98,  232 => 115,  216 => 97,  205 => 84,  195 => 71,  188 => 68,  181 => 91,  152 => 77,  137 => 48,  90 => 27,  77 => 14,  58 => 9,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 149,  337 => 103,  322 => 101,  314 => 179,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 144,  285 => 115,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 156,  252 => 80,  247 => 132,  241 => 119,  229 => 87,  220 => 70,  214 => 106,  177 => 64,  169 => 74,  140 => 58,  132 => 69,  128 => 53,  107 => 43,  61 => 17,  38 => 6,  273 => 112,  269 => 94,  254 => 125,  243 => 93,  240 => 92,  238 => 145,  235 => 89,  230 => 82,  227 => 127,  224 => 111,  221 => 85,  219 => 84,  217 => 120,  208 => 89,  204 => 101,  179 => 105,  159 => 85,  143 => 51,  135 => 73,  119 => 40,  102 => 40,  71 => 22,  67 => 24,  63 => 19,  59 => 14,  94 => 31,  89 => 36,  85 => 38,  75 => 13,  68 => 26,  56 => 13,  87 => 34,  21 => 2,  26 => 4,  93 => 27,  88 => 25,  78 => 14,  46 => 13,  27 => 3,  44 => 13,  31 => 4,  28 => 3,  196 => 84,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 62,  156 => 58,  151 => 59,  142 => 45,  138 => 56,  136 => 69,  121 => 50,  117 => 56,  105 => 34,  91 => 33,  62 => 15,  49 => 14,  24 => 4,  25 => 2,  19 => 1,  79 => 27,  72 => 23,  69 => 12,  47 => 22,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 52,  123 => 42,  120 => 46,  115 => 50,  111 => 47,  108 => 54,  101 => 29,  98 => 32,  96 => 37,  83 => 33,  74 => 11,  66 => 26,  55 => 16,  52 => 18,  50 => 7,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 5,  209 => 79,  203 => 78,  199 => 120,  193 => 114,  189 => 71,  187 => 84,  182 => 76,  176 => 104,  173 => 64,  168 => 61,  164 => 82,  162 => 59,  154 => 60,  149 => 89,  147 => 54,  144 => 59,  141 => 51,  133 => 72,  130 => 46,  125 => 51,  122 => 71,  116 => 39,  112 => 53,  109 => 31,  106 => 38,  103 => 52,  99 => 31,  95 => 34,  92 => 36,  86 => 19,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 20,  57 => 12,  54 => 8,  51 => 14,  48 => 13,  45 => 10,  42 => 5,  39 => 4,  36 => 8,  33 => 4,  30 => 3,);
    }
}
