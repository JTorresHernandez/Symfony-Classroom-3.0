<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_98d7419cc986617ba80337628921ddbd5383ed568112d8a4defee8129f0ff8d4 extends Twig_Template
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
        $__internal_5923abb56870f8ec3b61475d55a36f4f0d78031b84958046e30ac956158b170a = $this->env->getExtension("native_profiler");
        $__internal_5923abb56870f8ec3b61475d55a36f4f0d78031b84958046e30ac956158b170a->enter($__internal_5923abb56870f8ec3b61475d55a36f4f0d78031b84958046e30ac956158b170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5923abb56870f8ec3b61475d55a36f4f0d78031b84958046e30ac956158b170a->leave($__internal_5923abb56870f8ec3b61475d55a36f4f0d78031b84958046e30ac956158b170a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aa341d535139ed8b3f966b30d62333a1108c461b68815f1776d66956cd2bcc2 = $this->env->getExtension("native_profiler");
        $__internal_2aa341d535139ed8b3f966b30d62333a1108c461b68815f1776d66956cd2bcc2->enter($__internal_2aa341d535139ed8b3f966b30d62333a1108c461b68815f1776d66956cd2bcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2aa341d535139ed8b3f966b30d62333a1108c461b68815f1776d66956cd2bcc2->leave($__internal_2aa341d535139ed8b3f966b30d62333a1108c461b68815f1776d66956cd2bcc2_prof);

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
