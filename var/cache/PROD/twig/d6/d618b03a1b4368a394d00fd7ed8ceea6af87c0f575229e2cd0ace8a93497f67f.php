<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9302a0973aac40a2cbf2866613bfa8e31117862c814015a119aa14f7a56362da extends Twig_Template
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
        $__internal_fa8bed14107a4ed6f4adc3abec39daedd70cc4f4f77001354ccf591a43f5a573 = $this->env->getExtension("native_profiler");
        $__internal_fa8bed14107a4ed6f4adc3abec39daedd70cc4f4f77001354ccf591a43f5a573->enter($__internal_fa8bed14107a4ed6f4adc3abec39daedd70cc4f4f77001354ccf591a43f5a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa8bed14107a4ed6f4adc3abec39daedd70cc4f4f77001354ccf591a43f5a573->leave($__internal_fa8bed14107a4ed6f4adc3abec39daedd70cc4f4f77001354ccf591a43f5a573_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49a58e6f4e151c5926e9b5d4d01eefe36f85151ad6f82fe1e0749908d3797957 = $this->env->getExtension("native_profiler");
        $__internal_49a58e6f4e151c5926e9b5d4d01eefe36f85151ad6f82fe1e0749908d3797957->enter($__internal_49a58e6f4e151c5926e9b5d4d01eefe36f85151ad6f82fe1e0749908d3797957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_49a58e6f4e151c5926e9b5d4d01eefe36f85151ad6f82fe1e0749908d3797957->leave($__internal_49a58e6f4e151c5926e9b5d4d01eefe36f85151ad6f82fe1e0749908d3797957_prof);

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
