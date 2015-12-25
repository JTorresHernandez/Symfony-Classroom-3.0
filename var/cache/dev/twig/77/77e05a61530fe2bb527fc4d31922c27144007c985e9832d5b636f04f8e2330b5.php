<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3322a17322d9b37e954455b7d43aa0919e7a9671b8d7d2a7866d814cdc58cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_63811d73444d5f0ac0805fe4da811744814cd1e835e2a961ccc4f2d5bd7f003b = $this->env->getExtension("native_profiler");
        $__internal_63811d73444d5f0ac0805fe4da811744814cd1e835e2a961ccc4f2d5bd7f003b->enter($__internal_63811d73444d5f0ac0805fe4da811744814cd1e835e2a961ccc4f2d5bd7f003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63811d73444d5f0ac0805fe4da811744814cd1e835e2a961ccc4f2d5bd7f003b->leave($__internal_63811d73444d5f0ac0805fe4da811744814cd1e835e2a961ccc4f2d5bd7f003b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d2c2004df13e7c7f7e994ce79acb871dd8c07445d1c1d3545636806ace10e7f = $this->env->getExtension("native_profiler");
        $__internal_4d2c2004df13e7c7f7e994ce79acb871dd8c07445d1c1d3545636806ace10e7f->enter($__internal_4d2c2004df13e7c7f7e994ce79acb871dd8c07445d1c1d3545636806ace10e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4d2c2004df13e7c7f7e994ce79acb871dd8c07445d1c1d3545636806ace10e7f->leave($__internal_4d2c2004df13e7c7f7e994ce79acb871dd8c07445d1c1d3545636806ace10e7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
