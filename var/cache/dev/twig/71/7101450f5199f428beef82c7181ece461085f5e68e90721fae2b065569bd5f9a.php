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
        $__internal_9b88023bf9b72ea7b966193e8d8d812ae3b84546ca5de40481bfc4b358807977 = $this->env->getExtension("native_profiler");
        $__internal_9b88023bf9b72ea7b966193e8d8d812ae3b84546ca5de40481bfc4b358807977->enter($__internal_9b88023bf9b72ea7b966193e8d8d812ae3b84546ca5de40481bfc4b358807977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b88023bf9b72ea7b966193e8d8d812ae3b84546ca5de40481bfc4b358807977->leave($__internal_9b88023bf9b72ea7b966193e8d8d812ae3b84546ca5de40481bfc4b358807977_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb7584fd582aae9476c7c4bb2c54b405332a7e3248eb25ca821b79eb1f6dae07 = $this->env->getExtension("native_profiler");
        $__internal_fb7584fd582aae9476c7c4bb2c54b405332a7e3248eb25ca821b79eb1f6dae07->enter($__internal_fb7584fd582aae9476c7c4bb2c54b405332a7e3248eb25ca821b79eb1f6dae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fb7584fd582aae9476c7c4bb2c54b405332a7e3248eb25ca821b79eb1f6dae07->leave($__internal_fb7584fd582aae9476c7c4bb2c54b405332a7e3248eb25ca821b79eb1f6dae07_prof);

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
