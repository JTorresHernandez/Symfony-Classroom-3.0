<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_01a06b1f391374784694c3d57c4c0bc35bf6be94705496cf3203c19218032022 extends Twig_Template
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
        $__internal_227f283caa796a527823a72f8821460ec9be099298f2b5f8ad2b2b865481c3fe = $this->env->getExtension("native_profiler");
        $__internal_227f283caa796a527823a72f8821460ec9be099298f2b5f8ad2b2b865481c3fe->enter($__internal_227f283caa796a527823a72f8821460ec9be099298f2b5f8ad2b2b865481c3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227f283caa796a527823a72f8821460ec9be099298f2b5f8ad2b2b865481c3fe->leave($__internal_227f283caa796a527823a72f8821460ec9be099298f2b5f8ad2b2b865481c3fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38bac5b4507739bcd01bf34d240fcf9e6b98abfc2eb6c3fbeb4e30fb8a5fe633 = $this->env->getExtension("native_profiler");
        $__internal_38bac5b4507739bcd01bf34d240fcf9e6b98abfc2eb6c3fbeb4e30fb8a5fe633->enter($__internal_38bac5b4507739bcd01bf34d240fcf9e6b98abfc2eb6c3fbeb4e30fb8a5fe633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_38bac5b4507739bcd01bf34d240fcf9e6b98abfc2eb6c3fbeb4e30fb8a5fe633->leave($__internal_38bac5b4507739bcd01bf34d240fcf9e6b98abfc2eb6c3fbeb4e30fb8a5fe633_prof);

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
