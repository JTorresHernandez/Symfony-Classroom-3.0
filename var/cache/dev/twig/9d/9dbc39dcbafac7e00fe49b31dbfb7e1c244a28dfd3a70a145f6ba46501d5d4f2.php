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
        $__internal_5117035cd5411affc0926246ec795cd20b8dbf936600070c10a4cf2ceb3a43a2 = $this->env->getExtension("native_profiler");
        $__internal_5117035cd5411affc0926246ec795cd20b8dbf936600070c10a4cf2ceb3a43a2->enter($__internal_5117035cd5411affc0926246ec795cd20b8dbf936600070c10a4cf2ceb3a43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5117035cd5411affc0926246ec795cd20b8dbf936600070c10a4cf2ceb3a43a2->leave($__internal_5117035cd5411affc0926246ec795cd20b8dbf936600070c10a4cf2ceb3a43a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2eb700b2c0fe6a2e363240f850baa558a8dddcf9294cff51f119bbcdafe5165 = $this->env->getExtension("native_profiler");
        $__internal_e2eb700b2c0fe6a2e363240f850baa558a8dddcf9294cff51f119bbcdafe5165->enter($__internal_e2eb700b2c0fe6a2e363240f850baa558a8dddcf9294cff51f119bbcdafe5165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_e2eb700b2c0fe6a2e363240f850baa558a8dddcf9294cff51f119bbcdafe5165->leave($__internal_e2eb700b2c0fe6a2e363240f850baa558a8dddcf9294cff51f119bbcdafe5165_prof);

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
