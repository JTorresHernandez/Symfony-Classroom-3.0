<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9ac1c8b3336c429d47127b295991c6eb47f6ee0a5333327314fc5d89a6fb8cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7f92e26f48d5b9ddda2c41775c2358bf77e24000667b0ed06cc7d3f9e429c32d = $this->env->getExtension("native_profiler");
        $__internal_7f92e26f48d5b9ddda2c41775c2358bf77e24000667b0ed06cc7d3f9e429c32d->enter($__internal_7f92e26f48d5b9ddda2c41775c2358bf77e24000667b0ed06cc7d3f9e429c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f92e26f48d5b9ddda2c41775c2358bf77e24000667b0ed06cc7d3f9e429c32d->leave($__internal_7f92e26f48d5b9ddda2c41775c2358bf77e24000667b0ed06cc7d3f9e429c32d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4599240d9f5777d91f9af7184cd5cd5480fb62dac56754de8b6b97ebf6f2ced = $this->env->getExtension("native_profiler");
        $__internal_c4599240d9f5777d91f9af7184cd5cd5480fb62dac56754de8b6b97ebf6f2ced->enter($__internal_c4599240d9f5777d91f9af7184cd5cd5480fb62dac56754de8b6b97ebf6f2ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c4599240d9f5777d91f9af7184cd5cd5480fb62dac56754de8b6b97ebf6f2ced->leave($__internal_c4599240d9f5777d91f9af7184cd5cd5480fb62dac56754de8b6b97ebf6f2ced_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
