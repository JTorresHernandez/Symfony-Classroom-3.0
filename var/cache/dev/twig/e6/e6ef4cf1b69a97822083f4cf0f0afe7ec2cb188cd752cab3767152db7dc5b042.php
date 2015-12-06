<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bbc573819b1d1824a53586a3f01a662d870d2e7a9fb31eb73158d89a38f43fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c474b70768a9f91e06e5d3e3f9456b4d205064d99cc6a8a24226cfc0c2b57c02 = $this->env->getExtension("native_profiler");
        $__internal_c474b70768a9f91e06e5d3e3f9456b4d205064d99cc6a8a24226cfc0c2b57c02->enter($__internal_c474b70768a9f91e06e5d3e3f9456b4d205064d99cc6a8a24226cfc0c2b57c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c474b70768a9f91e06e5d3e3f9456b4d205064d99cc6a8a24226cfc0c2b57c02->leave($__internal_c474b70768a9f91e06e5d3e3f9456b4d205064d99cc6a8a24226cfc0c2b57c02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ab86f58aceaba5033ed46cf3f00a266e8cc4df6ccb9ee69ee9bc51340a04ac8 = $this->env->getExtension("native_profiler");
        $__internal_7ab86f58aceaba5033ed46cf3f00a266e8cc4df6ccb9ee69ee9bc51340a04ac8->enter($__internal_7ab86f58aceaba5033ed46cf3f00a266e8cc4df6ccb9ee69ee9bc51340a04ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7ab86f58aceaba5033ed46cf3f00a266e8cc4df6ccb9ee69ee9bc51340a04ac8->leave($__internal_7ab86f58aceaba5033ed46cf3f00a266e8cc4df6ccb9ee69ee9bc51340a04ac8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
