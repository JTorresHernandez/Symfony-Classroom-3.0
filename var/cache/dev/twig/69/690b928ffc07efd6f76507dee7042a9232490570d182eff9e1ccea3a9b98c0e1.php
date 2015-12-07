<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_314e9c7720c4efed2b2a1726ff5ae9a439e8b751e009aa8de8c78ba3da1c9217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_a991d18ab7e6989ea46251838d952308d1d25f7b1e106e9f3b2c707abec522bc = $this->env->getExtension("native_profiler");
        $__internal_a991d18ab7e6989ea46251838d952308d1d25f7b1e106e9f3b2c707abec522bc->enter($__internal_a991d18ab7e6989ea46251838d952308d1d25f7b1e106e9f3b2c707abec522bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a991d18ab7e6989ea46251838d952308d1d25f7b1e106e9f3b2c707abec522bc->leave($__internal_a991d18ab7e6989ea46251838d952308d1d25f7b1e106e9f3b2c707abec522bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca4e0757bd40b70e91e5490810bf01170331c81da33812ee15c14cbf6a7c1df = $this->env->getExtension("native_profiler");
        $__internal_0ca4e0757bd40b70e91e5490810bf01170331c81da33812ee15c14cbf6a7c1df->enter($__internal_0ca4e0757bd40b70e91e5490810bf01170331c81da33812ee15c14cbf6a7c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0ca4e0757bd40b70e91e5490810bf01170331c81da33812ee15c14cbf6a7c1df->leave($__internal_0ca4e0757bd40b70e91e5490810bf01170331c81da33812ee15c14cbf6a7c1df_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
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
