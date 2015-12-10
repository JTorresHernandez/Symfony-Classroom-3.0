<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_40c49b2e5a3d3c1f258dc90e577ebb498726dfa058e73ca7a54bd776f695756a = $this->env->getExtension("native_profiler");
        $__internal_40c49b2e5a3d3c1f258dc90e577ebb498726dfa058e73ca7a54bd776f695756a->enter($__internal_40c49b2e5a3d3c1f258dc90e577ebb498726dfa058e73ca7a54bd776f695756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c49b2e5a3d3c1f258dc90e577ebb498726dfa058e73ca7a54bd776f695756a->leave($__internal_40c49b2e5a3d3c1f258dc90e577ebb498726dfa058e73ca7a54bd776f695756a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbbeda3c9695185f21a7e5a9432c18f9cc366a7136bbf0383fd7517f213c14a2 = $this->env->getExtension("native_profiler");
        $__internal_dbbeda3c9695185f21a7e5a9432c18f9cc366a7136bbf0383fd7517f213c14a2->enter($__internal_dbbeda3c9695185f21a7e5a9432c18f9cc366a7136bbf0383fd7517f213c14a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dbbeda3c9695185f21a7e5a9432c18f9cc366a7136bbf0383fd7517f213c14a2->leave($__internal_dbbeda3c9695185f21a7e5a9432c18f9cc366a7136bbf0383fd7517f213c14a2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
