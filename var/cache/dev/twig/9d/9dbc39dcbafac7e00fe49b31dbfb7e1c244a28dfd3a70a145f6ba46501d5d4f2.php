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
        $__internal_17213c399a8e9403cf928c2a666ecf9cf7eacd02f6fb60c284ba2b40e3ee003f = $this->env->getExtension("native_profiler");
        $__internal_17213c399a8e9403cf928c2a666ecf9cf7eacd02f6fb60c284ba2b40e3ee003f->enter($__internal_17213c399a8e9403cf928c2a666ecf9cf7eacd02f6fb60c284ba2b40e3ee003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17213c399a8e9403cf928c2a666ecf9cf7eacd02f6fb60c284ba2b40e3ee003f->leave($__internal_17213c399a8e9403cf928c2a666ecf9cf7eacd02f6fb60c284ba2b40e3ee003f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1cb2c7475eeb6a3e829ca8f1c84a6d8e93cecde6f5a2f491e0cffd95bcef0e2 = $this->env->getExtension("native_profiler");
        $__internal_b1cb2c7475eeb6a3e829ca8f1c84a6d8e93cecde6f5a2f491e0cffd95bcef0e2->enter($__internal_b1cb2c7475eeb6a3e829ca8f1c84a6d8e93cecde6f5a2f491e0cffd95bcef0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_b1cb2c7475eeb6a3e829ca8f1c84a6d8e93cecde6f5a2f491e0cffd95bcef0e2->leave($__internal_b1cb2c7475eeb6a3e829ca8f1c84a6d8e93cecde6f5a2f491e0cffd95bcef0e2_prof);

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
