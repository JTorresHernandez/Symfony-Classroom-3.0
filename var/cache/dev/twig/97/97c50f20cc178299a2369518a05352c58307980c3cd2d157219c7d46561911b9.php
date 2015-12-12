<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e33d0c40dba539088b826860f22f199081fe4b57736421784ab30019e18bb01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ffac2189dead2025554802df0d053dcadd54a65db2a9479cb25d9f63919806f8 = $this->env->getExtension("native_profiler");
        $__internal_ffac2189dead2025554802df0d053dcadd54a65db2a9479cb25d9f63919806f8->enter($__internal_ffac2189dead2025554802df0d053dcadd54a65db2a9479cb25d9f63919806f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffac2189dead2025554802df0d053dcadd54a65db2a9479cb25d9f63919806f8->leave($__internal_ffac2189dead2025554802df0d053dcadd54a65db2a9479cb25d9f63919806f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8900f993e6488f555664c99d62d58e801f53db708f21bf0652c1a6c8fafde6f = $this->env->getExtension("native_profiler");
        $__internal_a8900f993e6488f555664c99d62d58e801f53db708f21bf0652c1a6c8fafde6f->enter($__internal_a8900f993e6488f555664c99d62d58e801f53db708f21bf0652c1a6c8fafde6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a8900f993e6488f555664c99d62d58e801f53db708f21bf0652c1a6c8fafde6f->leave($__internal_a8900f993e6488f555664c99d62d58e801f53db708f21bf0652c1a6c8fafde6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
