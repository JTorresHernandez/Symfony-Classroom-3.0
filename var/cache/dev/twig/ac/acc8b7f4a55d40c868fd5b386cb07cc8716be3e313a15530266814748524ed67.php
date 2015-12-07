<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_5e5dee62fc22f835484d0c5408d75dc3bee4b104dedd4234c08f40c65639ddc6 extends Twig_Template
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
        $__internal_1333dc1e90523cc6dbfe45c8b44c5340bc62fdd516647872f7a7a29381026d90 = $this->env->getExtension("native_profiler");
        $__internal_1333dc1e90523cc6dbfe45c8b44c5340bc62fdd516647872f7a7a29381026d90->enter($__internal_1333dc1e90523cc6dbfe45c8b44c5340bc62fdd516647872f7a7a29381026d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1333dc1e90523cc6dbfe45c8b44c5340bc62fdd516647872f7a7a29381026d90->leave($__internal_1333dc1e90523cc6dbfe45c8b44c5340bc62fdd516647872f7a7a29381026d90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c568d79f944756836fa33ec089e69d6223be3f1686182292cff105f9777c4aa4 = $this->env->getExtension("native_profiler");
        $__internal_c568d79f944756836fa33ec089e69d6223be3f1686182292cff105f9777c4aa4->enter($__internal_c568d79f944756836fa33ec089e69d6223be3f1686182292cff105f9777c4aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c568d79f944756836fa33ec089e69d6223be3f1686182292cff105f9777c4aa4->leave($__internal_c568d79f944756836fa33ec089e69d6223be3f1686182292cff105f9777c4aa4_prof);

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
