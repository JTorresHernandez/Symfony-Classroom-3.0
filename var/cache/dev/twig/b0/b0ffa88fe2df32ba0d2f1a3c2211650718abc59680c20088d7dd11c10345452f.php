<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_07a54bdb80be2d45f3b021141834ee448b4440e6b3b357b74a893d2c71939c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_2177183fde46cae12956365e0f37348e109f77f599a91ccbb52e05577d89909a = $this->env->getExtension("native_profiler");
        $__internal_2177183fde46cae12956365e0f37348e109f77f599a91ccbb52e05577d89909a->enter($__internal_2177183fde46cae12956365e0f37348e109f77f599a91ccbb52e05577d89909a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2177183fde46cae12956365e0f37348e109f77f599a91ccbb52e05577d89909a->leave($__internal_2177183fde46cae12956365e0f37348e109f77f599a91ccbb52e05577d89909a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b8753677d1674564a644c77603ddf0d95c69baa29616a33827155169cef5802 = $this->env->getExtension("native_profiler");
        $__internal_7b8753677d1674564a644c77603ddf0d95c69baa29616a33827155169cef5802->enter($__internal_7b8753677d1674564a644c77603ddf0d95c69baa29616a33827155169cef5802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7b8753677d1674564a644c77603ddf0d95c69baa29616a33827155169cef5802->leave($__internal_7b8753677d1674564a644c77603ddf0d95c69baa29616a33827155169cef5802_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
