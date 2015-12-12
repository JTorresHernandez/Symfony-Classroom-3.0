<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_55d0ceda7c887010f166f6101a58b66fad174b0e2a5b428f685566a5f4cd062c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_19607ddc102e7b497ba279f7f8591184a16f5942d51cdf11a243218911a01f28 = $this->env->getExtension("native_profiler");
        $__internal_19607ddc102e7b497ba279f7f8591184a16f5942d51cdf11a243218911a01f28->enter($__internal_19607ddc102e7b497ba279f7f8591184a16f5942d51cdf11a243218911a01f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19607ddc102e7b497ba279f7f8591184a16f5942d51cdf11a243218911a01f28->leave($__internal_19607ddc102e7b497ba279f7f8591184a16f5942d51cdf11a243218911a01f28_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dc3002adcbab8de7d3a4702c6d25708991ae5c12b21f5ab32e65531c120e708 = $this->env->getExtension("native_profiler");
        $__internal_6dc3002adcbab8de7d3a4702c6d25708991ae5c12b21f5ab32e65531c120e708->enter($__internal_6dc3002adcbab8de7d3a4702c6d25708991ae5c12b21f5ab32e65531c120e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6dc3002adcbab8de7d3a4702c6d25708991ae5c12b21f5ab32e65531c120e708->leave($__internal_6dc3002adcbab8de7d3a4702c6d25708991ae5c12b21f5ab32e65531c120e708_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
