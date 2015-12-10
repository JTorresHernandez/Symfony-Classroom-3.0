<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_abad6b9f6b211fa379c36ac15575c4498d8b2ba2578c2fdfbab94e7698b0afb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_1051d777c12695c2ee7a186ce241f2356b1a317543654e1e10ba07ef3bc76cbd = $this->env->getExtension("native_profiler");
        $__internal_1051d777c12695c2ee7a186ce241f2356b1a317543654e1e10ba07ef3bc76cbd->enter($__internal_1051d777c12695c2ee7a186ce241f2356b1a317543654e1e10ba07ef3bc76cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1051d777c12695c2ee7a186ce241f2356b1a317543654e1e10ba07ef3bc76cbd->leave($__internal_1051d777c12695c2ee7a186ce241f2356b1a317543654e1e10ba07ef3bc76cbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33c79ac88c16cf13562642f3398e53405fcfa5f96d6fb6f8e3aac877f524d009 = $this->env->getExtension("native_profiler");
        $__internal_33c79ac88c16cf13562642f3398e53405fcfa5f96d6fb6f8e3aac877f524d009->enter($__internal_33c79ac88c16cf13562642f3398e53405fcfa5f96d6fb6f8e3aac877f524d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_33c79ac88c16cf13562642f3398e53405fcfa5f96d6fb6f8e3aac877f524d009->leave($__internal_33c79ac88c16cf13562642f3398e53405fcfa5f96d6fb6f8e3aac877f524d009_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
