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
        $__internal_2c18dfc4a2d69f3363ccd76b025d6af2d0d5ea6605e0cb5d6e26a25860a6b133 = $this->env->getExtension("native_profiler");
        $__internal_2c18dfc4a2d69f3363ccd76b025d6af2d0d5ea6605e0cb5d6e26a25860a6b133->enter($__internal_2c18dfc4a2d69f3363ccd76b025d6af2d0d5ea6605e0cb5d6e26a25860a6b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c18dfc4a2d69f3363ccd76b025d6af2d0d5ea6605e0cb5d6e26a25860a6b133->leave($__internal_2c18dfc4a2d69f3363ccd76b025d6af2d0d5ea6605e0cb5d6e26a25860a6b133_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64357aad76fd2a5261c53457667119148a5fb8f606e523a8ffd56aa0bed7bce5 = $this->env->getExtension("native_profiler");
        $__internal_64357aad76fd2a5261c53457667119148a5fb8f606e523a8ffd56aa0bed7bce5->enter($__internal_64357aad76fd2a5261c53457667119148a5fb8f606e523a8ffd56aa0bed7bce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_64357aad76fd2a5261c53457667119148a5fb8f606e523a8ffd56aa0bed7bce5->leave($__internal_64357aad76fd2a5261c53457667119148a5fb8f606e523a8ffd56aa0bed7bce5_prof);

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
