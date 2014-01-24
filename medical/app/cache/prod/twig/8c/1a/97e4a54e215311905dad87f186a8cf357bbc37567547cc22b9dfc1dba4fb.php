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
        return array (  255 => 107,  244 => 99,  237 => 98,  226 => 95,  219 => 94,  215 => 93,  208 => 89,  202 => 88,  196 => 84,  194 => 83,  188 => 79,  182 => 76,  178 => 74,  172 => 70,  151 => 63,  144 => 59,  138 => 56,  131 => 52,  123 => 47,  120 => 46,  116 => 44,  111 => 41,  106 => 38,  104 => 37,  99 => 35,  95 => 34,  91 => 33,  88 => 32,  71 => 31,  57 => 19,  55 => 18,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
