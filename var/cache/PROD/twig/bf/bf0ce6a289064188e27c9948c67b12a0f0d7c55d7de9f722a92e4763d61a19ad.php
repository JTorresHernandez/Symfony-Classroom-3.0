<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_44911808c54f1c4a4a3e877535f6da7f4b38777fbb264ab17af1806a034ff9fc extends Twig_Template
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
        $__internal_814ce3f16b593aa0722989bc1fc5b6ad397e572ce48681286771a14001d85ea2 = $this->env->getExtension("native_profiler");
        $__internal_814ce3f16b593aa0722989bc1fc5b6ad397e572ce48681286771a14001d85ea2->enter($__internal_814ce3f16b593aa0722989bc1fc5b6ad397e572ce48681286771a14001d85ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814ce3f16b593aa0722989bc1fc5b6ad397e572ce48681286771a14001d85ea2->leave($__internal_814ce3f16b593aa0722989bc1fc5b6ad397e572ce48681286771a14001d85ea2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcea21dce2a72caaa9ddc435f50bb48deda5646059a6d185d7472994ed13e1fb = $this->env->getExtension("native_profiler");
        $__internal_fcea21dce2a72caaa9ddc435f50bb48deda5646059a6d185d7472994ed13e1fb->enter($__internal_fcea21dce2a72caaa9ddc435f50bb48deda5646059a6d185d7472994ed13e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fcea21dce2a72caaa9ddc435f50bb48deda5646059a6d185d7472994ed13e1fb->leave($__internal_fcea21dce2a72caaa9ddc435f50bb48deda5646059a6d185d7472994ed13e1fb_prof);

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
