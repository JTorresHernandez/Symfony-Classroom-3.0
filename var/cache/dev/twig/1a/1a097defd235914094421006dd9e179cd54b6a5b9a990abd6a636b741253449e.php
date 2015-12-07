<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7eedf778e46bb7892f5222cefb6c90d1c27708d696dfab6d4c0d3bc23ca2fc6d extends Twig_Template
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
        $__internal_2782ee85f3d95dbba15c9a0d85462f239a5846d4e4c8293a1556e3707fd77fb9 = $this->env->getExtension("native_profiler");
        $__internal_2782ee85f3d95dbba15c9a0d85462f239a5846d4e4c8293a1556e3707fd77fb9->enter($__internal_2782ee85f3d95dbba15c9a0d85462f239a5846d4e4c8293a1556e3707fd77fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2782ee85f3d95dbba15c9a0d85462f239a5846d4e4c8293a1556e3707fd77fb9->leave($__internal_2782ee85f3d95dbba15c9a0d85462f239a5846d4e4c8293a1556e3707fd77fb9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_795f1b20391e7b9c80f6c55f460d7ac2a9a757da91a3d4a271544e416c5461fc = $this->env->getExtension("native_profiler");
        $__internal_795f1b20391e7b9c80f6c55f460d7ac2a9a757da91a3d4a271544e416c5461fc->enter($__internal_795f1b20391e7b9c80f6c55f460d7ac2a9a757da91a3d4a271544e416c5461fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_795f1b20391e7b9c80f6c55f460d7ac2a9a757da91a3d4a271544e416c5461fc->leave($__internal_795f1b20391e7b9c80f6c55f460d7ac2a9a757da91a3d4a271544e416c5461fc_prof);

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
