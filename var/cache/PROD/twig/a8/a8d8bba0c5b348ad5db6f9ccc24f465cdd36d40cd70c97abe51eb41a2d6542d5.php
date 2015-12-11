<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_eb2eb4b59b1ec73e0ab6271fe939bbdeca763d8ec6e6056f3e2fd140f7c1c032 extends Twig_Template
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
        $__internal_cff58999664980a6d0a9946a524e5ccb6cb1d256ce369ba2bdf67cb67ddbd8cb = $this->env->getExtension("native_profiler");
        $__internal_cff58999664980a6d0a9946a524e5ccb6cb1d256ce369ba2bdf67cb67ddbd8cb->enter($__internal_cff58999664980a6d0a9946a524e5ccb6cb1d256ce369ba2bdf67cb67ddbd8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff58999664980a6d0a9946a524e5ccb6cb1d256ce369ba2bdf67cb67ddbd8cb->leave($__internal_cff58999664980a6d0a9946a524e5ccb6cb1d256ce369ba2bdf67cb67ddbd8cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f01b5b54db55f36bd2210edd3b0d064660d04a05eed204edcd3df025fb8727eb = $this->env->getExtension("native_profiler");
        $__internal_f01b5b54db55f36bd2210edd3b0d064660d04a05eed204edcd3df025fb8727eb->enter($__internal_f01b5b54db55f36bd2210edd3b0d064660d04a05eed204edcd3df025fb8727eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f01b5b54db55f36bd2210edd3b0d064660d04a05eed204edcd3df025fb8727eb->leave($__internal_f01b5b54db55f36bd2210edd3b0d064660d04a05eed204edcd3df025fb8727eb_prof);

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
