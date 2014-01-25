<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2a1ebd8ab7a30b8dfb43c055a3ba74dbec6dc0f108356a5a465374a44bebac2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'fixed_navbar' => array($this, 'block_fixed_navbar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "\tConnexion
";
    }

    // line 13
    public function block_fixed_navbar($context, array $blocks = array())
    {
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "
<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\" class=\"form-signin\" role=\"form\">

\t<h2 class=\"form-signin-heading\">Identifiez-vous !!</h2>
\t
\t";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t<p> Nom d'utilisateur ou mot de passe incorrect</p>
\t\t</div>
\t";
        }
        // line 27
        echo "\t
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autofocus/>

    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" />

    <label class=\"checkbox\">
    \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \tSe souvenir de moi
    </label>

    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
    
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  82 => 28,  79 => 27,  73 => 23,  71 => 22,  64 => 18,  61 => 17,  58 => 16,  53 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,);
    }
}
