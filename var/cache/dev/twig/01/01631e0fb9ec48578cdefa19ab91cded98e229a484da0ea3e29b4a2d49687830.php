<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b2adf917fa99cc0511911646f36d3688d7c12eebb01aaf4dee2d5822e5bcb7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a5e2cce8ac926b2e5d17f27f7ed4c1791ff5ee8529902c0544a389db6a1f625b = $this->env->getExtension("native_profiler");
        $__internal_a5e2cce8ac926b2e5d17f27f7ed4c1791ff5ee8529902c0544a389db6a1f625b->enter($__internal_a5e2cce8ac926b2e5d17f27f7ed4c1791ff5ee8529902c0544a389db6a1f625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e2cce8ac926b2e5d17f27f7ed4c1791ff5ee8529902c0544a389db6a1f625b->leave($__internal_a5e2cce8ac926b2e5d17f27f7ed4c1791ff5ee8529902c0544a389db6a1f625b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e177e23c2d1b06d6722918622539ebbd4861543471d28fa988c8f68bfbfac083 = $this->env->getExtension("native_profiler");
        $__internal_e177e23c2d1b06d6722918622539ebbd4861543471d28fa988c8f68bfbfac083->enter($__internal_e177e23c2d1b06d6722918622539ebbd4861543471d28fa988c8f68bfbfac083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e177e23c2d1b06d6722918622539ebbd4861543471d28fa988c8f68bfbfac083->leave($__internal_e177e23c2d1b06d6722918622539ebbd4861543471d28fa988c8f68bfbfac083_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
