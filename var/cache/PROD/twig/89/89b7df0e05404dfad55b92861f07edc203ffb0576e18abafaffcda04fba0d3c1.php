<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_e912b9c58449656a4a7036528730ff1b1ab394e3e65d1d089ba9dda401dd4796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_64537532d28ad301d8daf4f6c196f01375f6d46b97c78427571d0a1bbfe63a9c = $this->env->getExtension("native_profiler");
        $__internal_64537532d28ad301d8daf4f6c196f01375f6d46b97c78427571d0a1bbfe63a9c->enter($__internal_64537532d28ad301d8daf4f6c196f01375f6d46b97c78427571d0a1bbfe63a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64537532d28ad301d8daf4f6c196f01375f6d46b97c78427571d0a1bbfe63a9c->leave($__internal_64537532d28ad301d8daf4f6c196f01375f6d46b97c78427571d0a1bbfe63a9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7230b16777c248d30c0b1d952699d98e7512d709019897bbb648f768892b2dc0 = $this->env->getExtension("native_profiler");
        $__internal_7230b16777c248d30c0b1d952699d98e7512d709019897bbb648f768892b2dc0->enter($__internal_7230b16777c248d30c0b1d952699d98e7512d709019897bbb648f768892b2dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7230b16777c248d30c0b1d952699d98e7512d709019897bbb648f768892b2dc0->leave($__internal_7230b16777c248d30c0b1d952699d98e7512d709019897bbb648f768892b2dc0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
