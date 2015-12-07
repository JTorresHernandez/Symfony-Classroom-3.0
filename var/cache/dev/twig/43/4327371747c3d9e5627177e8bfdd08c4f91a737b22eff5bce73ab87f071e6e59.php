<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_80b400d9f8c9e98268033507559a232cf32208092a0c63d1481789d9ee7b2bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a4f69ceedf509d35ae4b263ecd401968e76197599f038eb582f9dfbcc0338a7b = $this->env->getExtension("native_profiler");
        $__internal_a4f69ceedf509d35ae4b263ecd401968e76197599f038eb582f9dfbcc0338a7b->enter($__internal_a4f69ceedf509d35ae4b263ecd401968e76197599f038eb582f9dfbcc0338a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f69ceedf509d35ae4b263ecd401968e76197599f038eb582f9dfbcc0338a7b->leave($__internal_a4f69ceedf509d35ae4b263ecd401968e76197599f038eb582f9dfbcc0338a7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72e7f65f683b94a238cfcfeff622856d22b383b53fd1baca54e4ce6707b49971 = $this->env->getExtension("native_profiler");
        $__internal_72e7f65f683b94a238cfcfeff622856d22b383b53fd1baca54e4ce6707b49971->enter($__internal_72e7f65f683b94a238cfcfeff622856d22b383b53fd1baca54e4ce6707b49971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_72e7f65f683b94a238cfcfeff622856d22b383b53fd1baca54e4ce6707b49971->leave($__internal_72e7f65f683b94a238cfcfeff622856d22b383b53fd1baca54e4ce6707b49971_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
