<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6bf8e6b5c4066c8fd691753cefd8abc41dc4be94f57f648e5b664cfc28576d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_ee9a47cb0df601e97e9cd1e7f3146e5e57d5ee9d37288c423a8cc26015e2dd2c = $this->env->getExtension("native_profiler");
        $__internal_ee9a47cb0df601e97e9cd1e7f3146e5e57d5ee9d37288c423a8cc26015e2dd2c->enter($__internal_ee9a47cb0df601e97e9cd1e7f3146e5e57d5ee9d37288c423a8cc26015e2dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee9a47cb0df601e97e9cd1e7f3146e5e57d5ee9d37288c423a8cc26015e2dd2c->leave($__internal_ee9a47cb0df601e97e9cd1e7f3146e5e57d5ee9d37288c423a8cc26015e2dd2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09b9de95cd8053eae798595af383eb87eab58133c99ae99524e72e8a91f6276c = $this->env->getExtension("native_profiler");
        $__internal_09b9de95cd8053eae798595af383eb87eab58133c99ae99524e72e8a91f6276c->enter($__internal_09b9de95cd8053eae798595af383eb87eab58133c99ae99524e72e8a91f6276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_09b9de95cd8053eae798595af383eb87eab58133c99ae99524e72e8a91f6276c->leave($__internal_09b9de95cd8053eae798595af383eb87eab58133c99ae99524e72e8a91f6276c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
