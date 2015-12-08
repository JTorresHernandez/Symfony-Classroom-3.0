<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_adda245088750acff59221f7a7126210cfde5678f30e9ab7b3c2b73422f0e0a8 extends Twig_Template
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
        $__internal_f18b19a09d979734874d4b616c139385215514fc42755ca1a6f8d3e48eb96b89 = $this->env->getExtension("native_profiler");
        $__internal_f18b19a09d979734874d4b616c139385215514fc42755ca1a6f8d3e48eb96b89->enter($__internal_f18b19a09d979734874d4b616c139385215514fc42755ca1a6f8d3e48eb96b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18b19a09d979734874d4b616c139385215514fc42755ca1a6f8d3e48eb96b89->leave($__internal_f18b19a09d979734874d4b616c139385215514fc42755ca1a6f8d3e48eb96b89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_417c09a07851f3fd96aef38aa8830c3695110eb5cdb5b98a4f9701a657914efa = $this->env->getExtension("native_profiler");
        $__internal_417c09a07851f3fd96aef38aa8830c3695110eb5cdb5b98a4f9701a657914efa->enter($__internal_417c09a07851f3fd96aef38aa8830c3695110eb5cdb5b98a4f9701a657914efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_417c09a07851f3fd96aef38aa8830c3695110eb5cdb5b98a4f9701a657914efa->leave($__internal_417c09a07851f3fd96aef38aa8830c3695110eb5cdb5b98a4f9701a657914efa_prof);

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
