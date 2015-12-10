<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_edc956a4bcdd4155f84f40b392b9247a6bdb8c18aa6122dc6683b4fc18661ca7 extends Twig_Template
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
        $__internal_f5016ce98f6022b886f5f9cbfbe5b380f59d5f76dfdd591d214070836d5571ac = $this->env->getExtension("native_profiler");
        $__internal_f5016ce98f6022b886f5f9cbfbe5b380f59d5f76dfdd591d214070836d5571ac->enter($__internal_f5016ce98f6022b886f5f9cbfbe5b380f59d5f76dfdd591d214070836d5571ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5016ce98f6022b886f5f9cbfbe5b380f59d5f76dfdd591d214070836d5571ac->leave($__internal_f5016ce98f6022b886f5f9cbfbe5b380f59d5f76dfdd591d214070836d5571ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cb8aada4fe877c2c6f4d7fd159dbec92724294069a5a088a95509cb9f070524 = $this->env->getExtension("native_profiler");
        $__internal_0cb8aada4fe877c2c6f4d7fd159dbec92724294069a5a088a95509cb9f070524->enter($__internal_0cb8aada4fe877c2c6f4d7fd159dbec92724294069a5a088a95509cb9f070524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0cb8aada4fe877c2c6f4d7fd159dbec92724294069a5a088a95509cb9f070524->leave($__internal_0cb8aada4fe877c2c6f4d7fd159dbec92724294069a5a088a95509cb9f070524_prof);

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
