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
        $__internal_82566b7de77cdb830a98f270a679be3579ead2cf20537165963651a711ba25e0 = $this->env->getExtension("native_profiler");
        $__internal_82566b7de77cdb830a98f270a679be3579ead2cf20537165963651a711ba25e0->enter($__internal_82566b7de77cdb830a98f270a679be3579ead2cf20537165963651a711ba25e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82566b7de77cdb830a98f270a679be3579ead2cf20537165963651a711ba25e0->leave($__internal_82566b7de77cdb830a98f270a679be3579ead2cf20537165963651a711ba25e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b41a418beb9d5b9ea9699b4d8d8dbe5bc4e462c71d33a5d6d9b610970e0c70a5 = $this->env->getExtension("native_profiler");
        $__internal_b41a418beb9d5b9ea9699b4d8d8dbe5bc4e462c71d33a5d6d9b610970e0c70a5->enter($__internal_b41a418beb9d5b9ea9699b4d8d8dbe5bc4e462c71d33a5d6d9b610970e0c70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b41a418beb9d5b9ea9699b4d8d8dbe5bc4e462c71d33a5d6d9b610970e0c70a5->leave($__internal_b41a418beb9d5b9ea9699b4d8d8dbe5bc4e462c71d33a5d6d9b610970e0c70a5_prof);

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
