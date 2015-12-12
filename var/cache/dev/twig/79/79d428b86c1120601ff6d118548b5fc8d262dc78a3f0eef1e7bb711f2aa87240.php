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
        $__internal_9bb0ed4cb47e9740219111cea8788fcfd3d673d80e53aba368ded502d79ca517 = $this->env->getExtension("native_profiler");
        $__internal_9bb0ed4cb47e9740219111cea8788fcfd3d673d80e53aba368ded502d79ca517->enter($__internal_9bb0ed4cb47e9740219111cea8788fcfd3d673d80e53aba368ded502d79ca517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb0ed4cb47e9740219111cea8788fcfd3d673d80e53aba368ded502d79ca517->leave($__internal_9bb0ed4cb47e9740219111cea8788fcfd3d673d80e53aba368ded502d79ca517_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_362ac9e2852402963b1f947d1c1cde972b0bcf4a89327cd721ab92bc07411f00 = $this->env->getExtension("native_profiler");
        $__internal_362ac9e2852402963b1f947d1c1cde972b0bcf4a89327cd721ab92bc07411f00->enter($__internal_362ac9e2852402963b1f947d1c1cde972b0bcf4a89327cd721ab92bc07411f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_362ac9e2852402963b1f947d1c1cde972b0bcf4a89327cd721ab92bc07411f00->leave($__internal_362ac9e2852402963b1f947d1c1cde972b0bcf4a89327cd721ab92bc07411f00_prof);

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
