<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_4b77edffd51161294672c75f74fb457afbd6d30d482005b4afd2bd31b1ae75bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_27bfb7b6e2b57701ae791ec6563a8f718ce4e7b440c96ca33cadf435cac7eb94 = $this->env->getExtension("native_profiler");
        $__internal_27bfb7b6e2b57701ae791ec6563a8f718ce4e7b440c96ca33cadf435cac7eb94->enter($__internal_27bfb7b6e2b57701ae791ec6563a8f718ce4e7b440c96ca33cadf435cac7eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27bfb7b6e2b57701ae791ec6563a8f718ce4e7b440c96ca33cadf435cac7eb94->leave($__internal_27bfb7b6e2b57701ae791ec6563a8f718ce4e7b440c96ca33cadf435cac7eb94_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6aa6109a876211dc74eaba389998b86700c9a472617c36b8de3e06b654edb27 = $this->env->getExtension("native_profiler");
        $__internal_a6aa6109a876211dc74eaba389998b86700c9a472617c36b8de3e06b654edb27->enter($__internal_a6aa6109a876211dc74eaba389998b86700c9a472617c36b8de3e06b654edb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a6aa6109a876211dc74eaba389998b86700c9a472617c36b8de3e06b654edb27->leave($__internal_a6aa6109a876211dc74eaba389998b86700c9a472617c36b8de3e06b654edb27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
