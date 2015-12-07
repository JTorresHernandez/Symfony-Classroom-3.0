<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_80b400d9f8c9e98268033507559a232cf32208092a0c63d1481789d9ee7b2bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c1a9817a66faf2543b8f61c27b5b57f3c79a728b0225c46d1c248f0e1da22856 = $this->env->getExtension("native_profiler");
        $__internal_c1a9817a66faf2543b8f61c27b5b57f3c79a728b0225c46d1c248f0e1da22856->enter($__internal_c1a9817a66faf2543b8f61c27b5b57f3c79a728b0225c46d1c248f0e1da22856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a9817a66faf2543b8f61c27b5b57f3c79a728b0225c46d1c248f0e1da22856->leave($__internal_c1a9817a66faf2543b8f61c27b5b57f3c79a728b0225c46d1c248f0e1da22856_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b167bb67959e840d4f100e73b5f268eb21d3955638892f19c0ada96b6cfda311 = $this->env->getExtension("native_profiler");
        $__internal_b167bb67959e840d4f100e73b5f268eb21d3955638892f19c0ada96b6cfda311->enter($__internal_b167bb67959e840d4f100e73b5f268eb21d3955638892f19c0ada96b6cfda311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b167bb67959e840d4f100e73b5f268eb21d3955638892f19c0ada96b6cfda311->leave($__internal_b167bb67959e840d4f100e73b5f268eb21d3955638892f19c0ada96b6cfda311_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
