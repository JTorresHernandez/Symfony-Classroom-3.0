<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d4a36322318a21fd6a136c0af6ae7c0002069ecbd28a8f77842337c48abbc46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_61c74cfea87629b556b1b27f33b2bc525ef163ce96405099ecbaaa79ace2150b = $this->env->getExtension("native_profiler");
        $__internal_61c74cfea87629b556b1b27f33b2bc525ef163ce96405099ecbaaa79ace2150b->enter($__internal_61c74cfea87629b556b1b27f33b2bc525ef163ce96405099ecbaaa79ace2150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61c74cfea87629b556b1b27f33b2bc525ef163ce96405099ecbaaa79ace2150b->leave($__internal_61c74cfea87629b556b1b27f33b2bc525ef163ce96405099ecbaaa79ace2150b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b4f8546017a6828865c21a5ea6a4f1d0c8528be87e8501f09fe8601eeef58be = $this->env->getExtension("native_profiler");
        $__internal_2b4f8546017a6828865c21a5ea6a4f1d0c8528be87e8501f09fe8601eeef58be->enter($__internal_2b4f8546017a6828865c21a5ea6a4f1d0c8528be87e8501f09fe8601eeef58be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2b4f8546017a6828865c21a5ea6a4f1d0c8528be87e8501f09fe8601eeef58be->leave($__internal_2b4f8546017a6828865c21a5ea6a4f1d0c8528be87e8501f09fe8601eeef58be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
