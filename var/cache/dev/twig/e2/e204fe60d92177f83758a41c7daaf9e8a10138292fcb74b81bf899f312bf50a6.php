<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
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
        $__internal_ddf2f92352ae4cb1a2d0271e85f04fe885d67e4e474e99d3b2cd4a29e133d057 = $this->env->getExtension("native_profiler");
        $__internal_ddf2f92352ae4cb1a2d0271e85f04fe885d67e4e474e99d3b2cd4a29e133d057->enter($__internal_ddf2f92352ae4cb1a2d0271e85f04fe885d67e4e474e99d3b2cd4a29e133d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf2f92352ae4cb1a2d0271e85f04fe885d67e4e474e99d3b2cd4a29e133d057->leave($__internal_ddf2f92352ae4cb1a2d0271e85f04fe885d67e4e474e99d3b2cd4a29e133d057_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4d556cfc8dadd839a82a16944b758ee6f23de34b486bc71dfe24f5d3c4e84de = $this->env->getExtension("native_profiler");
        $__internal_e4d556cfc8dadd839a82a16944b758ee6f23de34b486bc71dfe24f5d3c4e84de->enter($__internal_e4d556cfc8dadd839a82a16944b758ee6f23de34b486bc71dfe24f5d3c4e84de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e4d556cfc8dadd839a82a16944b758ee6f23de34b486bc71dfe24f5d3c4e84de->leave($__internal_e4d556cfc8dadd839a82a16944b758ee6f23de34b486bc71dfe24f5d3c4e84de_prof);

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
