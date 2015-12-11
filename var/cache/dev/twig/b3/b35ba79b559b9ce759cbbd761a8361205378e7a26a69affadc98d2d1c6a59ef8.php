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
        $__internal_abf6e30f3be67796a8417722e3cbefc97d7486dd56a422cb686ba030e7934129 = $this->env->getExtension("native_profiler");
        $__internal_abf6e30f3be67796a8417722e3cbefc97d7486dd56a422cb686ba030e7934129->enter($__internal_abf6e30f3be67796a8417722e3cbefc97d7486dd56a422cb686ba030e7934129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf6e30f3be67796a8417722e3cbefc97d7486dd56a422cb686ba030e7934129->leave($__internal_abf6e30f3be67796a8417722e3cbefc97d7486dd56a422cb686ba030e7934129_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d4fa9b054fbd93a96899e58d239b6223eaab5239d01487c4f8f77682af9ff8c = $this->env->getExtension("native_profiler");
        $__internal_5d4fa9b054fbd93a96899e58d239b6223eaab5239d01487c4f8f77682af9ff8c->enter($__internal_5d4fa9b054fbd93a96899e58d239b6223eaab5239d01487c4f8f77682af9ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5d4fa9b054fbd93a96899e58d239b6223eaab5239d01487c4f8f77682af9ff8c->leave($__internal_5d4fa9b054fbd93a96899e58d239b6223eaab5239d01487c4f8f77682af9ff8c_prof);

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
