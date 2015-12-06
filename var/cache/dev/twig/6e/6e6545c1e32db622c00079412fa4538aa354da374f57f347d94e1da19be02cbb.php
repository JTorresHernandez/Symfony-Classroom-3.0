<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_948e1dcddbd003af572ffea8838a5412371a9d9cebf5cc0eed67d6802fc6a671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2bfc2e6238845c6d67f4f2b2b8b197360107e9da80bcd48e98e359dedb58e79e = $this->env->getExtension("native_profiler");
        $__internal_2bfc2e6238845c6d67f4f2b2b8b197360107e9da80bcd48e98e359dedb58e79e->enter($__internal_2bfc2e6238845c6d67f4f2b2b8b197360107e9da80bcd48e98e359dedb58e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfc2e6238845c6d67f4f2b2b8b197360107e9da80bcd48e98e359dedb58e79e->leave($__internal_2bfc2e6238845c6d67f4f2b2b8b197360107e9da80bcd48e98e359dedb58e79e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_559695f6e744add083a382cc3f583cd3615880cd009f650139ba0a5b0d496742 = $this->env->getExtension("native_profiler");
        $__internal_559695f6e744add083a382cc3f583cd3615880cd009f650139ba0a5b0d496742->enter($__internal_559695f6e744add083a382cc3f583cd3615880cd009f650139ba0a5b0d496742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_559695f6e744add083a382cc3f583cd3615880cd009f650139ba0a5b0d496742->leave($__internal_559695f6e744add083a382cc3f583cd3615880cd009f650139ba0a5b0d496742_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
