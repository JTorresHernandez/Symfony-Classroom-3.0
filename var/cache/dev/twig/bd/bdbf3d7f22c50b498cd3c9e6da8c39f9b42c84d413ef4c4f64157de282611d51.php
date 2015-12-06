<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_d1e45cba75473a91d76b88513137dbbe542ec255f7579da17784c9e7feed98bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_b68d2bb470542cbb24d28e14a5afccbc7d0c5889be13b5c3e90c81b4e7e39ebc = $this->env->getExtension("native_profiler");
        $__internal_b68d2bb470542cbb24d28e14a5afccbc7d0c5889be13b5c3e90c81b4e7e39ebc->enter($__internal_b68d2bb470542cbb24d28e14a5afccbc7d0c5889be13b5c3e90c81b4e7e39ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68d2bb470542cbb24d28e14a5afccbc7d0c5889be13b5c3e90c81b4e7e39ebc->leave($__internal_b68d2bb470542cbb24d28e14a5afccbc7d0c5889be13b5c3e90c81b4e7e39ebc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d45d294e57eefe81a8e9caab77b7c47c1d4b5adbc8e883f585937f227be862b = $this->env->getExtension("native_profiler");
        $__internal_4d45d294e57eefe81a8e9caab77b7c47c1d4b5adbc8e883f585937f227be862b->enter($__internal_4d45d294e57eefe81a8e9caab77b7c47c1d4b5adbc8e883f585937f227be862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4d45d294e57eefe81a8e9caab77b7c47c1d4b5adbc8e883f585937f227be862b->leave($__internal_4d45d294e57eefe81a8e9caab77b7c47c1d4b5adbc8e883f585937f227be862b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
