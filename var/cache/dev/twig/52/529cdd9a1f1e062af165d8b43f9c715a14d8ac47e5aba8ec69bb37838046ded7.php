<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7cc8c7795537a4786c63c63ed44321e9ecc01bfdcb37c8d6822592fec514dcd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7cff113ffa9c65e082ff183ae040f8d8e308527b150aed9eca4ce6a743a60faa = $this->env->getExtension("native_profiler");
        $__internal_7cff113ffa9c65e082ff183ae040f8d8e308527b150aed9eca4ce6a743a60faa->enter($__internal_7cff113ffa9c65e082ff183ae040f8d8e308527b150aed9eca4ce6a743a60faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cff113ffa9c65e082ff183ae040f8d8e308527b150aed9eca4ce6a743a60faa->leave($__internal_7cff113ffa9c65e082ff183ae040f8d8e308527b150aed9eca4ce6a743a60faa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5d7be359ca681a709d3a17c923fc3cac59afffedf2810128903922920cbb06a = $this->env->getExtension("native_profiler");
        $__internal_d5d7be359ca681a709d3a17c923fc3cac59afffedf2810128903922920cbb06a->enter($__internal_d5d7be359ca681a709d3a17c923fc3cac59afffedf2810128903922920cbb06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d5d7be359ca681a709d3a17c923fc3cac59afffedf2810128903922920cbb06a->leave($__internal_d5d7be359ca681a709d3a17c923fc3cac59afffedf2810128903922920cbb06a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
