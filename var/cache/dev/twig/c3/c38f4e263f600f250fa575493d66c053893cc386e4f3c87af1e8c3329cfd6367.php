<?php

/* :article:addArticle.html.twig */
class __TwigTemplate_c103e45f4089298f62796f03c1b4389b605360f428b3bdece6feb1e0bad692dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:addArticle.html.twig", 1);
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
        $__internal_00914ad339ab2cec633fc38301fd178677f6057e1ae471cfc01e292ceff456dd = $this->env->getExtension("native_profiler");
        $__internal_00914ad339ab2cec633fc38301fd178677f6057e1ae471cfc01e292ceff456dd->enter($__internal_00914ad339ab2cec633fc38301fd178677f6057e1ae471cfc01e292ceff456dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:addArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00914ad339ab2cec633fc38301fd178677f6057e1ae471cfc01e292ceff456dd->leave($__internal_00914ad339ab2cec633fc38301fd178677f6057e1ae471cfc01e292ceff456dd_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_9f8c25d3560e786a0907db18c94f8271a272321e48651fdc1792ca3370d75cbe = $this->env->getExtension("native_profiler");
        $__internal_9f8c25d3560e786a0907db18c94f8271a272321e48651fdc1792ca3370d75cbe->enter($__internal_9f8c25d3560e786a0907db18c94f8271a272321e48651fdc1792ca3370d75cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "New Article";
        
        $__internal_9f8c25d3560e786a0907db18c94f8271a272321e48651fdc1792ca3370d75cbe->leave($__internal_9f8c25d3560e786a0907db18c94f8271a272321e48651fdc1792ca3370d75cbe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab5c34a1516bddafbd19d685818fe0df29c2dbf5ce7275ee0ecd02e558f4904 = $this->env->getExtension("native_profiler");
        $__internal_1ab5c34a1516bddafbd19d685818fe0df29c2dbf5ce7275ee0ecd02e558f4904->enter($__internal_1ab5c34a1516bddafbd19d685818fe0df29c2dbf5ce7275ee0ecd02e558f4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_1ab5c34a1516bddafbd19d685818fe0df29c2dbf5ce7275ee0ecd02e558f4904->leave($__internal_1ab5c34a1516bddafbd19d685818fe0df29c2dbf5ce7275ee0ecd02e558f4904_prof);

    }

    public function getTemplateName()
    {
        return ":article:addArticle.html.twig";
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
/* {% block headTitle %}New Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
