<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1e7cc4e8bd0cebd530501551618beecd25adcec4fb0699973ab205435642d83b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_bb94271c8e9c4b80ca1bf913cacc61259c6db72ff2e86d3fd79cafe4d83e2879 = $this->env->getExtension("native_profiler");
        $__internal_bb94271c8e9c4b80ca1bf913cacc61259c6db72ff2e86d3fd79cafe4d83e2879->enter($__internal_bb94271c8e9c4b80ca1bf913cacc61259c6db72ff2e86d3fd79cafe4d83e2879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb94271c8e9c4b80ca1bf913cacc61259c6db72ff2e86d3fd79cafe4d83e2879->leave($__internal_bb94271c8e9c4b80ca1bf913cacc61259c6db72ff2e86d3fd79cafe4d83e2879_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac48dcd4f6a4c2c66234b6687eb37f54ea8c3158d8e44be44b1a208fb7ffede7 = $this->env->getExtension("native_profiler");
        $__internal_ac48dcd4f6a4c2c66234b6687eb37f54ea8c3158d8e44be44b1a208fb7ffede7->enter($__internal_ac48dcd4f6a4c2c66234b6687eb37f54ea8c3158d8e44be44b1a208fb7ffede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ac48dcd4f6a4c2c66234b6687eb37f54ea8c3158d8e44be44b1a208fb7ffede7->leave($__internal_ac48dcd4f6a4c2c66234b6687eb37f54ea8c3158d8e44be44b1a208fb7ffede7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
