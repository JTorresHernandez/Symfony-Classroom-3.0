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
        $__internal_05b10b1d86de862fcb428ccca9e6262140bd647d26cc8d7c44b6be5e0c2090c3 = $this->env->getExtension("native_profiler");
        $__internal_05b10b1d86de862fcb428ccca9e6262140bd647d26cc8d7c44b6be5e0c2090c3->enter($__internal_05b10b1d86de862fcb428ccca9e6262140bd647d26cc8d7c44b6be5e0c2090c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b10b1d86de862fcb428ccca9e6262140bd647d26cc8d7c44b6be5e0c2090c3->leave($__internal_05b10b1d86de862fcb428ccca9e6262140bd647d26cc8d7c44b6be5e0c2090c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_057bb33d9af1ef687a50cd886e385409ee6119d04d54934f9e7bfac83bd87576 = $this->env->getExtension("native_profiler");
        $__internal_057bb33d9af1ef687a50cd886e385409ee6119d04d54934f9e7bfac83bd87576->enter($__internal_057bb33d9af1ef687a50cd886e385409ee6119d04d54934f9e7bfac83bd87576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_057bb33d9af1ef687a50cd886e385409ee6119d04d54934f9e7bfac83bd87576->leave($__internal_057bb33d9af1ef687a50cd886e385409ee6119d04d54934f9e7bfac83bd87576_prof);

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
