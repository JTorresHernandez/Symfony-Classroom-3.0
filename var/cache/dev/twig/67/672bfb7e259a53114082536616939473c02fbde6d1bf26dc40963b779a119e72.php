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
        $__internal_fee7422ad42701265c4a5ad38fcd86b729f7cf0118aaf44a3f66bb675834a5d7 = $this->env->getExtension("native_profiler");
        $__internal_fee7422ad42701265c4a5ad38fcd86b729f7cf0118aaf44a3f66bb675834a5d7->enter($__internal_fee7422ad42701265c4a5ad38fcd86b729f7cf0118aaf44a3f66bb675834a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee7422ad42701265c4a5ad38fcd86b729f7cf0118aaf44a3f66bb675834a5d7->leave($__internal_fee7422ad42701265c4a5ad38fcd86b729f7cf0118aaf44a3f66bb675834a5d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d3bf886705409a8efeed97259cbbd1b4017bb984c407c88577ed6506a9afe37 = $this->env->getExtension("native_profiler");
        $__internal_1d3bf886705409a8efeed97259cbbd1b4017bb984c407c88577ed6506a9afe37->enter($__internal_1d3bf886705409a8efeed97259cbbd1b4017bb984c407c88577ed6506a9afe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_1d3bf886705409a8efeed97259cbbd1b4017bb984c407c88577ed6506a9afe37->leave($__internal_1d3bf886705409a8efeed97259cbbd1b4017bb984c407c88577ed6506a9afe37_prof);

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
