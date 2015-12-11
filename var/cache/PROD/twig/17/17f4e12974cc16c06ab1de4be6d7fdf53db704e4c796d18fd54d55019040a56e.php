<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4c5855db048537dab9299685527087f9ccd825cdc1133e30d4cbfe12d04059f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_c24710b21c40f8f6c435105f6ebf4c97c79730f6d5023bdad712f521fa2a87eb = $this->env->getExtension("native_profiler");
        $__internal_c24710b21c40f8f6c435105f6ebf4c97c79730f6d5023bdad712f521fa2a87eb->enter($__internal_c24710b21c40f8f6c435105f6ebf4c97c79730f6d5023bdad712f521fa2a87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24710b21c40f8f6c435105f6ebf4c97c79730f6d5023bdad712f521fa2a87eb->leave($__internal_c24710b21c40f8f6c435105f6ebf4c97c79730f6d5023bdad712f521fa2a87eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d597b05d2a5e6b77527d980710d895d62359adafc1f0f39f72e424f7a213c21e = $this->env->getExtension("native_profiler");
        $__internal_d597b05d2a5e6b77527d980710d895d62359adafc1f0f39f72e424f7a213c21e->enter($__internal_d597b05d2a5e6b77527d980710d895d62359adafc1f0f39f72e424f7a213c21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d597b05d2a5e6b77527d980710d895d62359adafc1f0f39f72e424f7a213c21e->leave($__internal_d597b05d2a5e6b77527d980710d895d62359adafc1f0f39f72e424f7a213c21e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
