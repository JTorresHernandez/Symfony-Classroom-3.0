<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44edd0093cd159b9a194d13f2d70a6267e91b513af71b5d92d1755526473188b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9bd993e8798c574bca63386adde28006dad41cc498b1ffdc3e25c012388e2cc3 = $this->env->getExtension("native_profiler");
        $__internal_9bd993e8798c574bca63386adde28006dad41cc498b1ffdc3e25c012388e2cc3->enter($__internal_9bd993e8798c574bca63386adde28006dad41cc498b1ffdc3e25c012388e2cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd993e8798c574bca63386adde28006dad41cc498b1ffdc3e25c012388e2cc3->leave($__internal_9bd993e8798c574bca63386adde28006dad41cc498b1ffdc3e25c012388e2cc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d57ea4c6d8a82cb9326820d7727fe0db511a09c5d14c937fbdba1e7c845eb6d5 = $this->env->getExtension("native_profiler");
        $__internal_d57ea4c6d8a82cb9326820d7727fe0db511a09c5d14c937fbdba1e7c845eb6d5->enter($__internal_d57ea4c6d8a82cb9326820d7727fe0db511a09c5d14c937fbdba1e7c845eb6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d57ea4c6d8a82cb9326820d7727fe0db511a09c5d14c937fbdba1e7c845eb6d5->leave($__internal_d57ea4c6d8a82cb9326820d7727fe0db511a09c5d14c937fbdba1e7c845eb6d5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
