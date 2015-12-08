<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0038cd17f05e0303f5747f09e6ed8dcee9fd8a09557fe761fc8600776cfb91ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9f44712baa681943ae0f8314c7b4faf37b5f9edf3428462fd3d723cab6d31a26 = $this->env->getExtension("native_profiler");
        $__internal_9f44712baa681943ae0f8314c7b4faf37b5f9edf3428462fd3d723cab6d31a26->enter($__internal_9f44712baa681943ae0f8314c7b4faf37b5f9edf3428462fd3d723cab6d31a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f44712baa681943ae0f8314c7b4faf37b5f9edf3428462fd3d723cab6d31a26->leave($__internal_9f44712baa681943ae0f8314c7b4faf37b5f9edf3428462fd3d723cab6d31a26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fc3c9d213fe5b8dc0094788d91849debe03ca81cd505a515e9a37c96931f675 = $this->env->getExtension("native_profiler");
        $__internal_5fc3c9d213fe5b8dc0094788d91849debe03ca81cd505a515e9a37c96931f675->enter($__internal_5fc3c9d213fe5b8dc0094788d91849debe03ca81cd505a515e9a37c96931f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5fc3c9d213fe5b8dc0094788d91849debe03ca81cd505a515e9a37c96931f675->leave($__internal_5fc3c9d213fe5b8dc0094788d91849debe03ca81cd505a515e9a37c96931f675_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
