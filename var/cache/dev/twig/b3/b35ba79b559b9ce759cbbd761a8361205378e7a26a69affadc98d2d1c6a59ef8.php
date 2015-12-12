<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe2f81b9459ae44b04fc93b80e514118cc3146c593fca17ebe03ce91bbacbe28 = $this->env->getExtension("native_profiler");
        $__internal_fe2f81b9459ae44b04fc93b80e514118cc3146c593fca17ebe03ce91bbacbe28->enter($__internal_fe2f81b9459ae44b04fc93b80e514118cc3146c593fca17ebe03ce91bbacbe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe2f81b9459ae44b04fc93b80e514118cc3146c593fca17ebe03ce91bbacbe28->leave($__internal_fe2f81b9459ae44b04fc93b80e514118cc3146c593fca17ebe03ce91bbacbe28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_087c1d3530f86c49967fb82aa11effb81c8b092d5a33919a6b1dee37f4ba39f0 = $this->env->getExtension("native_profiler");
        $__internal_087c1d3530f86c49967fb82aa11effb81c8b092d5a33919a6b1dee37f4ba39f0->enter($__internal_087c1d3530f86c49967fb82aa11effb81c8b092d5a33919a6b1dee37f4ba39f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_087c1d3530f86c49967fb82aa11effb81c8b092d5a33919a6b1dee37f4ba39f0->leave($__internal_087c1d3530f86c49967fb82aa11effb81c8b092d5a33919a6b1dee37f4ba39f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
