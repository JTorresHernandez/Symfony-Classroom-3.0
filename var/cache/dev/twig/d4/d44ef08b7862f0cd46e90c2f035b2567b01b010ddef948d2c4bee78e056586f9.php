<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3ae8de5a9607393abdb8dcaef770219a621c1af44554a6f2f3522d5344f480b1 = $this->env->getExtension("native_profiler");
        $__internal_3ae8de5a9607393abdb8dcaef770219a621c1af44554a6f2f3522d5344f480b1->enter($__internal_3ae8de5a9607393abdb8dcaef770219a621c1af44554a6f2f3522d5344f480b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae8de5a9607393abdb8dcaef770219a621c1af44554a6f2f3522d5344f480b1->leave($__internal_3ae8de5a9607393abdb8dcaef770219a621c1af44554a6f2f3522d5344f480b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7732232ec1b708835c4f0d2b7c1077c03f93888fa1f500e1d67ceabb13274880 = $this->env->getExtension("native_profiler");
        $__internal_7732232ec1b708835c4f0d2b7c1077c03f93888fa1f500e1d67ceabb13274880->enter($__internal_7732232ec1b708835c4f0d2b7c1077c03f93888fa1f500e1d67ceabb13274880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7732232ec1b708835c4f0d2b7c1077c03f93888fa1f500e1d67ceabb13274880->leave($__internal_7732232ec1b708835c4f0d2b7c1077c03f93888fa1f500e1d67ceabb13274880_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
