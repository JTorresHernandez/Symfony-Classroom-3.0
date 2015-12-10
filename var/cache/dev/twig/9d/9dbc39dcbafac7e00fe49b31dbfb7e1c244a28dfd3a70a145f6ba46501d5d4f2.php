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
        $__internal_e9004d503d5c5ee9cb621df2527675ed6d5fb37d11f7d3527dd36736623de4e8 = $this->env->getExtension("native_profiler");
        $__internal_e9004d503d5c5ee9cb621df2527675ed6d5fb37d11f7d3527dd36736623de4e8->enter($__internal_e9004d503d5c5ee9cb621df2527675ed6d5fb37d11f7d3527dd36736623de4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9004d503d5c5ee9cb621df2527675ed6d5fb37d11f7d3527dd36736623de4e8->leave($__internal_e9004d503d5c5ee9cb621df2527675ed6d5fb37d11f7d3527dd36736623de4e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_305fb9e534794645f04a4386ba5e7e9d2b236424a67cc866bdc6800ab1c540d9 = $this->env->getExtension("native_profiler");
        $__internal_305fb9e534794645f04a4386ba5e7e9d2b236424a67cc866bdc6800ab1c540d9->enter($__internal_305fb9e534794645f04a4386ba5e7e9d2b236424a67cc866bdc6800ab1c540d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_305fb9e534794645f04a4386ba5e7e9d2b236424a67cc866bdc6800ab1c540d9->leave($__internal_305fb9e534794645f04a4386ba5e7e9d2b236424a67cc866bdc6800ab1c540d9_prof);

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
