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
        $__internal_0f2a685b3a9556166a2540fec0fad039be324a2dcab91da39f8f29bdeb4af6d8 = $this->env->getExtension("native_profiler");
        $__internal_0f2a685b3a9556166a2540fec0fad039be324a2dcab91da39f8f29bdeb4af6d8->enter($__internal_0f2a685b3a9556166a2540fec0fad039be324a2dcab91da39f8f29bdeb4af6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2a685b3a9556166a2540fec0fad039be324a2dcab91da39f8f29bdeb4af6d8->leave($__internal_0f2a685b3a9556166a2540fec0fad039be324a2dcab91da39f8f29bdeb4af6d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8715e079599885da272082de5e18f1f20e27aea870ef9dc64eea5d968159c4d3 = $this->env->getExtension("native_profiler");
        $__internal_8715e079599885da272082de5e18f1f20e27aea870ef9dc64eea5d968159c4d3->enter($__internal_8715e079599885da272082de5e18f1f20e27aea870ef9dc64eea5d968159c4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8715e079599885da272082de5e18f1f20e27aea870ef9dc64eea5d968159c4d3->leave($__internal_8715e079599885da272082de5e18f1f20e27aea870ef9dc64eea5d968159c4d3_prof);

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
