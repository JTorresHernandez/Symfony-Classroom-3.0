<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_0a095a836f70ac347f80f4d3697ba8c26e10105d11a7c5b91ebf4a537fdebbb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_b15a2ab47a2c564f93a24d695f40237c90c791a1b0d059c85987fd74f190790d = $this->env->getExtension("native_profiler");
        $__internal_b15a2ab47a2c564f93a24d695f40237c90c791a1b0d059c85987fd74f190790d->enter($__internal_b15a2ab47a2c564f93a24d695f40237c90c791a1b0d059c85987fd74f190790d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15a2ab47a2c564f93a24d695f40237c90c791a1b0d059c85987fd74f190790d->leave($__internal_b15a2ab47a2c564f93a24d695f40237c90c791a1b0d059c85987fd74f190790d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3a1f049c6354e0cd14241f910a74164c7a0f69438b117f32b2f2215e26b5ee8 = $this->env->getExtension("native_profiler");
        $__internal_d3a1f049c6354e0cd14241f910a74164c7a0f69438b117f32b2f2215e26b5ee8->enter($__internal_d3a1f049c6354e0cd14241f910a74164c7a0f69438b117f32b2f2215e26b5ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d3a1f049c6354e0cd14241f910a74164c7a0f69438b117f32b2f2215e26b5ee8->leave($__internal_d3a1f049c6354e0cd14241f910a74164c7a0f69438b117f32b2f2215e26b5ee8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
