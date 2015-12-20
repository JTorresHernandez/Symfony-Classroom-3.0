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
        $__internal_fd4386f87aa0b672e2b6d98abaaacc87726d205b197a97a598b1c9cad78e99fe = $this->env->getExtension("native_profiler");
        $__internal_fd4386f87aa0b672e2b6d98abaaacc87726d205b197a97a598b1c9cad78e99fe->enter($__internal_fd4386f87aa0b672e2b6d98abaaacc87726d205b197a97a598b1c9cad78e99fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4386f87aa0b672e2b6d98abaaacc87726d205b197a97a598b1c9cad78e99fe->leave($__internal_fd4386f87aa0b672e2b6d98abaaacc87726d205b197a97a598b1c9cad78e99fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_948bb73dfc65e259598edbd3a6fad4ba83ee0b41d6dda03d88a50e24904da753 = $this->env->getExtension("native_profiler");
        $__internal_948bb73dfc65e259598edbd3a6fad4ba83ee0b41d6dda03d88a50e24904da753->enter($__internal_948bb73dfc65e259598edbd3a6fad4ba83ee0b41d6dda03d88a50e24904da753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_948bb73dfc65e259598edbd3a6fad4ba83ee0b41d6dda03d88a50e24904da753->leave($__internal_948bb73dfc65e259598edbd3a6fad4ba83ee0b41d6dda03d88a50e24904da753_prof);

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
