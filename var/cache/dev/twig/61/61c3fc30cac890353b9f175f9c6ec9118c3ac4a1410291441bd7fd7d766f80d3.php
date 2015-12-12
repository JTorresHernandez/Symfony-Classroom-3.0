<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44edd0093cd159b9a194d13f2d70a6267e91b513af71b5d92d1755526473188b extends Twig_Template
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
        $__internal_35713fc4257bbd08535cef2d56d647617ba9583aa9f785b48de05c2baf5ddbb9 = $this->env->getExtension("native_profiler");
        $__internal_35713fc4257bbd08535cef2d56d647617ba9583aa9f785b48de05c2baf5ddbb9->enter($__internal_35713fc4257bbd08535cef2d56d647617ba9583aa9f785b48de05c2baf5ddbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35713fc4257bbd08535cef2d56d647617ba9583aa9f785b48de05c2baf5ddbb9->leave($__internal_35713fc4257bbd08535cef2d56d647617ba9583aa9f785b48de05c2baf5ddbb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06b2479074314cf8cfcb0ad8ab60f67f56f4af85ca290b83cbfc523e3a738927 = $this->env->getExtension("native_profiler");
        $__internal_06b2479074314cf8cfcb0ad8ab60f67f56f4af85ca290b83cbfc523e3a738927->enter($__internal_06b2479074314cf8cfcb0ad8ab60f67f56f4af85ca290b83cbfc523e3a738927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_06b2479074314cf8cfcb0ad8ab60f67f56f4af85ca290b83cbfc523e3a738927->leave($__internal_06b2479074314cf8cfcb0ad8ab60f67f56f4af85ca290b83cbfc523e3a738927_prof);

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
