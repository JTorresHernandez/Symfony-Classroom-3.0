<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_abad6b9f6b211fa379c36ac15575c4498d8b2ba2578c2fdfbab94e7698b0afb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_07ee004896e5c5ef40af85b470c7af8d36dcbd28bdbce8624ed8af12de8391de = $this->env->getExtension("native_profiler");
        $__internal_07ee004896e5c5ef40af85b470c7af8d36dcbd28bdbce8624ed8af12de8391de->enter($__internal_07ee004896e5c5ef40af85b470c7af8d36dcbd28bdbce8624ed8af12de8391de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ee004896e5c5ef40af85b470c7af8d36dcbd28bdbce8624ed8af12de8391de->leave($__internal_07ee004896e5c5ef40af85b470c7af8d36dcbd28bdbce8624ed8af12de8391de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2702ab548f3ed610163e9b34cf634bed7158180552a3fc13ca7af56f12b3526b = $this->env->getExtension("native_profiler");
        $__internal_2702ab548f3ed610163e9b34cf634bed7158180552a3fc13ca7af56f12b3526b->enter($__internal_2702ab548f3ed610163e9b34cf634bed7158180552a3fc13ca7af56f12b3526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2702ab548f3ed610163e9b34cf634bed7158180552a3fc13ca7af56f12b3526b->leave($__internal_2702ab548f3ed610163e9b34cf634bed7158180552a3fc13ca7af56f12b3526b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
