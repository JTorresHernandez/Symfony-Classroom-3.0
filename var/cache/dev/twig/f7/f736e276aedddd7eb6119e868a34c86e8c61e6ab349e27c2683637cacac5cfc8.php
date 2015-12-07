<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a0db4571eb258549f9da89c494a8a967f9775a81aeb9cbc30e5c6f8e65eb3607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0dad5dd471717ddb96d98ae2d7fada1deb0c2f9105c47868653e318ee1f3576f = $this->env->getExtension("native_profiler");
        $__internal_0dad5dd471717ddb96d98ae2d7fada1deb0c2f9105c47868653e318ee1f3576f->enter($__internal_0dad5dd471717ddb96d98ae2d7fada1deb0c2f9105c47868653e318ee1f3576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dad5dd471717ddb96d98ae2d7fada1deb0c2f9105c47868653e318ee1f3576f->leave($__internal_0dad5dd471717ddb96d98ae2d7fada1deb0c2f9105c47868653e318ee1f3576f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19b12a3e250eefbd55521faf9044a65f348fceba96de750846e1a6bdaa4b771b = $this->env->getExtension("native_profiler");
        $__internal_19b12a3e250eefbd55521faf9044a65f348fceba96de750846e1a6bdaa4b771b->enter($__internal_19b12a3e250eefbd55521faf9044a65f348fceba96de750846e1a6bdaa4b771b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_19b12a3e250eefbd55521faf9044a65f348fceba96de750846e1a6bdaa4b771b->leave($__internal_19b12a3e250eefbd55521faf9044a65f348fceba96de750846e1a6bdaa4b771b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
