<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b055af0f4a43899fdc427906b8c4d8bc330e87d8af25a583f401ed3b295f71f6 extends Twig_Template
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
        $__internal_46f368c3e89529ddcd051c15c8e5c898b1c74af52ab2f3a1025a6af7bc664822 = $this->env->getExtension("native_profiler");
        $__internal_46f368c3e89529ddcd051c15c8e5c898b1c74af52ab2f3a1025a6af7bc664822->enter($__internal_46f368c3e89529ddcd051c15c8e5c898b1c74af52ab2f3a1025a6af7bc664822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f368c3e89529ddcd051c15c8e5c898b1c74af52ab2f3a1025a6af7bc664822->leave($__internal_46f368c3e89529ddcd051c15c8e5c898b1c74af52ab2f3a1025a6af7bc664822_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e215b4263e5cabb01dfa25e1365b3a6b783e4759277acd1c623604bb43bc9479 = $this->env->getExtension("native_profiler");
        $__internal_e215b4263e5cabb01dfa25e1365b3a6b783e4759277acd1c623604bb43bc9479->enter($__internal_e215b4263e5cabb01dfa25e1365b3a6b783e4759277acd1c623604bb43bc9479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e215b4263e5cabb01dfa25e1365b3a6b783e4759277acd1c623604bb43bc9479->leave($__internal_e215b4263e5cabb01dfa25e1365b3a6b783e4759277acd1c623604bb43bc9479_prof);

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
