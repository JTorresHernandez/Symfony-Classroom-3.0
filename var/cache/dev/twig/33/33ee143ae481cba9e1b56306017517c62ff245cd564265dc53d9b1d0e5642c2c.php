<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1e7cc4e8bd0cebd530501551618beecd25adcec4fb0699973ab205435642d83b extends Twig_Template
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
        $__internal_5090610317353375b9a0fce7a13cab38d67d2c039cc061b2cea871cdc46ba5a3 = $this->env->getExtension("native_profiler");
        $__internal_5090610317353375b9a0fce7a13cab38d67d2c039cc061b2cea871cdc46ba5a3->enter($__internal_5090610317353375b9a0fce7a13cab38d67d2c039cc061b2cea871cdc46ba5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5090610317353375b9a0fce7a13cab38d67d2c039cc061b2cea871cdc46ba5a3->leave($__internal_5090610317353375b9a0fce7a13cab38d67d2c039cc061b2cea871cdc46ba5a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_648f0c2dd696ba6ceafcf1f6fc9d874f2309cc331e560081f514d920912fe5f6 = $this->env->getExtension("native_profiler");
        $__internal_648f0c2dd696ba6ceafcf1f6fc9d874f2309cc331e560081f514d920912fe5f6->enter($__internal_648f0c2dd696ba6ceafcf1f6fc9d874f2309cc331e560081f514d920912fe5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_648f0c2dd696ba6ceafcf1f6fc9d874f2309cc331e560081f514d920912fe5f6->leave($__internal_648f0c2dd696ba6ceafcf1f6fc9d874f2309cc331e560081f514d920912fe5f6_prof);

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
