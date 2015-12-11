<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_f4156700e5fc047852cc8417810fb4ee3a9194d15d9d165a64025a607589b025 extends Twig_Template
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
        $__internal_2ed591677b4adb3cdabb6a8b4ce1d518eab87be3bff6e3f48a467bdb2bd94f04 = $this->env->getExtension("native_profiler");
        $__internal_2ed591677b4adb3cdabb6a8b4ce1d518eab87be3bff6e3f48a467bdb2bd94f04->enter($__internal_2ed591677b4adb3cdabb6a8b4ce1d518eab87be3bff6e3f48a467bdb2bd94f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed591677b4adb3cdabb6a8b4ce1d518eab87be3bff6e3f48a467bdb2bd94f04->leave($__internal_2ed591677b4adb3cdabb6a8b4ce1d518eab87be3bff6e3f48a467bdb2bd94f04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c26bac7dce7557a4ec937f56914492fb2267677d5a9dbbf3f23dfdfac029e21c = $this->env->getExtension("native_profiler");
        $__internal_c26bac7dce7557a4ec937f56914492fb2267677d5a9dbbf3f23dfdfac029e21c->enter($__internal_c26bac7dce7557a4ec937f56914492fb2267677d5a9dbbf3f23dfdfac029e21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c26bac7dce7557a4ec937f56914492fb2267677d5a9dbbf3f23dfdfac029e21c->leave($__internal_c26bac7dce7557a4ec937f56914492fb2267677d5a9dbbf3f23dfdfac029e21c_prof);

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
