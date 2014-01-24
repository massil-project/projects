<?php

/* MassilMedicalBundle:Patient:index.html.twig */
class __TwigTemplate_b884b7da014b9151b8959a66ab5747ce916c6af4d9ec816c4c713f6894f9d705 extends Twig_Template
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
        return array (  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 238,  487 => 229,  480 => 225,  473 => 221,  466 => 217,  459 => 213,  453 => 210,  450 => 209,  446 => 207,  442 => 205,  440 => 204,  435 => 202,  431 => 201,  427 => 200,  423 => 199,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  384 => 187,  381 => 186,  374 => 182,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 168,  341 => 167,  334 => 163,  331 => 162,  324 => 158,  321 => 157,  318 => 156,  316 => 155,  312 => 153,  304 => 149,  301 => 148,  294 => 144,  291 => 143,  284 => 139,  281 => 138,  278 => 137,  276 => 136,  272 => 134,  264 => 130,  261 => 129,  254 => 125,  251 => 124,  244 => 120,  241 => 119,  238 => 118,  236 => 117,  232 => 115,  224 => 111,  221 => 110,  214 => 106,  211 => 105,  204 => 101,  201 => 100,  198 => 99,  196 => 98,  192 => 96,  184 => 92,  181 => 91,  174 => 87,  171 => 86,  164 => 82,  161 => 81,  158 => 80,  156 => 79,  152 => 77,  144 => 73,  141 => 72,  134 => 68,  131 => 67,  124 => 63,  121 => 62,  118 => 61,  116 => 60,  108 => 54,  106 => 53,  103 => 52,  91 => 42,  78 => 31,  65 => 20,  63 => 19,  54 => 14,  50 => 12,  46 => 10,  44 => 9,  40 => 7,  37 => 6,  32 => 4,  29 => 3,);
    }
}
