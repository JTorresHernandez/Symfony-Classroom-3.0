<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_aa6ac1635e0f6b5966ac45e4d795492858efcc0ff41f0af5b0ff2886a17f1c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30a3029e708ada468e7cc15d5919e5b6328c5b54c013b88b1467202afe44f3ba = $this->env->getExtension("native_profiler");
        $__internal_30a3029e708ada468e7cc15d5919e5b6328c5b54c013b88b1467202afe44f3ba->enter($__internal_30a3029e708ada468e7cc15d5919e5b6328c5b54c013b88b1467202afe44f3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a3029e708ada468e7cc15d5919e5b6328c5b54c013b88b1467202afe44f3ba->leave($__internal_30a3029e708ada468e7cc15d5919e5b6328c5b54c013b88b1467202afe44f3ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0fa13d9e4e66ae52e6a25ef0673d13a5e2a4d73445ad88f894bccedb4c4d3e = $this->env->getExtension("native_profiler");
        $__internal_cf0fa13d9e4e66ae52e6a25ef0673d13a5e2a4d73445ad88f894bccedb4c4d3e->enter($__internal_cf0fa13d9e4e66ae52e6a25ef0673d13a5e2a4d73445ad88f894bccedb4c4d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Error 403 - Forbidden</h1>

    ";
        // line 7
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        You do not have enough privileges to access this page <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_cf0fa13d9e4e66ae52e6a25ef0673d13a5e2a4d73445ad88f894bccedb4c4d3e->leave($__internal_cf0fa13d9e4e66ae52e6a25ef0673d13a5e2a4d73445ad88f894bccedb4c4d3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Error 403 - Forbidden</h1>*/
/* */
/*     {# example security usage, see below #}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         You do not have enough privileges to access this page <a href="{{ path('app_article_articles') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
