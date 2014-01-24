<?php

/* MassilMedicalBundle:Patient:show.html.twig */
class __TwigTemplate_a3944ac3597c1dc9be8a86fe1ac33bd55db4bb72af998a587b89bef85b988093 extends Twig_Template
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
        echo "\tDossier : ";
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h2><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, (((" " . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"))) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"))), "html", null, true);
        echo "</h2>
\t</div>
\t
\t";
        // line 12
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "patient_saved")) {
            // line 13
            echo "\t\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Patient enregistr&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t\t\t\t
\t\t\t
\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "patient_edit")) {
            // line 26
            echo "\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Patient modifi&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>\t
\t
\t";
        } elseif (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) == "consultation_delete")) {
            // line 38
            echo "\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h5>
\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t<strong>Info : </strong> Consultation supprim&eacute; avec succ&egrave;s
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 49
        echo "\t
\t
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3>
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i> 
\t\t\t\t\t\t Dossier 
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Nom</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 65
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Pr&eacute;nom</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 71
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Date de naissance</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Sexe</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 83
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexe")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Situation familiale</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 89
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "etatCivil")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Assurance</label>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"form-control-static\">
\t\t\t\t\t\t\t\t\t";
        // line 96
        if ((null === $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "assure"))) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\tNon mention&eacute;e
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "assure") == 0)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"btn-group col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t<a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_home"), "html", null, true);
        echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\t\t\t\t\t Retour &agrave; la liste
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\" role=\"button\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t Modifier
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_delete", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\" role=\"button\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\t\t\t\t Supprimer
\t\t\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pushpin\"></i> 
\t\t\t\t\t\t\t Consultations
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body col-md-12\">
\t\t\t\t\t\t";
        // line 136
        if ((twig_length_filter($this->env, (isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations"))) > 0)) {
            // line 137
            echo "\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th>Date de consultation</th>
\t\t\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t\t\t</thaed>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 143
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations")));
            foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_show", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t Details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_edit", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t Modifier
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t<li ";
            // line 169
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t<li ";
                if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t<li ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["numberPages"]) ? $context["numberPages"] : $this->getContext($context, "numberPages")))) {
                echo "class=\"disabled\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-top: 20px;\">
\t\t\t\t\t\t\t<a href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_add", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i>
\t\t\t\t\t\t\t\t Ajouter une consultation
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Patient:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 188,  331 => 187,  321 => 180,  314 => 179,  303 => 176,  296 => 175,  292 => 174,  285 => 170,  279 => 169,  272 => 164,  258 => 156,  251 => 152,  244 => 148,  238 => 145,  235 => 144,  231 => 143,  223 => 137,  221 => 136,  200 => 118,  193 => 114,  186 => 110,  179 => 105,  176 => 104,  172 => 102,  168 => 100,  165 => 99,  161 => 97,  159 => 96,  149 => 89,  140 => 83,  131 => 77,  122 => 71,  113 => 65,  95 => 49,  82 => 38,  68 => 26,  53 => 13,  51 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
