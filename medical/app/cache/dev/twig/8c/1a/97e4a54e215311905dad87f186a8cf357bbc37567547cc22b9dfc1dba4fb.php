<?php

/* MassilMedicalBundle:Salle:show.html.twig */
class __TwigTemplate_8c1a97e4a54e215311905dad87f186a8cf357bbc37567547cc22b9dfc1dba4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MassilMedicalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'medical_body' => array($this, 'block_medical_body'),
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
        echo "\tListe d'attente
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header\">
\t<h1>
\t\t<i class=\"glyphicon glyphicon-time\"></i>
\t\t Liste d'attente du : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateDuJour"]) ? $context["dateDuJour"] : $this->getContext($context, "dateDuJour")), "html", null, true);
        echo "
\t</h1>
</div>

<div class=\"row\">
\t<div class=\"row\">
\t";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))) > 0)) {
            // line 19
            echo "\t\t<div class=\"col-md-12\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>Nom et pr&eacute;nom</th>
\t\t\t\t\t\t<th>Heure d'arriv&eacute;</th>
\t\t\t\t\t\t<th>Rendez-vous</th>
\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 32
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "patientSalleAttentes"), 0, array(), "array"), "dateArrive"), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 37
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "patientSalleAttentes"), 0, array(), "array"), "etatPatient") == "pass&eacute;")) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "patientSalleAttentes"), 0, array(), "array"), "etatPatient") == "annul&eacute;")) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-info\">
\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 47
                echo twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "patientSalleAttentes"), 0, array(), "array"), "etatPatient"));
                echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_change", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "change" => "annuler")), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-time-sign\"></i>
\t\t\t\t\t\t\t\t\t\t Annuler 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_change", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "change" => "passer")), "html", null, true);
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\tPasser le patient
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_change", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "change" => "attente")), "html", null, true);
                echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\tMise en attente
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t\t Dossier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
        } else {
            // line 74
            echo "\t<div class=\"alert alert-info\">
\t\t<i class=\"glyphicon glyphicon-info-sign\"></i> 
\t\t Aucun patient inscrit dans cet date : ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["dateDuJour"]) ? $context["dateDuJour"] : $this->getContext($context, "dateDuJour")), "html", null, true);
            echo "
\t</div>
\t";
        }
        // line 79
        echo "\t
\t</div>
</div>

";
        // line 83
        if ((twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))) > 0)) {
            // line 84
            echo "<div class=\"row\">
<div class=\"col-md-4\"></div>
<div>
\t<ul class=\"pagination\">
\t\t<li ";
            // line 88
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_show", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 94
                echo "\t\t\t<li ";
                if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t\t<a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_show", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t<li ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages")))) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_show", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-right\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t</ul>
</div>
</div>
";
        }
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Salle:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 107,  226 => 95,  215 => 93,  178 => 74,  303 => 176,  296 => 175,  292 => 174,  279 => 169,  231 => 143,  223 => 137,  200 => 118,  113 => 65,  53 => 13,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 188,  331 => 187,  324 => 158,  321 => 180,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 136,  272 => 164,  261 => 129,  244 => 99,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 61,  174 => 87,  161 => 97,  148 => 84,  212 => 117,  210 => 116,  124 => 63,  198 => 99,  192 => 96,  186 => 110,  167 => 84,  165 => 99,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 88,  194 => 83,  191 => 85,  185 => 81,  180 => 80,  172 => 70,  160 => 70,  150 => 85,  114 => 66,  97 => 38,  84 => 27,  81 => 35,  286 => 165,  282 => 164,  277 => 163,  271 => 162,  266 => 160,  256 => 153,  251 => 152,  222 => 127,  207 => 93,  170 => 84,  134 => 68,  76 => 25,  70 => 25,  65 => 20,  34 => 5,  249 => 149,  245 => 109,  237 => 98,  232 => 115,  216 => 97,  205 => 84,  195 => 77,  188 => 79,  181 => 91,  152 => 77,  137 => 48,  90 => 30,  77 => 25,  58 => 18,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 167,  337 => 103,  322 => 101,  314 => 179,  312 => 153,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 170,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 156,  252 => 80,  247 => 132,  241 => 119,  229 => 73,  220 => 126,  214 => 106,  177 => 88,  169 => 74,  140 => 83,  132 => 69,  128 => 53,  107 => 43,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 125,  243 => 131,  240 => 108,  238 => 145,  235 => 144,  230 => 82,  227 => 127,  224 => 111,  221 => 136,  219 => 94,  217 => 120,  208 => 89,  204 => 101,  179 => 105,  159 => 96,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 31,  67 => 23,  63 => 19,  59 => 11,  94 => 31,  89 => 36,  85 => 32,  75 => 27,  68 => 26,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 37,  88 => 32,  78 => 31,  46 => 12,  27 => 3,  44 => 9,  31 => 4,  28 => 5,  196 => 84,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 80,  156 => 79,  151 => 63,  142 => 45,  138 => 56,  136 => 58,  121 => 62,  117 => 44,  105 => 43,  91 => 33,  62 => 18,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 24,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 52,  123 => 47,  120 => 46,  115 => 50,  111 => 41,  108 => 54,  101 => 32,  98 => 32,  96 => 31,  83 => 30,  74 => 26,  66 => 23,  55 => 18,  52 => 16,  50 => 16,  43 => 9,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 117,  203 => 78,  199 => 67,  193 => 114,  189 => 71,  187 => 84,  182 => 76,  176 => 104,  173 => 64,  168 => 100,  164 => 82,  162 => 57,  154 => 83,  149 => 89,  147 => 63,  144 => 59,  141 => 72,  133 => 72,  130 => 41,  125 => 52,  122 => 71,  116 => 44,  112 => 37,  109 => 25,  106 => 38,  103 => 52,  99 => 35,  95 => 34,  92 => 36,  86 => 28,  82 => 38,  80 => 29,  73 => 27,  64 => 19,  60 => 20,  57 => 19,  54 => 14,  51 => 12,  48 => 13,  45 => 9,  42 => 8,  39 => 7,  36 => 11,  33 => 7,  30 => 6,);
    }
}
