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
        $__internal_507a1a5a259b0dde40fedcb4c6b469a96bc0440908e9dcffd15f29eed09e9785 = $this->env->getExtension("native_profiler");
        $__internal_507a1a5a259b0dde40fedcb4c6b469a96bc0440908e9dcffd15f29eed09e9785->enter($__internal_507a1a5a259b0dde40fedcb4c6b469a96bc0440908e9dcffd15f29eed09e9785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507a1a5a259b0dde40fedcb4c6b469a96bc0440908e9dcffd15f29eed09e9785->leave($__internal_507a1a5a259b0dde40fedcb4c6b469a96bc0440908e9dcffd15f29eed09e9785_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_537564254e7070dd3f3a89d8b9c40609c06eedf7b698415dc285fb4d7e506053 = $this->env->getExtension("native_profiler");
        $__internal_537564254e7070dd3f3a89d8b9c40609c06eedf7b698415dc285fb4d7e506053->enter($__internal_537564254e7070dd3f3a89d8b9c40609c06eedf7b698415dc285fb4d7e506053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_537564254e7070dd3f3a89d8b9c40609c06eedf7b698415dc285fb4d7e506053->leave($__internal_537564254e7070dd3f3a89d8b9c40609c06eedf7b698415dc285fb4d7e506053_prof);

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
