<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_5c40ed6cda8be52942f926f317ccfd73f504eea525e04433a851c9f0260873a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c431aa400690206359cc6a800a7f987ba854cb1b28f12333956f3828ed726d8b = $this->env->getExtension("native_profiler");
        $__internal_c431aa400690206359cc6a800a7f987ba854cb1b28f12333956f3828ed726d8b->enter($__internal_c431aa400690206359cc6a800a7f987ba854cb1b28f12333956f3828ed726d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c431aa400690206359cc6a800a7f987ba854cb1b28f12333956f3828ed726d8b->leave($__internal_c431aa400690206359cc6a800a7f987ba854cb1b28f12333956f3828ed726d8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7e6d93ca6addb06a08a1134cf6d0dba956da82dc4364b64babb54fe13b9e069 = $this->env->getExtension("native_profiler");
        $__internal_e7e6d93ca6addb06a08a1134cf6d0dba956da82dc4364b64babb54fe13b9e069->enter($__internal_e7e6d93ca6addb06a08a1134cf6d0dba956da82dc4364b64babb54fe13b9e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e7e6d93ca6addb06a08a1134cf6d0dba956da82dc4364b64babb54fe13b9e069->leave($__internal_e7e6d93ca6addb06a08a1134cf6d0dba956da82dc4364b64babb54fe13b9e069_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
