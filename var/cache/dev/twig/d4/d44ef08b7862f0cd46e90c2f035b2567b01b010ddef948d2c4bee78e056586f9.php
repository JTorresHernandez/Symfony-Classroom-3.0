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
        $__internal_7d257d9d94e39c96abbe1cdf448e1000d34d8c212834ecfe167038b3be90ced1 = $this->env->getExtension("native_profiler");
        $__internal_7d257d9d94e39c96abbe1cdf448e1000d34d8c212834ecfe167038b3be90ced1->enter($__internal_7d257d9d94e39c96abbe1cdf448e1000d34d8c212834ecfe167038b3be90ced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d257d9d94e39c96abbe1cdf448e1000d34d8c212834ecfe167038b3be90ced1->leave($__internal_7d257d9d94e39c96abbe1cdf448e1000d34d8c212834ecfe167038b3be90ced1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e701c76fce95a9c6f35953bf453459cbfa0b79f74df0c4d19b1fe335831f9524 = $this->env->getExtension("native_profiler");
        $__internal_e701c76fce95a9c6f35953bf453459cbfa0b79f74df0c4d19b1fe335831f9524->enter($__internal_e701c76fce95a9c6f35953bf453459cbfa0b79f74df0c4d19b1fe335831f9524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e701c76fce95a9c6f35953bf453459cbfa0b79f74df0c4d19b1fe335831f9524->leave($__internal_e701c76fce95a9c6f35953bf453459cbfa0b79f74df0c4d19b1fe335831f9524_prof);

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
