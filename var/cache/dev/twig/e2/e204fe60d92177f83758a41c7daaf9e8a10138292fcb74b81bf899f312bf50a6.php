<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_dadb5e0c4a45ae0839f09d40bef83cd11760415fa0be5b2d8bc433f1a04bd872 = $this->env->getExtension("native_profiler");
        $__internal_dadb5e0c4a45ae0839f09d40bef83cd11760415fa0be5b2d8bc433f1a04bd872->enter($__internal_dadb5e0c4a45ae0839f09d40bef83cd11760415fa0be5b2d8bc433f1a04bd872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dadb5e0c4a45ae0839f09d40bef83cd11760415fa0be5b2d8bc433f1a04bd872->leave($__internal_dadb5e0c4a45ae0839f09d40bef83cd11760415fa0be5b2d8bc433f1a04bd872_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26f896957ed7f9cba3f4bd879c3293ca692c9ac220ac903d36993aada638cd00 = $this->env->getExtension("native_profiler");
        $__internal_26f896957ed7f9cba3f4bd879c3293ca692c9ac220ac903d36993aada638cd00->enter($__internal_26f896957ed7f9cba3f4bd879c3293ca692c9ac220ac903d36993aada638cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_26f896957ed7f9cba3f4bd879c3293ca692c9ac220ac903d36993aada638cd00->leave($__internal_26f896957ed7f9cba3f4bd879c3293ca692c9ac220ac903d36993aada638cd00_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
