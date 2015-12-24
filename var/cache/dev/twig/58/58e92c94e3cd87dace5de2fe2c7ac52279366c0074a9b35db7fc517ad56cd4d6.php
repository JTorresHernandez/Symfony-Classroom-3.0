<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_efe377e7bbe0db56ce5d706f90f232131762ea5ef283bafd46f8b782e866c1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b164efa87c686aa6e87f2e791f9534dfd3c158fb630730d948052a394bea3936 = $this->env->getExtension("native_profiler");
        $__internal_b164efa87c686aa6e87f2e791f9534dfd3c158fb630730d948052a394bea3936->enter($__internal_b164efa87c686aa6e87f2e791f9534dfd3c158fb630730d948052a394bea3936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b164efa87c686aa6e87f2e791f9534dfd3c158fb630730d948052a394bea3936->leave($__internal_b164efa87c686aa6e87f2e791f9534dfd3c158fb630730d948052a394bea3936_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_926328ba3375e4ea0315f016582fb4332782848cb77c6d361f500f2c2133f340 = $this->env->getExtension("native_profiler");
        $__internal_926328ba3375e4ea0315f016582fb4332782848cb77c6d361f500f2c2133f340->enter($__internal_926328ba3375e4ea0315f016582fb4332782848cb77c6d361f500f2c2133f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_926328ba3375e4ea0315f016582fb4332782848cb77c6d361f500f2c2133f340->leave($__internal_926328ba3375e4ea0315f016582fb4332782848cb77c6d361f500f2c2133f340_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
