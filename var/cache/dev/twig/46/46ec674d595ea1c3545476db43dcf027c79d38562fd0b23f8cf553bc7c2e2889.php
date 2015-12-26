<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_ff3098955af7d4743f7fbcf40d9e4968e1431f08b24a81e286cf04dd02249448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_2325e243df043ed0b2d7bda42d5c1fdaca2242592b32483947e4c89d62614b68 = $this->env->getExtension("native_profiler");
        $__internal_2325e243df043ed0b2d7bda42d5c1fdaca2242592b32483947e4c89d62614b68->enter($__internal_2325e243df043ed0b2d7bda42d5c1fdaca2242592b32483947e4c89d62614b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2325e243df043ed0b2d7bda42d5c1fdaca2242592b32483947e4c89d62614b68->leave($__internal_2325e243df043ed0b2d7bda42d5c1fdaca2242592b32483947e4c89d62614b68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f57b042d3785972163fc88e3fb438b67ad22319bffda96e297ed23e96ef0cbdc = $this->env->getExtension("native_profiler");
        $__internal_f57b042d3785972163fc88e3fb438b67ad22319bffda96e297ed23e96ef0cbdc->enter($__internal_f57b042d3785972163fc88e3fb438b67ad22319bffda96e297ed23e96ef0cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f57b042d3785972163fc88e3fb438b67ad22319bffda96e297ed23e96ef0cbdc->leave($__internal_f57b042d3785972163fc88e3fb438b67ad22319bffda96e297ed23e96ef0cbdc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
