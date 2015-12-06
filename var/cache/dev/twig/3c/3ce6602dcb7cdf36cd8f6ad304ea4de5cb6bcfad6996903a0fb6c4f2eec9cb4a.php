<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_89d770c53dae0b44ef1e442d4be1bb87e54cf0c664baab560f287d25f459d363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2586f7c014f004e46800429eaec1c40759a6f973f84bdc31bff51f19bf3cce38 = $this->env->getExtension("native_profiler");
        $__internal_2586f7c014f004e46800429eaec1c40759a6f973f84bdc31bff51f19bf3cce38->enter($__internal_2586f7c014f004e46800429eaec1c40759a6f973f84bdc31bff51f19bf3cce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2586f7c014f004e46800429eaec1c40759a6f973f84bdc31bff51f19bf3cce38->leave($__internal_2586f7c014f004e46800429eaec1c40759a6f973f84bdc31bff51f19bf3cce38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d956306007cfc48a1b19b48a3253eff777ba4ec2e4659baed4c229c44157e95 = $this->env->getExtension("native_profiler");
        $__internal_8d956306007cfc48a1b19b48a3253eff777ba4ec2e4659baed4c229c44157e95->enter($__internal_8d956306007cfc48a1b19b48a3253eff777ba4ec2e4659baed4c229c44157e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d956306007cfc48a1b19b48a3253eff777ba4ec2e4659baed4c229c44157e95->leave($__internal_8d956306007cfc48a1b19b48a3253eff777ba4ec2e4659baed4c229c44157e95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
