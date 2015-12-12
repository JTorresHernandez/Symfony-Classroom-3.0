<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_16dd1bd2c640fd926d90dde51b065144522a4dcbba634a3201b9f40ed76b231a extends Twig_Template
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
        $__internal_6128f7c0ed929bf744e65c30635e12a4c380efa360e540e407bb27344210d5a7 = $this->env->getExtension("native_profiler");
        $__internal_6128f7c0ed929bf744e65c30635e12a4c380efa360e540e407bb27344210d5a7->enter($__internal_6128f7c0ed929bf744e65c30635e12a4c380efa360e540e407bb27344210d5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6128f7c0ed929bf744e65c30635e12a4c380efa360e540e407bb27344210d5a7->leave($__internal_6128f7c0ed929bf744e65c30635e12a4c380efa360e540e407bb27344210d5a7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3da1caa3184961bc931a7bc43e5b71cfb3684caef9a8bb8389b17e6ab5e1e36e = $this->env->getExtension("native_profiler");
        $__internal_3da1caa3184961bc931a7bc43e5b71cfb3684caef9a8bb8389b17e6ab5e1e36e->enter($__internal_3da1caa3184961bc931a7bc43e5b71cfb3684caef9a8bb8389b17e6ab5e1e36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3da1caa3184961bc931a7bc43e5b71cfb3684caef9a8bb8389b17e6ab5e1e36e->leave($__internal_3da1caa3184961bc931a7bc43e5b71cfb3684caef9a8bb8389b17e6ab5e1e36e_prof);

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
