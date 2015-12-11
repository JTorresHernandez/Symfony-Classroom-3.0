<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_99189fb50ba6cf8c3a1d6e682ab151f91537a783c899bd3a205874ab8d3e0dca = $this->env->getExtension("native_profiler");
        $__internal_99189fb50ba6cf8c3a1d6e682ab151f91537a783c899bd3a205874ab8d3e0dca->enter($__internal_99189fb50ba6cf8c3a1d6e682ab151f91537a783c899bd3a205874ab8d3e0dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99189fb50ba6cf8c3a1d6e682ab151f91537a783c899bd3a205874ab8d3e0dca->leave($__internal_99189fb50ba6cf8c3a1d6e682ab151f91537a783c899bd3a205874ab8d3e0dca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6b8cccea652348ada77d577f78117b7320e75e04cdef5c5117cc8ec1f62581c = $this->env->getExtension("native_profiler");
        $__internal_c6b8cccea652348ada77d577f78117b7320e75e04cdef5c5117cc8ec1f62581c->enter($__internal_c6b8cccea652348ada77d577f78117b7320e75e04cdef5c5117cc8ec1f62581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6b8cccea652348ada77d577f78117b7320e75e04cdef5c5117cc8ec1f62581c->leave($__internal_c6b8cccea652348ada77d577f78117b7320e75e04cdef5c5117cc8ec1f62581c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
