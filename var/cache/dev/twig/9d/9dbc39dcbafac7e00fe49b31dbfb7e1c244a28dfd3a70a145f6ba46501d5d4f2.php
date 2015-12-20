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
        $__internal_576f8f11e562b19ac5fe2b081b86256948df98f673a4d37d113090da2c54def6 = $this->env->getExtension("native_profiler");
        $__internal_576f8f11e562b19ac5fe2b081b86256948df98f673a4d37d113090da2c54def6->enter($__internal_576f8f11e562b19ac5fe2b081b86256948df98f673a4d37d113090da2c54def6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576f8f11e562b19ac5fe2b081b86256948df98f673a4d37d113090da2c54def6->leave($__internal_576f8f11e562b19ac5fe2b081b86256948df98f673a4d37d113090da2c54def6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3da789bf8113f9c913eb2a04c9fa1a0682b4bc63f7a53966e738d6b3b331c8c = $this->env->getExtension("native_profiler");
        $__internal_a3da789bf8113f9c913eb2a04c9fa1a0682b4bc63f7a53966e738d6b3b331c8c->enter($__internal_a3da789bf8113f9c913eb2a04c9fa1a0682b4bc63f7a53966e738d6b3b331c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a3da789bf8113f9c913eb2a04c9fa1a0682b4bc63f7a53966e738d6b3b331c8c->leave($__internal_a3da789bf8113f9c913eb2a04c9fa1a0682b4bc63f7a53966e738d6b3b331c8c_prof);

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
