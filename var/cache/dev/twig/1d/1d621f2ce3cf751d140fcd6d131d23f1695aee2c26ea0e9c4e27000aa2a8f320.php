<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_55d0ceda7c887010f166f6101a58b66fad174b0e2a5b428f685566a5f4cd062c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_dcd76a7a66b55a43bb41077f041eeec3cb7a8ebfc015b26d74620fd744be9ac0 = $this->env->getExtension("native_profiler");
        $__internal_dcd76a7a66b55a43bb41077f041eeec3cb7a8ebfc015b26d74620fd744be9ac0->enter($__internal_dcd76a7a66b55a43bb41077f041eeec3cb7a8ebfc015b26d74620fd744be9ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd76a7a66b55a43bb41077f041eeec3cb7a8ebfc015b26d74620fd744be9ac0->leave($__internal_dcd76a7a66b55a43bb41077f041eeec3cb7a8ebfc015b26d74620fd744be9ac0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2787dc8991dcc25347f383e3d89dd69bc95c25c1b15136ba07f77160beb5a7f9 = $this->env->getExtension("native_profiler");
        $__internal_2787dc8991dcc25347f383e3d89dd69bc95c25c1b15136ba07f77160beb5a7f9->enter($__internal_2787dc8991dcc25347f383e3d89dd69bc95c25c1b15136ba07f77160beb5a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2787dc8991dcc25347f383e3d89dd69bc95c25c1b15136ba07f77160beb5a7f9->leave($__internal_2787dc8991dcc25347f383e3d89dd69bc95c25c1b15136ba07f77160beb5a7f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
