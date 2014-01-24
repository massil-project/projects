<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_0932b485f60819e48bd7e3e86ddcebd7b957599df0f6c34c46fabfb9abdc518f extends Twig_Template
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
        // line 2
        echo "{\"results\" : [
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 4
            echo "{
    \"command\" : ";
            // line 5
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command")), "input")));
            echo ",
    \"output\" : ";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command")), "output"));
            echo ",
    \"environment\": ";
            // line 7
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command")), "environment")));
            echo ",
    \"error_code\": ";
            // line 8
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command")), "error_code")));
            echo "
}";
            // line 9
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "] }
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  23 => 1,  110 => 52,  100 => 44,  255 => 107,  226 => 95,  215 => 93,  178 => 74,  303 => 176,  296 => 175,  292 => 174,  279 => 169,  231 => 143,  223 => 137,  200 => 118,  113 => 65,  53 => 5,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 188,  331 => 187,  324 => 158,  321 => 180,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 136,  272 => 164,  261 => 129,  244 => 99,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 61,  174 => 87,  161 => 97,  148 => 76,  212 => 117,  210 => 116,  124 => 60,  198 => 99,  192 => 96,  186 => 110,  167 => 84,  165 => 99,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 88,  194 => 83,  191 => 85,  185 => 81,  180 => 80,  172 => 70,  160 => 70,  150 => 85,  114 => 66,  97 => 28,  84 => 24,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 152,  222 => 127,  207 => 93,  170 => 84,  134 => 68,  76 => 21,  70 => 17,  65 => 16,  34 => 5,  249 => 149,  245 => 109,  237 => 98,  232 => 115,  216 => 97,  205 => 84,  195 => 77,  188 => 79,  181 => 91,  152 => 77,  137 => 48,  90 => 30,  77 => 14,  58 => 9,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 167,  337 => 103,  322 => 101,  314 => 179,  312 => 153,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 170,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 156,  252 => 80,  247 => 132,  241 => 119,  229 => 73,  220 => 126,  214 => 106,  177 => 88,  169 => 74,  140 => 83,  132 => 69,  128 => 53,  107 => 43,  61 => 17,  38 => 7,  273 => 96,  269 => 94,  254 => 125,  243 => 131,  240 => 108,  238 => 145,  235 => 144,  230 => 82,  227 => 127,  224 => 111,  221 => 136,  219 => 94,  217 => 120,  208 => 89,  204 => 101,  179 => 105,  159 => 85,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 22,  67 => 13,  63 => 19,  59 => 6,  94 => 31,  89 => 36,  85 => 38,  75 => 13,  68 => 26,  56 => 13,  87 => 30,  21 => 2,  26 => 1,  93 => 27,  88 => 25,  78 => 14,  46 => 6,  27 => 7,  44 => 13,  31 => 3,  28 => 3,  196 => 84,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 80,  156 => 79,  151 => 63,  142 => 45,  138 => 56,  136 => 69,  121 => 62,  117 => 56,  105 => 30,  91 => 33,  62 => 15,  49 => 12,  24 => 4,  25 => 2,  19 => 2,  79 => 27,  72 => 23,  69 => 12,  47 => 22,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 52,  123 => 47,  120 => 46,  115 => 50,  111 => 41,  108 => 54,  101 => 29,  98 => 32,  96 => 31,  83 => 35,  74 => 11,  66 => 26,  55 => 21,  52 => 18,  50 => 7,  43 => 6,  41 => 7,  35 => 9,  32 => 12,  29 => 5,  209 => 117,  203 => 78,  199 => 67,  193 => 114,  189 => 71,  187 => 84,  182 => 76,  176 => 104,  173 => 64,  168 => 100,  164 => 82,  162 => 57,  154 => 83,  149 => 89,  147 => 63,  144 => 59,  141 => 72,  133 => 72,  130 => 41,  125 => 45,  122 => 71,  116 => 44,  112 => 53,  109 => 31,  106 => 38,  103 => 52,  99 => 35,  95 => 34,  92 => 36,  86 => 19,  82 => 28,  80 => 23,  73 => 23,  64 => 18,  60 => 20,  57 => 12,  54 => 8,  51 => 10,  48 => 10,  45 => 7,  42 => 5,  39 => 4,  36 => 8,  33 => 6,  30 => 6,);
    }
}
