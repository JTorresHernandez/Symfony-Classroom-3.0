<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e05afe6fb3631dc00f005896e40e670c52e4a9ac093f0787f4a757f22cdd3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_133d6b43a18273d8b3fa07850b8ea4f341b991f6a3691f353c0933ab12783759 = $this->env->getExtension("native_profiler");
        $__internal_133d6b43a18273d8b3fa07850b8ea4f341b991f6a3691f353c0933ab12783759->enter($__internal_133d6b43a18273d8b3fa07850b8ea4f341b991f6a3691f353c0933ab12783759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133d6b43a18273d8b3fa07850b8ea4f341b991f6a3691f353c0933ab12783759->leave($__internal_133d6b43a18273d8b3fa07850b8ea4f341b991f6a3691f353c0933ab12783759_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbd037d59e225876a7e1cf83d1fd45f86e95827a03779688aa7383f9cc1ddba2 = $this->env->getExtension("native_profiler");
        $__internal_fbd037d59e225876a7e1cf83d1fd45f86e95827a03779688aa7383f9cc1ddba2->enter($__internal_fbd037d59e225876a7e1cf83d1fd45f86e95827a03779688aa7383f9cc1ddba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fbd037d59e225876a7e1cf83d1fd45f86e95827a03779688aa7383f9cc1ddba2->leave($__internal_fbd037d59e225876a7e1cf83d1fd45f86e95827a03779688aa7383f9cc1ddba2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
