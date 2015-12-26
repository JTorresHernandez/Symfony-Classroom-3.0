<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_edf6e47e74d63aec3115c421d1b47c7948abed5f69f32017545dfb68292c05fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_192081c6b15b00592ffaff8842af960b6462d3f334e9ff9443682fd7e624779b = $this->env->getExtension("native_profiler");
        $__internal_192081c6b15b00592ffaff8842af960b6462d3f334e9ff9443682fd7e624779b->enter($__internal_192081c6b15b00592ffaff8842af960b6462d3f334e9ff9443682fd7e624779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192081c6b15b00592ffaff8842af960b6462d3f334e9ff9443682fd7e624779b->leave($__internal_192081c6b15b00592ffaff8842af960b6462d3f334e9ff9443682fd7e624779b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e11957283b3853d276a70784183ad6d6b9f4273f583bf76f9f61775169b8abd = $this->env->getExtension("native_profiler");
        $__internal_8e11957283b3853d276a70784183ad6d6b9f4273f583bf76f9f61775169b8abd->enter($__internal_8e11957283b3853d276a70784183ad6d6b9f4273f583bf76f9f61775169b8abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_8e11957283b3853d276a70784183ad6d6b9f4273f583bf76f9f61775169b8abd->leave($__internal_8e11957283b3853d276a70784183ad6d6b9f4273f583bf76f9f61775169b8abd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
