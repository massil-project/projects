<?php

/* MassilMedicalBundle:Patient:index.html.twig */
class __TwigTemplate_0a54fa754f6fee96294c9068375591c54c2796ab06181b1cde6e7e9a63029eb2 extends Twig_Template
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
        echo "\tListe des patients
";
    }

    // line 6
    public function block_medical_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"page-header\">
\t<h1>
\t\t";
        // line 9
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "recherche")) {
            // line 10
            echo "\t\t\tResultats de la recherche :
\t\t";
        } else {
            // line 12
            echo "\t\t\tPatients
\t\t";
        }
        // line 14
        echo "\t \t<span class=\"badge\">Tous les patients : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))), "html", null, true);
        echo "</span>
\t</h1>
</div>


";
        // line 19
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "patient_delete")) {
            // line 20
            echo "\t<div class=\"row\">
\t\t<div class=\"alert alert-info\">
\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<h5>
\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t<strong>Info : </strong> Patient supprim&eacute; avec succ&egrave;s
\t\t\t</h5>
\t\t</div>
\t</div>

";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "recherche")) {
            // line 31
            echo "\t<div class=\"row\">
\t\t<div class=\"alert alert-info\">
\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<h5>
\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t<strong>Info : </strong> Recherche effectu&eacute; avec succ&egrave;s
\t\t\t</h5>
\t\t</div>
\t</div>
\t
";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "patient_exist")) {
            // line 42
            echo "\t<div class=\"row\">
\t\t<div class=\"alert alert-info\">
\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<h5>
\t\t\t\t<i class=\"glyphicon glyphicon-info-sign\"></i>
\t\t\t\t Ce patient est d&eacute;ja inscrit dans la liste d'attente. 
\t\t\t</h5>
\t\t</div>
\t</div>
";
        }
        // line 52
        echo "
";
        // line 53
        if ((twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))) > 0)) {
            // line 54
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<table class=\"table table-hover\" id=\"patient-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 60
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "number")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-order-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "number", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t#
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-order\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "number", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t#
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "number", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t#
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 79
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "nom")) {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "nom", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "nom", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "nom", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 98
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "prenom")) {
                // line 99
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "prenom", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tPr&eacute;nom
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "prenom", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tPr&eacute;nom
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "prenom", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tPr&eacute;nom
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 117
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "dateNaissance")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "dateNaissance", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tDate naissance
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "dateNaissance", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tDate naissance
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "dateNaissance", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tDate naissance
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 136
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "sexe")) {
                // line 137
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "sexe", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "sexe", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "sexe", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 155
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "assurance")) {
                // line 156
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "assurance", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tAssurance
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "assurance", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tAssurance
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "assurance", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tAssurance
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
            // line 174
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "situation")) {
                // line 175
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "down")) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "situation", "direction" => "up")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tSituation familiale
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-sort-by-alphabet-alt\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "situation", "direction" => "down")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\tSituation familiale
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 186
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 187
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("filter" => "situation", "direction" => "up")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tSituation familiale
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 196
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
                // line 197
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 199
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 200
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 201
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateNaissance"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 202
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexe")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 204
                if (($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "assure") == true)) {
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t\t";
                } else {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 210
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "etatCivil")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t Details
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_add", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pushpin\"></i>
\t\t\t\t\t\t\t\t\t\t Consulter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t Modifier
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 225
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_delete", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t Supprimer
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_salle_add_patient", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-time\"></i>
\t\t\t\t\t\t\t\t\t\t Liste d'attente
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
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
            // line 238
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
";
        } elseif ((twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))) == 0)) {
            // line 243
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "recherche")) {
                // line 244
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<p>Aucun r&eacute;sultat pour la recherche.</p>
\t\t\t</div>
\t\t</div>
\t";
            } else {
                // line 250
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<p>Aucun patient a afficher.</p>
\t\t\t</div>
\t\t</div>
\t";
            }
        }
        // line 257
        echo "
