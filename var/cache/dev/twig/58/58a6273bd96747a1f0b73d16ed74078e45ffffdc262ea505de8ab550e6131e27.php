<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_56b5f8cd5fda5c53ea6ccc523a2511454e5ae242a7734955396fdef50758dd6f extends Twig_Template
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
        $__internal_60009cf5de3e87774c89622d2b46f92e410a01f14d0a2ea8e18002eae7603ddb = $this->env->getExtension("native_profiler");
        $__internal_60009cf5de3e87774c89622d2b46f92e410a01f14d0a2ea8e18002eae7603ddb->enter($__internal_60009cf5de3e87774c89622d2b46f92e410a01f14d0a2ea8e18002eae7603ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60009cf5de3e87774c89622d2b46f92e410a01f14d0a2ea8e18002eae7603ddb->leave($__internal_60009cf5de3e87774c89622d2b46f92e410a01f14d0a2ea8e18002eae7603ddb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f1b51cd8bd8c21d436473cbb5d9b0d66835417111e2dd857b21e661cf88299b = $this->env->getExtension("native_profiler");
        $__internal_4f1b51cd8bd8c21d436473cbb5d9b0d66835417111e2dd857b21e661cf88299b->enter($__internal_4f1b51cd8bd8c21d436473cbb5d9b0d66835417111e2dd857b21e661cf88299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4f1b51cd8bd8c21d436473cbb5d9b0d66835417111e2dd857b21e661cf88299b->leave($__internal_4f1b51cd8bd8c21d436473cbb5d9b0d66835417111e2dd857b21e661cf88299b_prof);

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
