<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fd14af311dd7534beb8c415706b4cbe747a9447c97a2cd30d7597a971854e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_58c7713cb2f048494e637d75d1891553a0ce5e37bd94f7b71fd5cddf4df0753f = $this->env->getExtension("native_profiler");
        $__internal_58c7713cb2f048494e637d75d1891553a0ce5e37bd94f7b71fd5cddf4df0753f->enter($__internal_58c7713cb2f048494e637d75d1891553a0ce5e37bd94f7b71fd5cddf4df0753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c7713cb2f048494e637d75d1891553a0ce5e37bd94f7b71fd5cddf4df0753f->leave($__internal_58c7713cb2f048494e637d75d1891553a0ce5e37bd94f7b71fd5cddf4df0753f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d88f106df9133004fc5402c6c67764cd81cc1255332d4eb3bfba1e742bb8e1a = $this->env->getExtension("native_profiler");
        $__internal_9d88f106df9133004fc5402c6c67764cd81cc1255332d4eb3bfba1e742bb8e1a->enter($__internal_9d88f106df9133004fc5402c6c67764cd81cc1255332d4eb3bfba1e742bb8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9d88f106df9133004fc5402c6c67764cd81cc1255332d4eb3bfba1e742bb8e1a->leave($__internal_9d88f106df9133004fc5402c6c67764cd81cc1255332d4eb3bfba1e742bb8e1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
