<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f06f374b5b3dc3a94dfb212336528023ea7d44a9b555335096c346bc50c3330e extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  42 => 12,  24 => 2,  1188 => 330,  1182 => 329,  1176 => 328,  1170 => 327,  1164 => 326,  1158 => 325,  1152 => 324,  1146 => 323,  1140 => 322,  1124 => 316,  1117 => 315,  1115 => 314,  1112 => 313,  1089 => 309,  1064 => 308,  1062 => 307,  1059 => 306,  1047 => 301,  1042 => 300,  1040 => 299,  1037 => 298,  1028 => 292,  1022 => 290,  1019 => 289,  1014 => 288,  1012 => 287,  1009 => 286,  1002 => 281,  993 => 279,  989 => 278,  986 => 277,  983 => 276,  981 => 275,  978 => 274,  970 => 270,  968 => 269,  965 => 268,  958 => 263,  955 => 262,  947 => 257,  943 => 256,  939 => 255,  936 => 254,  934 => 253,  931 => 252,  923 => 248,  921 => 244,  919 => 243,  916 => 242,  894 => 235,  891 => 234,  888 => 233,  885 => 232,  882 => 231,  879 => 230,  876 => 229,  873 => 228,  870 => 227,  867 => 226,  864 => 225,  862 => 224,  859 => 223,  851 => 217,  848 => 216,  846 => 215,  843 => 214,  835 => 210,  832 => 209,  830 => 208,  827 => 207,  819 => 203,  816 => 202,  814 => 201,  811 => 200,  803 => 196,  800 => 195,  798 => 194,  795 => 193,  787 => 189,  784 => 188,  782 => 187,  779 => 186,  771 => 182,  768 => 181,  766 => 180,  763 => 179,  755 => 175,  753 => 174,  750 => 173,  742 => 169,  739 => 168,  737 => 167,  734 => 166,  726 => 162,  723 => 161,  721 => 160,  719 => 159,  716 => 158,  709 => 153,  699 => 152,  694 => 151,  691 => 150,  685 => 148,  682 => 147,  680 => 146,  677 => 145,  669 => 139,  667 => 138,  666 => 137,  665 => 136,  664 => 135,  659 => 134,  653 => 132,  650 => 131,  648 => 130,  645 => 129,  636 => 123,  632 => 122,  628 => 121,  624 => 120,  619 => 119,  613 => 117,  610 => 116,  608 => 115,  605 => 114,  589 => 110,  587 => 109,  568 => 104,  563 => 102,  546 => 98,  534 => 96,  527 => 93,  525 => 92,  499 => 89,  497 => 88,  494 => 87,  485 => 82,  482 => 81,  479 => 80,  471 => 77,  463 => 75,  460 => 74,  448 => 71,  438 => 69,  429 => 64,  421 => 62,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  329 => 26,  323 => 24,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 330,  258 => 329,  256 => 328,  252 => 326,  250 => 325,  248 => 324,  246 => 323,  233 => 312,  231 => 306,  228 => 305,  226 => 298,  223 => 297,  220 => 295,  218 => 286,  215 => 285,  213 => 274,  210 => 273,  208 => 268,  202 => 265,  200 => 262,  197 => 261,  190 => 242,  187 => 241,  182 => 223,  179 => 222,  176 => 220,  169 => 207,  166 => 206,  159 => 193,  154 => 186,  151 => 185,  149 => 179,  146 => 178,  139 => 166,  136 => 165,  129 => 145,  126 => 144,  119 => 114,  114 => 108,  111 => 107,  104 => 87,  101 => 86,  99 => 68,  96 => 67,  94 => 57,  89 => 47,  86 => 46,  84 => 41,  81 => 40,  79 => 29,  76 => 31,  71 => 19,  69 => 13,  66 => 25,  61 => 2,  27 => 3,  19 => 1,  249 => 110,  245 => 109,  240 => 108,  237 => 107,  227 => 92,  219 => 93,  216 => 92,  205 => 267,  195 => 252,  188 => 73,  173 => 64,  168 => 62,  157 => 54,  142 => 45,  137 => 43,  133 => 42,  123 => 35,  112 => 26,  109 => 102,  98 => 17,  95 => 16,  90 => 13,  83 => 30,  80 => 9,  74 => 20,  72 => 107,  64 => 3,  62 => 24,  58 => 98,  56 => 25,  49 => 20,  47 => 16,  41 => 13,  38 => 12,  36 => 9,  26 => 3,  43 => 6,  33 => 6,  30 => 5,  591 => 275,  584 => 108,  573 => 271,  566 => 103,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 91,  517 => 90,  510 => 238,  487 => 229,  480 => 225,  473 => 78,  466 => 76,  459 => 213,  453 => 210,  450 => 72,  446 => 207,  442 => 205,  440 => 70,  435 => 68,  431 => 201,  427 => 200,  423 => 199,  419 => 198,  416 => 61,  399 => 196,  392 => 191,  384 => 49,  381 => 186,  374 => 182,  371 => 181,  364 => 41,  361 => 176,  358 => 175,  356 => 37,  352 => 172,  344 => 168,  341 => 167,  334 => 27,  331 => 162,  324 => 158,  321 => 23,  318 => 156,  316 => 22,  312 => 153,  304 => 149,  301 => 148,  294 => 144,  291 => 143,  284 => 139,  281 => 138,  278 => 8,  276 => 136,  272 => 6,  264 => 3,  261 => 129,  254 => 327,  251 => 124,  244 => 322,  241 => 321,  238 => 319,  236 => 313,  232 => 100,  224 => 111,  221 => 110,  214 => 106,  211 => 105,  204 => 101,  201 => 100,  198 => 99,  196 => 98,  192 => 251,  184 => 239,  181 => 69,  174 => 214,  171 => 213,  164 => 200,  161 => 199,  158 => 80,  156 => 192,  152 => 52,  144 => 173,  141 => 172,  134 => 158,  131 => 157,  124 => 129,  121 => 128,  118 => 61,  116 => 113,  108 => 54,  106 => 101,  103 => 18,  91 => 35,  78 => 31,  65 => 20,  63 => 19,  54 => 14,  50 => 15,  46 => 14,  44 => 9,  40 => 5,  37 => 6,  32 => 6,  29 => 3,);
    }
}
