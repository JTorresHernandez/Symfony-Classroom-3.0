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
        $__internal_6e017a5aaa4f852ce19dfeca324a17ee3cbf2b9aa2f76ffaa4cb80ecfe9943ef = $this->env->getExtension("native_profiler");
        $__internal_6e017a5aaa4f852ce19dfeca324a17ee3cbf2b9aa2f76ffaa4cb80ecfe9943ef->enter($__internal_6e017a5aaa4f852ce19dfeca324a17ee3cbf2b9aa2f76ffaa4cb80ecfe9943ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e017a5aaa4f852ce19dfeca324a17ee3cbf2b9aa2f76ffaa4cb80ecfe9943ef->leave($__internal_6e017a5aaa4f852ce19dfeca324a17ee3cbf2b9aa2f76ffaa4cb80ecfe9943ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d367132fa17b48cd02f321d9c818aaf7c19678a94cb8b02a96dce17a2fa6606 = $this->env->getExtension("native_profiler");
        $__internal_2d367132fa17b48cd02f321d9c818aaf7c19678a94cb8b02a96dce17a2fa6606->enter($__internal_2d367132fa17b48cd02f321d9c818aaf7c19678a94cb8b02a96dce17a2fa6606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2d367132fa17b48cd02f321d9c818aaf7c19678a94cb8b02a96dce17a2fa6606->leave($__internal_2d367132fa17b48cd02f321d9c818aaf7c19678a94cb8b02a96dce17a2fa6606_prof);

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
