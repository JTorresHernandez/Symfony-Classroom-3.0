<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_edc956a4bcdd4155f84f40b392b9247a6bdb8c18aa6122dc6683b4fc18661ca7 extends Twig_Template
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
        $__internal_ab585e70617eba5c885822040dd3f18c770385d58e8797fe8535227be1e3d3b1 = $this->env->getExtension("native_profiler");
        $__internal_ab585e70617eba5c885822040dd3f18c770385d58e8797fe8535227be1e3d3b1->enter($__internal_ab585e70617eba5c885822040dd3f18c770385d58e8797fe8535227be1e3d3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab585e70617eba5c885822040dd3f18c770385d58e8797fe8535227be1e3d3b1->leave($__internal_ab585e70617eba5c885822040dd3f18c770385d58e8797fe8535227be1e3d3b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e9d676899c3994560115758c84269a0ba2135a4c81f82b3406c51c7dc3e4996 = $this->env->getExtension("native_profiler");
        $__internal_8e9d676899c3994560115758c84269a0ba2135a4c81f82b3406c51c7dc3e4996->enter($__internal_8e9d676899c3994560115758c84269a0ba2135a4c81f82b3406c51c7dc3e4996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8e9d676899c3994560115758c84269a0ba2135a4c81f82b3406c51c7dc3e4996->leave($__internal_8e9d676899c3994560115758c84269a0ba2135a4c81f82b3406c51c7dc3e4996_prof);

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
