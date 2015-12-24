<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_1a101f0d88c116c6b42cdf61cc63df2fd3874cc0cdf7eaa864f928bd74727968 = $this->env->getExtension("native_profiler");
        $__internal_1a101f0d88c116c6b42cdf61cc63df2fd3874cc0cdf7eaa864f928bd74727968->enter($__internal_1a101f0d88c116c6b42cdf61cc63df2fd3874cc0cdf7eaa864f928bd74727968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a101f0d88c116c6b42cdf61cc63df2fd3874cc0cdf7eaa864f928bd74727968->leave($__internal_1a101f0d88c116c6b42cdf61cc63df2fd3874cc0cdf7eaa864f928bd74727968_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d7433f989fd3a98b7c744ffcdc86a2579e6c4213d71ea71a353ce14c7725598 = $this->env->getExtension("native_profiler");
        $__internal_7d7433f989fd3a98b7c744ffcdc86a2579e6c4213d71ea71a353ce14c7725598->enter($__internal_7d7433f989fd3a98b7c744ffcdc86a2579e6c4213d71ea71a353ce14c7725598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7d7433f989fd3a98b7c744ffcdc86a2579e6c4213d71ea71a353ce14c7725598->leave($__internal_7d7433f989fd3a98b7c744ffcdc86a2579e6c4213d71ea71a353ce14c7725598_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
