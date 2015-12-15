<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2957ace8d98f4a4b9e2c3998de4e918e3fcb82aae448c0cacedd1017d750d161 = $this->env->getExtension("native_profiler");
        $__internal_2957ace8d98f4a4b9e2c3998de4e918e3fcb82aae448c0cacedd1017d750d161->enter($__internal_2957ace8d98f4a4b9e2c3998de4e918e3fcb82aae448c0cacedd1017d750d161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2957ace8d98f4a4b9e2c3998de4e918e3fcb82aae448c0cacedd1017d750d161->leave($__internal_2957ace8d98f4a4b9e2c3998de4e918e3fcb82aae448c0cacedd1017d750d161_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6f7d138d482900a7518f50f09c8832154f512281f9cb376861d06454618fe9a = $this->env->getExtension("native_profiler");
        $__internal_c6f7d138d482900a7518f50f09c8832154f512281f9cb376861d06454618fe9a->enter($__internal_c6f7d138d482900a7518f50f09c8832154f512281f9cb376861d06454618fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6f7d138d482900a7518f50f09c8832154f512281f9cb376861d06454618fe9a->leave($__internal_c6f7d138d482900a7518f50f09c8832154f512281f9cb376861d06454618fe9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
