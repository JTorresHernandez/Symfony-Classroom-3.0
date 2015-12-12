<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_104b4a0495207ee6fb824ce9af2cc037659c4c02378989a264bdb1396f96069f extends Twig_Template
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
        $__internal_4f23ba48ec9eaaab5569b4221f653b04bb70c59cd67bb3124960761ed12a1cfd = $this->env->getExtension("native_profiler");
        $__internal_4f23ba48ec9eaaab5569b4221f653b04bb70c59cd67bb3124960761ed12a1cfd->enter($__internal_4f23ba48ec9eaaab5569b4221f653b04bb70c59cd67bb3124960761ed12a1cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f23ba48ec9eaaab5569b4221f653b04bb70c59cd67bb3124960761ed12a1cfd->leave($__internal_4f23ba48ec9eaaab5569b4221f653b04bb70c59cd67bb3124960761ed12a1cfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_383bd57682d547413658351a08113981ee052f0e7df395bf0e17be4084694d85 = $this->env->getExtension("native_profiler");
        $__internal_383bd57682d547413658351a08113981ee052f0e7df395bf0e17be4084694d85->enter($__internal_383bd57682d547413658351a08113981ee052f0e7df395bf0e17be4084694d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_383bd57682d547413658351a08113981ee052f0e7df395bf0e17be4084694d85->leave($__internal_383bd57682d547413658351a08113981ee052f0e7df395bf0e17be4084694d85_prof);

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
