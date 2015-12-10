<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e05afe6fb3631dc00f005896e40e670c52e4a9ac093f0787f4a757f22cdd3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_85df00d56ea9b874863812ddf319659da2c647c03cd8f5025158f88bf1f7e1ea = $this->env->getExtension("native_profiler");
        $__internal_85df00d56ea9b874863812ddf319659da2c647c03cd8f5025158f88bf1f7e1ea->enter($__internal_85df00d56ea9b874863812ddf319659da2c647c03cd8f5025158f88bf1f7e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85df00d56ea9b874863812ddf319659da2c647c03cd8f5025158f88bf1f7e1ea->leave($__internal_85df00d56ea9b874863812ddf319659da2c647c03cd8f5025158f88bf1f7e1ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b15927af258752a1b0bff1b79990c66cd46f5b1b04b0f1b97040d07cb24eb21b = $this->env->getExtension("native_profiler");
        $__internal_b15927af258752a1b0bff1b79990c66cd46f5b1b04b0f1b97040d07cb24eb21b->enter($__internal_b15927af258752a1b0bff1b79990c66cd46f5b1b04b0f1b97040d07cb24eb21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b15927af258752a1b0bff1b79990c66cd46f5b1b04b0f1b97040d07cb24eb21b->leave($__internal_b15927af258752a1b0bff1b79990c66cd46f5b1b04b0f1b97040d07cb24eb21b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
