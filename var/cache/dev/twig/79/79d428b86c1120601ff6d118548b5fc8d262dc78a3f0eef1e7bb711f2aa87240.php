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
        $__internal_82c7c574d5363b3ae021fde3e7214d6fff5403d4f9e238ef9042af28bb7aeff4 = $this->env->getExtension("native_profiler");
        $__internal_82c7c574d5363b3ae021fde3e7214d6fff5403d4f9e238ef9042af28bb7aeff4->enter($__internal_82c7c574d5363b3ae021fde3e7214d6fff5403d4f9e238ef9042af28bb7aeff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c7c574d5363b3ae021fde3e7214d6fff5403d4f9e238ef9042af28bb7aeff4->leave($__internal_82c7c574d5363b3ae021fde3e7214d6fff5403d4f9e238ef9042af28bb7aeff4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27c17f63a5256a234ef2f9dbc5761254910b328c3af83d79140f655f23ee4eb1 = $this->env->getExtension("native_profiler");
        $__internal_27c17f63a5256a234ef2f9dbc5761254910b328c3af83d79140f655f23ee4eb1->enter($__internal_27c17f63a5256a234ef2f9dbc5761254910b328c3af83d79140f655f23ee4eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_27c17f63a5256a234ef2f9dbc5761254910b328c3af83d79140f655f23ee4eb1->leave($__internal_27c17f63a5256a234ef2f9dbc5761254910b328c3af83d79140f655f23ee4eb1_prof);

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
