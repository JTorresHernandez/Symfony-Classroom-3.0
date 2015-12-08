<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_80b400d9f8c9e98268033507559a232cf32208092a0c63d1481789d9ee7b2bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_877f2461fe24b083dbabd7882cdcc5362b6c1d0be9d986331d1bc01d9aabc6dc = $this->env->getExtension("native_profiler");
        $__internal_877f2461fe24b083dbabd7882cdcc5362b6c1d0be9d986331d1bc01d9aabc6dc->enter($__internal_877f2461fe24b083dbabd7882cdcc5362b6c1d0be9d986331d1bc01d9aabc6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877f2461fe24b083dbabd7882cdcc5362b6c1d0be9d986331d1bc01d9aabc6dc->leave($__internal_877f2461fe24b083dbabd7882cdcc5362b6c1d0be9d986331d1bc01d9aabc6dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_350eb179aabdd0b040abbb0c46b9a6b55372145013023ae86e4d8f6a81a21ab1 = $this->env->getExtension("native_profiler");
        $__internal_350eb179aabdd0b040abbb0c46b9a6b55372145013023ae86e4d8f6a81a21ab1->enter($__internal_350eb179aabdd0b040abbb0c46b9a6b55372145013023ae86e4d8f6a81a21ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_350eb179aabdd0b040abbb0c46b9a6b55372145013023ae86e4d8f6a81a21ab1->leave($__internal_350eb179aabdd0b040abbb0c46b9a6b55372145013023ae86e4d8f6a81a21ab1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
