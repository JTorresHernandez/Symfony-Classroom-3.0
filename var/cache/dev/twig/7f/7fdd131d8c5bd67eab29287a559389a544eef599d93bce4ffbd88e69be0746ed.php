<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_7e611c27757203cbc530905f667861034d646161d367f3bdb2c5efb2d3d3ec5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5f48d332806fedb4b8c4032e6e9d757b91cb70fd1b4ea5346b8b1506208726 = $this->env->getExtension("native_profiler");
        $__internal_ad5f48d332806fedb4b8c4032e6e9d757b91cb70fd1b4ea5346b8b1506208726->enter($__internal_ad5f48d332806fedb4b8c4032e6e9d757b91cb70fd1b4ea5346b8b1506208726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5f48d332806fedb4b8c4032e6e9d757b91cb70fd1b4ea5346b8b1506208726->leave($__internal_ad5f48d332806fedb4b8c4032e6e9d757b91cb70fd1b4ea5346b8b1506208726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf11c354e3b879783b7719fca761eac4d61acb060dc03138ebd50a56f38514ce = $this->env->getExtension("native_profiler");
        $__internal_cf11c354e3b879783b7719fca761eac4d61acb060dc03138ebd50a56f38514ce->enter($__internal_cf11c354e3b879783b7719fca761eac4d61acb060dc03138ebd50a56f38514ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page not found</h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_cf11c354e3b879783b7719fca761eac4d61acb060dc03138ebd50a56f38514ce->leave($__internal_cf11c354e3b879783b7719fca761eac4d61acb060dc03138ebd50a56f38514ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Page not found</h1>*/
/* */
/*     <p>*/
/*         The requested page couldn't be located. Checkout for any URL*/
/*         misspelling or <a href="{{ path('app_article_articles') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
