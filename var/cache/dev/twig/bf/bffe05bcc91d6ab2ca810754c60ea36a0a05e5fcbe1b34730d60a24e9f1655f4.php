<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9c781432a7688a695c3ad2f62a7bdfed798e5a372b44b2bd67f40628744d5a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fcc65caa2723e5760c415071cdec26dd37b1e4bb8c11a470e4f7fe5208b941f4 = $this->env->getExtension("native_profiler");
        $__internal_fcc65caa2723e5760c415071cdec26dd37b1e4bb8c11a470e4f7fe5208b941f4->enter($__internal_fcc65caa2723e5760c415071cdec26dd37b1e4bb8c11a470e4f7fe5208b941f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc65caa2723e5760c415071cdec26dd37b1e4bb8c11a470e4f7fe5208b941f4->leave($__internal_fcc65caa2723e5760c415071cdec26dd37b1e4bb8c11a470e4f7fe5208b941f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7593d52a2e4f3a3973a1ac07463ea96a694877888da1a79411e7310f7a6106ce = $this->env->getExtension("native_profiler");
        $__internal_7593d52a2e4f3a3973a1ac07463ea96a694877888da1a79411e7310f7a6106ce->enter($__internal_7593d52a2e4f3a3973a1ac07463ea96a694877888da1a79411e7310f7a6106ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_7593d52a2e4f3a3973a1ac07463ea96a694877888da1a79411e7310f7a6106ce->leave($__internal_7593d52a2e4f3a3973a1ac07463ea96a694877888da1a79411e7310f7a6106ce_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
