<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_a4b5abbfb662ab1a59b8d9ef22495ba03a3ae08064ee00a9557d5f65a85a26b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_b1a1c66917355ca854692c621cb3879b5de1d9a6cfef6390dfce64921033e3e6 = $this->env->getExtension("native_profiler");
        $__internal_b1a1c66917355ca854692c621cb3879b5de1d9a6cfef6390dfce64921033e3e6->enter($__internal_b1a1c66917355ca854692c621cb3879b5de1d9a6cfef6390dfce64921033e3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a1c66917355ca854692c621cb3879b5de1d9a6cfef6390dfce64921033e3e6->leave($__internal_b1a1c66917355ca854692c621cb3879b5de1d9a6cfef6390dfce64921033e3e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14b87a413f71a71d0b9025d6b8188b9b2b9fb3dd9a8b0721e0ee9b1413884582 = $this->env->getExtension("native_profiler");
        $__internal_14b87a413f71a71d0b9025d6b8188b9b2b9fb3dd9a8b0721e0ee9b1413884582->enter($__internal_14b87a413f71a71d0b9025d6b8188b9b2b9fb3dd9a8b0721e0ee9b1413884582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_14b87a413f71a71d0b9025d6b8188b9b2b9fb3dd9a8b0721e0ee9b1413884582->leave($__internal_14b87a413f71a71d0b9025d6b8188b9b2b9fb3dd9a8b0721e0ee9b1413884582_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
