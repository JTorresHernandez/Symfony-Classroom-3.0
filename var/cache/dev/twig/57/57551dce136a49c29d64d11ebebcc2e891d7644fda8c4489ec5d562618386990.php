<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6bf8e6b5c4066c8fd691753cefd8abc41dc4be94f57f648e5b664cfc28576d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_bef7e31c0f89356d22a18e47e613259f11e368521ddd08d9a193e7b5e71b1bf8 = $this->env->getExtension("native_profiler");
        $__internal_bef7e31c0f89356d22a18e47e613259f11e368521ddd08d9a193e7b5e71b1bf8->enter($__internal_bef7e31c0f89356d22a18e47e613259f11e368521ddd08d9a193e7b5e71b1bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef7e31c0f89356d22a18e47e613259f11e368521ddd08d9a193e7b5e71b1bf8->leave($__internal_bef7e31c0f89356d22a18e47e613259f11e368521ddd08d9a193e7b5e71b1bf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12f3874e09cafae2b3fd2655894286b11ec08d68fd20720e8eb0d5f7bedc971e = $this->env->getExtension("native_profiler");
        $__internal_12f3874e09cafae2b3fd2655894286b11ec08d68fd20720e8eb0d5f7bedc971e->enter($__internal_12f3874e09cafae2b3fd2655894286b11ec08d68fd20720e8eb0d5f7bedc971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_12f3874e09cafae2b3fd2655894286b11ec08d68fd20720e8eb0d5f7bedc971e->leave($__internal_12f3874e09cafae2b3fd2655894286b11ec08d68fd20720e8eb0d5f7bedc971e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
