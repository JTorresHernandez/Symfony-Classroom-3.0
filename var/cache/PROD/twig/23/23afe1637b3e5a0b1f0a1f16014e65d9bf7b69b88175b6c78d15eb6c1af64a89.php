<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_55834606b730d5249ff3d5499d0670397c1133774576dc5c657d3e0ec5ab0ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_1a599b05997303db4646536a403f1e5de7b9592864a59c25af406caf8ffef886 = $this->env->getExtension("native_profiler");
        $__internal_1a599b05997303db4646536a403f1e5de7b9592864a59c25af406caf8ffef886->enter($__internal_1a599b05997303db4646536a403f1e5de7b9592864a59c25af406caf8ffef886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a599b05997303db4646536a403f1e5de7b9592864a59c25af406caf8ffef886->leave($__internal_1a599b05997303db4646536a403f1e5de7b9592864a59c25af406caf8ffef886_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54696f83a2dd3a1cb70d10044dbaca47799129a4e9491ba2e030a5688edb7776 = $this->env->getExtension("native_profiler");
        $__internal_54696f83a2dd3a1cb70d10044dbaca47799129a4e9491ba2e030a5688edb7776->enter($__internal_54696f83a2dd3a1cb70d10044dbaca47799129a4e9491ba2e030a5688edb7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_54696f83a2dd3a1cb70d10044dbaca47799129a4e9491ba2e030a5688edb7776->leave($__internal_54696f83a2dd3a1cb70d10044dbaca47799129a4e9491ba2e030a5688edb7776_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
