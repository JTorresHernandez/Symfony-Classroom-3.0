<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9ac1c8b3336c429d47127b295991c6eb47f6ee0a5333327314fc5d89a6fb8cce extends Twig_Template
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
        $__internal_e7557583d62c2ac481defdb63bd5ece2a3620c62fa33829a5c89157196fa40e7 = $this->env->getExtension("native_profiler");
        $__internal_e7557583d62c2ac481defdb63bd5ece2a3620c62fa33829a5c89157196fa40e7->enter($__internal_e7557583d62c2ac481defdb63bd5ece2a3620c62fa33829a5c89157196fa40e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7557583d62c2ac481defdb63bd5ece2a3620c62fa33829a5c89157196fa40e7->leave($__internal_e7557583d62c2ac481defdb63bd5ece2a3620c62fa33829a5c89157196fa40e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a28d2fa01869f10997d87cb140da7f02ce257cbca3633b9ee082a0b710edc65 = $this->env->getExtension("native_profiler");
        $__internal_4a28d2fa01869f10997d87cb140da7f02ce257cbca3633b9ee082a0b710edc65->enter($__internal_4a28d2fa01869f10997d87cb140da7f02ce257cbca3633b9ee082a0b710edc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4a28d2fa01869f10997d87cb140da7f02ce257cbca3633b9ee082a0b710edc65->leave($__internal_4a28d2fa01869f10997d87cb140da7f02ce257cbca3633b9ee082a0b710edc65_prof);

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
