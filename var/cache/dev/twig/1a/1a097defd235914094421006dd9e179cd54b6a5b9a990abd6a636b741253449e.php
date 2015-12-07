<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7eedf778e46bb7892f5222cefb6c90d1c27708d696dfab6d4c0d3bc23ca2fc6d extends Twig_Template
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
        $__internal_68b37cd71419629f21a71e5136a28b0632fe5903b99eb89b868ef0de9a5b08e3 = $this->env->getExtension("native_profiler");
        $__internal_68b37cd71419629f21a71e5136a28b0632fe5903b99eb89b868ef0de9a5b08e3->enter($__internal_68b37cd71419629f21a71e5136a28b0632fe5903b99eb89b868ef0de9a5b08e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b37cd71419629f21a71e5136a28b0632fe5903b99eb89b868ef0de9a5b08e3->leave($__internal_68b37cd71419629f21a71e5136a28b0632fe5903b99eb89b868ef0de9a5b08e3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3533b690809ff41c6c7c94068cc5687bb7b79533f846918c6c23e86fddb05b96 = $this->env->getExtension("native_profiler");
        $__internal_3533b690809ff41c6c7c94068cc5687bb7b79533f846918c6c23e86fddb05b96->enter($__internal_3533b690809ff41c6c7c94068cc5687bb7b79533f846918c6c23e86fddb05b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3533b690809ff41c6c7c94068cc5687bb7b79533f846918c6c23e86fddb05b96->leave($__internal_3533b690809ff41c6c7c94068cc5687bb7b79533f846918c6c23e86fddb05b96_prof);

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
