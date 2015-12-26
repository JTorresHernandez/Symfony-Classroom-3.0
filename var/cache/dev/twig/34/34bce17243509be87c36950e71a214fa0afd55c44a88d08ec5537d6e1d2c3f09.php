<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5e324a15fb66611c7e9acdde821a8cbaf3972b4aa2bf5360cafd64e08e52bd64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_6fa55621fa0e48191f6526873b924fc09e8175ca72dfb5878e5b12a690b53972 = $this->env->getExtension("native_profiler");
        $__internal_6fa55621fa0e48191f6526873b924fc09e8175ca72dfb5878e5b12a690b53972->enter($__internal_6fa55621fa0e48191f6526873b924fc09e8175ca72dfb5878e5b12a690b53972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa55621fa0e48191f6526873b924fc09e8175ca72dfb5878e5b12a690b53972->leave($__internal_6fa55621fa0e48191f6526873b924fc09e8175ca72dfb5878e5b12a690b53972_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9881666f62044d50e08f391dd83d2cd2c75543cfd86b95f40d7e3ab7a4087451 = $this->env->getExtension("native_profiler");
        $__internal_9881666f62044d50e08f391dd83d2cd2c75543cfd86b95f40d7e3ab7a4087451->enter($__internal_9881666f62044d50e08f391dd83d2cd2c75543cfd86b95f40d7e3ab7a4087451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9881666f62044d50e08f391dd83d2cd2c75543cfd86b95f40d7e3ab7a4087451->leave($__internal_9881666f62044d50e08f391dd83d2cd2c75543cfd86b95f40d7e3ab7a4087451_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
