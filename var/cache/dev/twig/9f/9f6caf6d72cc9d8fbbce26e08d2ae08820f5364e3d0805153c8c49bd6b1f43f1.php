<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b26d616c91b49f53be175150a0c56d42ba2557a408c0a503c515b62add43e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d8bc93f865b6dd0c799085089b80883d0e82da4b5d345fb7fc2aa95f8bb95130 = $this->env->getExtension("native_profiler");
        $__internal_d8bc93f865b6dd0c799085089b80883d0e82da4b5d345fb7fc2aa95f8bb95130->enter($__internal_d8bc93f865b6dd0c799085089b80883d0e82da4b5d345fb7fc2aa95f8bb95130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bc93f865b6dd0c799085089b80883d0e82da4b5d345fb7fc2aa95f8bb95130->leave($__internal_d8bc93f865b6dd0c799085089b80883d0e82da4b5d345fb7fc2aa95f8bb95130_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0c0873196ff3e8ffe9e8dd1e628cc6dc0799fc35579208c7e56199ca0e4ff7e = $this->env->getExtension("native_profiler");
        $__internal_b0c0873196ff3e8ffe9e8dd1e628cc6dc0799fc35579208c7e56199ca0e4ff7e->enter($__internal_b0c0873196ff3e8ffe9e8dd1e628cc6dc0799fc35579208c7e56199ca0e4ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b0c0873196ff3e8ffe9e8dd1e628cc6dc0799fc35579208c7e56199ca0e4ff7e->leave($__internal_b0c0873196ff3e8ffe9e8dd1e628cc6dc0799fc35579208c7e56199ca0e4ff7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
