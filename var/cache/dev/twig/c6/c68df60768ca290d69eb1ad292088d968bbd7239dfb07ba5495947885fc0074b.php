<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_cb69bd1b04c7a63c90487bbc2264ad43a58567032ac7ed9a02a70a71aa9de975 extends Twig_Template
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
        $__internal_2dd5d3af70139a24ca475591d9209bf706400c0d6f11e5590c10798d63f3f2c7 = $this->env->getExtension("native_profiler");
        $__internal_2dd5d3af70139a24ca475591d9209bf706400c0d6f11e5590c10798d63f3f2c7->enter($__internal_2dd5d3af70139a24ca475591d9209bf706400c0d6f11e5590c10798d63f3f2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd5d3af70139a24ca475591d9209bf706400c0d6f11e5590c10798d63f3f2c7->leave($__internal_2dd5d3af70139a24ca475591d9209bf706400c0d6f11e5590c10798d63f3f2c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ae39eec3fb89f1e5eb49254d1ae7330f360970e28ba2a00fd6ac16d16ad4f50 = $this->env->getExtension("native_profiler");
        $__internal_5ae39eec3fb89f1e5eb49254d1ae7330f360970e28ba2a00fd6ac16d16ad4f50->enter($__internal_5ae39eec3fb89f1e5eb49254d1ae7330f360970e28ba2a00fd6ac16d16ad4f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5ae39eec3fb89f1e5eb49254d1ae7330f360970e28ba2a00fd6ac16d16ad4f50->leave($__internal_5ae39eec3fb89f1e5eb49254d1ae7330f360970e28ba2a00fd6ac16d16ad4f50_prof);

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
