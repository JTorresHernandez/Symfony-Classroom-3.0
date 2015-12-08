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
        $__internal_915ed2d22a7044109dd5a77f72288a87a2a18feef41a67c837651ae4a451661d = $this->env->getExtension("native_profiler");
        $__internal_915ed2d22a7044109dd5a77f72288a87a2a18feef41a67c837651ae4a451661d->enter($__internal_915ed2d22a7044109dd5a77f72288a87a2a18feef41a67c837651ae4a451661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915ed2d22a7044109dd5a77f72288a87a2a18feef41a67c837651ae4a451661d->leave($__internal_915ed2d22a7044109dd5a77f72288a87a2a18feef41a67c837651ae4a451661d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab87b20ec0ea44b3bcd55399c675f83dbe3575f5f8efdc8d244919efdfdeed41 = $this->env->getExtension("native_profiler");
        $__internal_ab87b20ec0ea44b3bcd55399c675f83dbe3575f5f8efdc8d244919efdfdeed41->enter($__internal_ab87b20ec0ea44b3bcd55399c675f83dbe3575f5f8efdc8d244919efdfdeed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ab87b20ec0ea44b3bcd55399c675f83dbe3575f5f8efdc8d244919efdfdeed41->leave($__internal_ab87b20ec0ea44b3bcd55399c675f83dbe3575f5f8efdc8d244919efdfdeed41_prof);

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
