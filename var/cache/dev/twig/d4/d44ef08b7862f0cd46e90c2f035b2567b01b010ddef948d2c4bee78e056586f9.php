<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2ffc1e171bc758af405e9014f1b8dc40358f4dba84650f5b1af31646e6db9e89 = $this->env->getExtension("native_profiler");
        $__internal_2ffc1e171bc758af405e9014f1b8dc40358f4dba84650f5b1af31646e6db9e89->enter($__internal_2ffc1e171bc758af405e9014f1b8dc40358f4dba84650f5b1af31646e6db9e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffc1e171bc758af405e9014f1b8dc40358f4dba84650f5b1af31646e6db9e89->leave($__internal_2ffc1e171bc758af405e9014f1b8dc40358f4dba84650f5b1af31646e6db9e89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_322f9d572d848b3daaa98e1697e956182c9b45d839927329797a634112d03044 = $this->env->getExtension("native_profiler");
        $__internal_322f9d572d848b3daaa98e1697e956182c9b45d839927329797a634112d03044->enter($__internal_322f9d572d848b3daaa98e1697e956182c9b45d839927329797a634112d03044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_322f9d572d848b3daaa98e1697e956182c9b45d839927329797a634112d03044->leave($__internal_322f9d572d848b3daaa98e1697e956182c9b45d839927329797a634112d03044_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