";
        // line 258
        if ((twig_length_filter($this->env, (isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients"))) > 0)) {
            // line 259
            echo "
<div class=\"row\">
<div class=\"col-md-4\"></div>
<div>
\t<ul class=\"pagination\">
\t\t<li ";
            // line 264
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 269
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 270
                echo "\t\t\t<li ";
                if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t\t<a href=\"";
                // line 271
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "\t\t\t<li ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages")))) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-right\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t</ul>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Patient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  334 => 163,  331 => 162,  324 => 158,  321 => 157,  318 => 156,  316 => 155,  304 => 149,  301 => 148,  291 => 143,  284 => 139,  281 => 138,  276 => 136,  272 => 134,  261 => 129,  251 => 124,  244 => 120,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 61,  174 => 87,  210 => 116,  170 => 84,  124 => 63,  198 => 99,  186 => 71,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 35,  213 => 96,  202 => 90,  194 => 86,  191 => 85,  185 => 81,  180 => 80,  172 => 75,  160 => 70,  114 => 66,  97 => 38,  84 => 27,  81 => 35,  223 => 130,  218 => 129,  212 => 117,  207 => 93,  197 => 119,  192 => 96,  190 => 115,  178 => 105,  161 => 81,  150 => 85,  148 => 84,  134 => 68,  76 => 25,  70 => 25,  65 => 20,  34 => 5,  249 => 110,  245 => 109,  237 => 107,  232 => 115,  216 => 97,  205 => 84,  195 => 77,  188 => 82,  181 => 91,  152 => 77,  137 => 48,  90 => 30,  77 => 25,  58 => 18,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 182,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 167,  337 => 103,  322 => 101,  314 => 99,  312 => 153,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 89,  283 => 88,  278 => 137,  268 => 85,  264 => 130,  258 => 81,  252 => 80,  247 => 132,  241 => 119,  229 => 73,  220 => 70,  214 => 106,  177 => 88,  169 => 74,  140 => 55,  132 => 69,  128 => 53,  107 => 43,  61 => 19,  38 => 15,  273 => 96,  269 => 94,  254 => 125,  243 => 131,  240 => 108,  238 => 118,  235 => 74,  230 => 82,  227 => 127,  224 => 111,  221 => 110,  219 => 121,  217 => 120,  208 => 68,  204 => 101,  179 => 78,  159 => 61,  143 => 51,  135 => 73,  119 => 51,  102 => 47,  71 => 26,  67 => 23,  63 => 19,  59 => 11,  94 => 31,  89 => 36,  85 => 32,  75 => 27,  68 => 21,  56 => 13,  87 => 38,  21 => 2,  26 => 1,  93 => 37,  88 => 39,  78 => 31,  46 => 10,  27 => 3,  44 => 9,  31 => 4,  28 => 5,  196 => 98,  183 => 94,  171 => 86,  166 => 71,  163 => 95,  158 => 80,  156 => 79,  151 => 63,  142 => 45,  138 => 59,  136 => 58,  121 => 62,  117 => 44,  105 => 43,  91 => 42,  62 => 18,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 24,  47 => 12,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 58,  131 => 67,  123 => 59,  120 => 50,  115 => 50,  111 => 51,  108 => 54,  101 => 32,  98 => 32,  96 => 31,  83 => 36,  74 => 26,  66 => 28,  55 => 14,  52 => 16,  50 => 12,  43 => 9,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 120,  193 => 84,  189 => 71,  187 => 84,  182 => 81,  176 => 77,  173 => 64,  168 => 83,  164 => 82,  162 => 57,  154 => 58,  149 => 64,  147 => 63,  144 => 73,  141 => 72,  133 => 72,  130 => 41,  125 => 52,  122 => 41,  116 => 60,  112 => 37,  109 => 25,  106 => 53,  103 => 52,  99 => 55,  95 => 38,  92 => 36,  86 => 28,  82 => 31,  80 => 26,  73 => 27,  64 => 19,  60 => 20,  57 => 19,  54 => 14,  51 => 13,  48 => 13,  45 => 11,  42 => 9,  39 => 9,  36 => 11,  33 => 7,  30 => 6,);
    }
}
