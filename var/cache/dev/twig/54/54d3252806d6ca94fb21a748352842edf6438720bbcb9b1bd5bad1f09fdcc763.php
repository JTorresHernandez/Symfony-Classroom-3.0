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
        $__internal_57ac8cda2241b27be8c93a83f15b18a2a59a11dedbdca0c8cda21e92a6c6e17e = $this->env->getExtension("native_profiler");
        $__internal_57ac8cda2241b27be8c93a83f15b18a2a59a11dedbdca0c8cda21e92a6c6e17e->enter($__internal_57ac8cda2241b27be8c93a83f15b18a2a59a11dedbdca0c8cda21e92a6c6e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ac8cda2241b27be8c93a83f15b18a2a59a11dedbdca0c8cda21e92a6c6e17e->leave($__internal_57ac8cda2241b27be8c93a83f15b18a2a59a11dedbdca0c8cda21e92a6c6e17e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4aff05f4d9c85a214fcb11d4d16fe18bc617652cdad10c715a35fb18e354494 = $this->env->getExtension("native_profiler");
        $__internal_b4aff05f4d9c85a214fcb11d4d16fe18bc617652cdad10c715a35fb18e354494->enter($__internal_b4aff05f4d9c85a214fcb11d4d16fe18bc617652cdad10c715a35fb18e354494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b4aff05f4d9c85a214fcb11d4d16fe18bc617652cdad10c715a35fb18e354494->leave($__internal_b4aff05f4d9c85a214fcb11d4d16fe18bc617652cdad10c715a35fb18e354494_prof);

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
