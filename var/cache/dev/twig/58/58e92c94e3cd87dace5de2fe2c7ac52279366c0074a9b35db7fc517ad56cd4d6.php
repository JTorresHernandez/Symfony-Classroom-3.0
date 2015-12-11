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
        $__internal_1e0f657b706bdca06d267825a80e5742253707fa7d08aad2c1a5773a4d257d7d = $this->env->getExtension("native_profiler");
        $__internal_1e0f657b706bdca06d267825a80e5742253707fa7d08aad2c1a5773a4d257d7d->enter($__internal_1e0f657b706bdca06d267825a80e5742253707fa7d08aad2c1a5773a4d257d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e0f657b706bdca06d267825a80e5742253707fa7d08aad2c1a5773a4d257d7d->leave($__internal_1e0f657b706bdca06d267825a80e5742253707fa7d08aad2c1a5773a4d257d7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cc56302308f0effe4c6758601b2920aee8f52ab9d5ae0e3725dff0b5acd4607 = $this->env->getExtension("native_profiler");
        $__internal_9cc56302308f0effe4c6758601b2920aee8f52ab9d5ae0e3725dff0b5acd4607->enter($__internal_9cc56302308f0effe4c6758601b2920aee8f52ab9d5ae0e3725dff0b5acd4607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9cc56302308f0effe4c6758601b2920aee8f52ab9d5ae0e3725dff0b5acd4607->leave($__internal_9cc56302308f0effe4c6758601b2920aee8f52ab9d5ae0e3725dff0b5acd4607_prof);

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
