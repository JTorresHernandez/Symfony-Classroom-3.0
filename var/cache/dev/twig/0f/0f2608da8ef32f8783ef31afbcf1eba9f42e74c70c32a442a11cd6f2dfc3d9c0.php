<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_29876b240291e0a5cdb2addf008e3cef7b21aa79a7a8bd0839f99f4738e1e1ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_56f92d551b31ee5abb36227647b3d67a29870b531096339908370f6dd1cee65c = $this->env->getExtension("native_profiler");
        $__internal_56f92d551b31ee5abb36227647b3d67a29870b531096339908370f6dd1cee65c->enter($__internal_56f92d551b31ee5abb36227647b3d67a29870b531096339908370f6dd1cee65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f92d551b31ee5abb36227647b3d67a29870b531096339908370f6dd1cee65c->leave($__internal_56f92d551b31ee5abb36227647b3d67a29870b531096339908370f6dd1cee65c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2b705fe512c47d75f4568ac01cd6e50fb8157e95c5b03a45cb40b9bc154628e = $this->env->getExtension("native_profiler");
        $__internal_d2b705fe512c47d75f4568ac01cd6e50fb8157e95c5b03a45cb40b9bc154628e->enter($__internal_d2b705fe512c47d75f4568ac01cd6e50fb8157e95c5b03a45cb40b9bc154628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d2b705fe512c47d75f4568ac01cd6e50fb8157e95c5b03a45cb40b9bc154628e->leave($__internal_d2b705fe512c47d75f4568ac01cd6e50fb8157e95c5b03a45cb40b9bc154628e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
