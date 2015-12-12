<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c17d1b3f8dde5269342cd45ba5783974c13fc9f02b1c04110f5c92da7e686287 = $this->env->getExtension("native_profiler");
        $__internal_c17d1b3f8dde5269342cd45ba5783974c13fc9f02b1c04110f5c92da7e686287->enter($__internal_c17d1b3f8dde5269342cd45ba5783974c13fc9f02b1c04110f5c92da7e686287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17d1b3f8dde5269342cd45ba5783974c13fc9f02b1c04110f5c92da7e686287->leave($__internal_c17d1b3f8dde5269342cd45ba5783974c13fc9f02b1c04110f5c92da7e686287_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_362006ca8b90e8a4fce2d9efbc324116efc57d5a7af9854335c7870a4c4e7192 = $this->env->getExtension("native_profiler");
        $__internal_362006ca8b90e8a4fce2d9efbc324116efc57d5a7af9854335c7870a4c4e7192->enter($__internal_362006ca8b90e8a4fce2d9efbc324116efc57d5a7af9854335c7870a4c4e7192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_362006ca8b90e8a4fce2d9efbc324116efc57d5a7af9854335c7870a4c4e7192->leave($__internal_362006ca8b90e8a4fce2d9efbc324116efc57d5a7af9854335c7870a4c4e7192_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2328c6b76c3e64f802bad02b65719aa00369289d2cf59f43ff1dbd65cde2669c = $this->env->getExtension("native_profiler");
        $__internal_2328c6b76c3e64f802bad02b65719aa00369289d2cf59f43ff1dbd65cde2669c->enter($__internal_2328c6b76c3e64f802bad02b65719aa00369289d2cf59f43ff1dbd65cde2669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_2328c6b76c3e64f802bad02b65719aa00369289d2cf59f43ff1dbd65cde2669c->leave($__internal_2328c6b76c3e64f802bad02b65719aa00369289d2cf59f43ff1dbd65cde2669c_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
