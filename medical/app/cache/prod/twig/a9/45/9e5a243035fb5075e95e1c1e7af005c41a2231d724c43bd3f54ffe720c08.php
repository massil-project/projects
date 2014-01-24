<?php

/* MassilMedicalBundle:Consultation:jour.html.twig */
class __TwigTemplate_a9459e5a243035fb5075e95e1c1e7af005c41a2231d724c43bd3f54ffe720c08 extends Twig_Template
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
        echo "\tConsultations du jour
";
    }

    // line 7
    public function block_medical_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h1>
\t\t\t<i class=\"glyphicon glyphicon-calendar\"></i>
\t\t\tConsultations du : 
\t\t\t";
        // line 12
        if (array_key_exists("dateDuJour", $context)) {
            // line 13
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["dateDuJour"]) ? $context["dateDuJour"] : $this->getContext($context, "dateDuJour")), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 17
        echo "\t\t</h1>
\t\t<p><span class=\"badge\">Total : ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations"))), "html", null, true);
        echo "</span></p>
\t</div>
\t
\t<div class=\"row\">
\t\t";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations"))) == 0)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<p>
\t\t\t\t\t";
            // line 25
            if (array_key_exists("dateDuJour", $context)) {
                // line 26
                echo "\t\t\t\t\t\t<i class=\"glyphicon glyphicon-info-sign\"></i> Aucune consultation le : ";
                echo twig_escape_filter($this->env, (isset($context["dateDuJour"]) ? $context["dateDuJour"] : $this->getContext($context, "dateDuJour")), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t<i class=\"glyphicon glyphicon-info-sign\"></i> Aucune consultation aujourd'hui.
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t</p>
\t\t\t</div>
\t\t";
        } elseif ((twig_length_filter($this->env, (isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations"))) > 0)) {
            // line 33
            echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>Nom et pr&eacute;nom</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Heure</th>
\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
                // line 44
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "patient"), "nom")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "patient"), "prenom"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>Consult&eacute; le : ";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>&agrave; : ";
                // line 48
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "H") . "h") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date"), "i")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_patient_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "patient"), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t Dossier du patient
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_show", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t D&eacute;tails
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_edit", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t Modifier 
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medical_consultation_delete", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t Supprimer
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "MassilMedicalBundle:Consultation:jour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  186 => 71,  164 => 63,  157 => 59,  150 => 55,  143 => 51,  137 => 48,  133 => 47,  129 => 46,  125 => 45,  122 => 44,  105 => 43,  93 => 33,  88 => 30,  84 => 28,  78 => 26,  76 => 25,  72 => 23,  70 => 22,  63 => 18,  60 => 17,  54 => 15,  48 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
