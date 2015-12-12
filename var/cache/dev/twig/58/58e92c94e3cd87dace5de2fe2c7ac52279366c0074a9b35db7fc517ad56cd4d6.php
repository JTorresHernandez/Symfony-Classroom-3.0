<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_efe377e7bbe0db56ce5d706f90f232131762ea5ef283bafd46f8b782e866c1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6324d806c08dc0a02b16c763f5cc2e6e13922a6dd64546c13a6b31810d9768f5 = $this->env->getExtension("native_profiler");
        $__internal_6324d806c08dc0a02b16c763f5cc2e6e13922a6dd64546c13a6b31810d9768f5->enter($__internal_6324d806c08dc0a02b16c763f5cc2e6e13922a6dd64546c13a6b31810d9768f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6324d806c08dc0a02b16c763f5cc2e6e13922a6dd64546c13a6b31810d9768f5->leave($__internal_6324d806c08dc0a02b16c763f5cc2e6e13922a6dd64546c13a6b31810d9768f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac51336e2b48b5e25424378d33a46ca9318672452e5b54f6c5b55a7ad9745602 = $this->env->getExtension("native_profiler");
        $__internal_ac51336e2b48b5e25424378d33a46ca9318672452e5b54f6c5b55a7ad9745602->enter($__internal_ac51336e2b48b5e25424378d33a46ca9318672452e5b54f6c5b55a7ad9745602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ac51336e2b48b5e25424378d33a46ca9318672452e5b54f6c5b55a7ad9745602->leave($__internal_ac51336e2b48b5e25424378d33a46ca9318672452e5b54f6c5b55a7ad9745602_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
