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
        $__internal_b28220c6ae65a8fe62725ea1cc26efe66d33aaa09ee9a6223202c68516ccc0d2 = $this->env->getExtension("native_profiler");
        $__internal_b28220c6ae65a8fe62725ea1cc26efe66d33aaa09ee9a6223202c68516ccc0d2->enter($__internal_b28220c6ae65a8fe62725ea1cc26efe66d33aaa09ee9a6223202c68516ccc0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28220c6ae65a8fe62725ea1cc26efe66d33aaa09ee9a6223202c68516ccc0d2->leave($__internal_b28220c6ae65a8fe62725ea1cc26efe66d33aaa09ee9a6223202c68516ccc0d2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eea0065eb80a717c9f9acc506f5fc5387df210e9d1a596f591c90260727943b0 = $this->env->getExtension("native_profiler");
        $__internal_eea0065eb80a717c9f9acc506f5fc5387df210e9d1a596f591c90260727943b0->enter($__internal_eea0065eb80a717c9f9acc506f5fc5387df210e9d1a596f591c90260727943b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_eea0065eb80a717c9f9acc506f5fc5387df210e9d1a596f591c90260727943b0->leave($__internal_eea0065eb80a717c9f9acc506f5fc5387df210e9d1a596f591c90260727943b0_prof);

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
