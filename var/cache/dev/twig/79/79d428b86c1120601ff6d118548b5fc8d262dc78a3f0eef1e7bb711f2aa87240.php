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
        $__internal_d4217d438c3fa61f11d7f717458015e830f43f0b81144b342943ccccaf49ddc2 = $this->env->getExtension("native_profiler");
        $__internal_d4217d438c3fa61f11d7f717458015e830f43f0b81144b342943ccccaf49ddc2->enter($__internal_d4217d438c3fa61f11d7f717458015e830f43f0b81144b342943ccccaf49ddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4217d438c3fa61f11d7f717458015e830f43f0b81144b342943ccccaf49ddc2->leave($__internal_d4217d438c3fa61f11d7f717458015e830f43f0b81144b342943ccccaf49ddc2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666a4c2f69336fa88c46c459d8b0c2b2744552e1358115759a95da8d09dea1bc = $this->env->getExtension("native_profiler");
        $__internal_666a4c2f69336fa88c46c459d8b0c2b2744552e1358115759a95da8d09dea1bc->enter($__internal_666a4c2f69336fa88c46c459d8b0c2b2744552e1358115759a95da8d09dea1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_666a4c2f69336fa88c46c459d8b0c2b2744552e1358115759a95da8d09dea1bc->leave($__internal_666a4c2f69336fa88c46c459d8b0c2b2744552e1358115759a95da8d09dea1bc_prof);

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
