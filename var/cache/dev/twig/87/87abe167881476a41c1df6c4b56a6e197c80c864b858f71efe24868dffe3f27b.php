<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_ee6c01ea43d615eb4c80828c31ec32de00396d06a855c955f6c3681132469f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_bfb85395a371732f168e593e8fe46b20fc6b32ca31a74ca1c8096741ccfea06a = $this->env->getExtension("native_profiler");
        $__internal_bfb85395a371732f168e593e8fe46b20fc6b32ca31a74ca1c8096741ccfea06a->enter($__internal_bfb85395a371732f168e593e8fe46b20fc6b32ca31a74ca1c8096741ccfea06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb85395a371732f168e593e8fe46b20fc6b32ca31a74ca1c8096741ccfea06a->leave($__internal_bfb85395a371732f168e593e8fe46b20fc6b32ca31a74ca1c8096741ccfea06a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a27b78bf87308f38571ac73dbafabfdce9b1bdcdb4f8082a0e31b85695c27fbe = $this->env->getExtension("native_profiler");
        $__internal_a27b78bf87308f38571ac73dbafabfdce9b1bdcdb4f8082a0e31b85695c27fbe->enter($__internal_a27b78bf87308f38571ac73dbafabfdce9b1bdcdb4f8082a0e31b85695c27fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a27b78bf87308f38571ac73dbafabfdce9b1bdcdb4f8082a0e31b85695c27fbe->leave($__internal_a27b78bf87308f38571ac73dbafabfdce9b1bdcdb4f8082a0e31b85695c27fbe_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
