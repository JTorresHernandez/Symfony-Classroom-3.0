<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e8b756f13779724349d51fd69351a3a8c13cd60c22207881a08a46573962f510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f3aa05fee716f3e85d66ab8ce684d706ec55be8f4e328886f99f87420f0087a4 = $this->env->getExtension("native_profiler");
        $__internal_f3aa05fee716f3e85d66ab8ce684d706ec55be8f4e328886f99f87420f0087a4->enter($__internal_f3aa05fee716f3e85d66ab8ce684d706ec55be8f4e328886f99f87420f0087a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3aa05fee716f3e85d66ab8ce684d706ec55be8f4e328886f99f87420f0087a4->leave($__internal_f3aa05fee716f3e85d66ab8ce684d706ec55be8f4e328886f99f87420f0087a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21023da439c11fac1ccde3287079930a4334f649eda95d9a45516e3507e14a6e = $this->env->getExtension("native_profiler");
        $__internal_21023da439c11fac1ccde3287079930a4334f649eda95d9a45516e3507e14a6e->enter($__internal_21023da439c11fac1ccde3287079930a4334f649eda95d9a45516e3507e14a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_21023da439c11fac1ccde3287079930a4334f649eda95d9a45516e3507e14a6e->leave($__internal_21023da439c11fac1ccde3287079930a4334f649eda95d9a45516e3507e14a6e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
