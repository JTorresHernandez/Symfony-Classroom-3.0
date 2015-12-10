<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f4b80753fd5b82579e21fe79ab1e668f11385fa78524db026cb341b506b4c243 = $this->env->getExtension("native_profiler");
        $__internal_f4b80753fd5b82579e21fe79ab1e668f11385fa78524db026cb341b506b4c243->enter($__internal_f4b80753fd5b82579e21fe79ab1e668f11385fa78524db026cb341b506b4c243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b80753fd5b82579e21fe79ab1e668f11385fa78524db026cb341b506b4c243->leave($__internal_f4b80753fd5b82579e21fe79ab1e668f11385fa78524db026cb341b506b4c243_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_993f2efec261406e5933753a1493121a9cab27ff636d14d5021d7199ba38a1b3 = $this->env->getExtension("native_profiler");
        $__internal_993f2efec261406e5933753a1493121a9cab27ff636d14d5021d7199ba38a1b3->enter($__internal_993f2efec261406e5933753a1493121a9cab27ff636d14d5021d7199ba38a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_993f2efec261406e5933753a1493121a9cab27ff636d14d5021d7199ba38a1b3->leave($__internal_993f2efec261406e5933753a1493121a9cab27ff636d14d5021d7199ba38a1b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
