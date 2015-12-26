<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_17f970017985daab7ea4563415e373d966f739961b0e3e47ed2e3409e78c9c86 extends Twig_Template
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
        $__internal_7a8e32a1d2e965b0d11ecf3ab3f521c5089d80a1753e80633d7c3e437b5bfe75 = $this->env->getExtension("native_profiler");
        $__internal_7a8e32a1d2e965b0d11ecf3ab3f521c5089d80a1753e80633d7c3e437b5bfe75->enter($__internal_7a8e32a1d2e965b0d11ecf3ab3f521c5089d80a1753e80633d7c3e437b5bfe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8e32a1d2e965b0d11ecf3ab3f521c5089d80a1753e80633d7c3e437b5bfe75->leave($__internal_7a8e32a1d2e965b0d11ecf3ab3f521c5089d80a1753e80633d7c3e437b5bfe75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec9576e34bc2e4fbcc0a21e5a70e2aada83725d8cf0823e9f0618e7a88b35186 = $this->env->getExtension("native_profiler");
        $__internal_ec9576e34bc2e4fbcc0a21e5a70e2aada83725d8cf0823e9f0618e7a88b35186->enter($__internal_ec9576e34bc2e4fbcc0a21e5a70e2aada83725d8cf0823e9f0618e7a88b35186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ec9576e34bc2e4fbcc0a21e5a70e2aada83725d8cf0823e9f0618e7a88b35186->leave($__internal_ec9576e34bc2e4fbcc0a21e5a70e2aada83725d8cf0823e9f0618e7a88b35186_prof);

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
