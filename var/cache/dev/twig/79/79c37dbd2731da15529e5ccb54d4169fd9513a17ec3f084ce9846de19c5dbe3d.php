<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_41feeb4c24185a80bfef3f42d827cbabac181231e00e5da13ec3412af573d245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_30d72d5efd30a4eddf166c5396eea2a3ed12abba40daa85161360088974cdabb = $this->env->getExtension("native_profiler");
        $__internal_30d72d5efd30a4eddf166c5396eea2a3ed12abba40daa85161360088974cdabb->enter($__internal_30d72d5efd30a4eddf166c5396eea2a3ed12abba40daa85161360088974cdabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d72d5efd30a4eddf166c5396eea2a3ed12abba40daa85161360088974cdabb->leave($__internal_30d72d5efd30a4eddf166c5396eea2a3ed12abba40daa85161360088974cdabb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af023091f22e9dfbd82e9ed330f7c6e0a13d39f850c4cffb53fcd4f126965757 = $this->env->getExtension("native_profiler");
        $__internal_af023091f22e9dfbd82e9ed330f7c6e0a13d39f850c4cffb53fcd4f126965757->enter($__internal_af023091f22e9dfbd82e9ed330f7c6e0a13d39f850c4cffb53fcd4f126965757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_af023091f22e9dfbd82e9ed330f7c6e0a13d39f850c4cffb53fcd4f126965757->leave($__internal_af023091f22e9dfbd82e9ed330f7c6e0a13d39f850c4cffb53fcd4f126965757_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
