<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6bf8e6b5c4066c8fd691753cefd8abc41dc4be94f57f648e5b664cfc28576d4a extends Twig_Template
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
        $__internal_d295ab53a92b69ed2915ec7724fe0d69cff36c3087e5040d0ede9ae1ed930cc6 = $this->env->getExtension("native_profiler");
        $__internal_d295ab53a92b69ed2915ec7724fe0d69cff36c3087e5040d0ede9ae1ed930cc6->enter($__internal_d295ab53a92b69ed2915ec7724fe0d69cff36c3087e5040d0ede9ae1ed930cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d295ab53a92b69ed2915ec7724fe0d69cff36c3087e5040d0ede9ae1ed930cc6->leave($__internal_d295ab53a92b69ed2915ec7724fe0d69cff36c3087e5040d0ede9ae1ed930cc6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dce7a9decd941296068c2a76d1d0877438c56c23c5fd098786ede50609c0694 = $this->env->getExtension("native_profiler");
        $__internal_0dce7a9decd941296068c2a76d1d0877438c56c23c5fd098786ede50609c0694->enter($__internal_0dce7a9decd941296068c2a76d1d0877438c56c23c5fd098786ede50609c0694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0dce7a9decd941296068c2a76d1d0877438c56c23c5fd098786ede50609c0694->leave($__internal_0dce7a9decd941296068c2a76d1d0877438c56c23c5fd098786ede50609c0694_prof);

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
