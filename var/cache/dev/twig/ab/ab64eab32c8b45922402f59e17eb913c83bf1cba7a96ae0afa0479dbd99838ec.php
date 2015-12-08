<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_eda4472d6a07afe90a3e3387bb74fecdc0b3e43162ae477c73df864cafbd9213 extends Twig_Template
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
        $__internal_99eb3ebf686f227f27c66ba8e15336db6d88ddd0f92ce9e6250d678788c50e4b = $this->env->getExtension("native_profiler");
        $__internal_99eb3ebf686f227f27c66ba8e15336db6d88ddd0f92ce9e6250d678788c50e4b->enter($__internal_99eb3ebf686f227f27c66ba8e15336db6d88ddd0f92ce9e6250d678788c50e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99eb3ebf686f227f27c66ba8e15336db6d88ddd0f92ce9e6250d678788c50e4b->leave($__internal_99eb3ebf686f227f27c66ba8e15336db6d88ddd0f92ce9e6250d678788c50e4b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4d1482cc6ce35dc23d6ccb147c02b55840c9fcca344f08b62daa22d77be88cc = $this->env->getExtension("native_profiler");
        $__internal_d4d1482cc6ce35dc23d6ccb147c02b55840c9fcca344f08b62daa22d77be88cc->enter($__internal_d4d1482cc6ce35dc23d6ccb147c02b55840c9fcca344f08b62daa22d77be88cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d4d1482cc6ce35dc23d6ccb147c02b55840c9fcca344f08b62daa22d77be88cc->leave($__internal_d4d1482cc6ce35dc23d6ccb147c02b55840c9fcca344f08b62daa22d77be88cc_prof);

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
