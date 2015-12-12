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
        $__internal_9ab6f108bc036e70430f58388bfab34a2cefc9e6b85c41e2a7bcdc6f9649d98a = $this->env->getExtension("native_profiler");
        $__internal_9ab6f108bc036e70430f58388bfab34a2cefc9e6b85c41e2a7bcdc6f9649d98a->enter($__internal_9ab6f108bc036e70430f58388bfab34a2cefc9e6b85c41e2a7bcdc6f9649d98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ab6f108bc036e70430f58388bfab34a2cefc9e6b85c41e2a7bcdc6f9649d98a->leave($__internal_9ab6f108bc036e70430f58388bfab34a2cefc9e6b85c41e2a7bcdc6f9649d98a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec2885ffc346620ea2fb65ad7832b7c4dfc1adb908d8ffe041f1d09d52a3f612 = $this->env->getExtension("native_profiler");
        $__internal_ec2885ffc346620ea2fb65ad7832b7c4dfc1adb908d8ffe041f1d09d52a3f612->enter($__internal_ec2885ffc346620ea2fb65ad7832b7c4dfc1adb908d8ffe041f1d09d52a3f612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ec2885ffc346620ea2fb65ad7832b7c4dfc1adb908d8ffe041f1d09d52a3f612->leave($__internal_ec2885ffc346620ea2fb65ad7832b7c4dfc1adb908d8ffe041f1d09d52a3f612_prof);

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
