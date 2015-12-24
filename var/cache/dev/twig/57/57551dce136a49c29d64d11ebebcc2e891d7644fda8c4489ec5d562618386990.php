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
        $__internal_2fde07d7821e14ebdc9a7737bebd415bc29097db8ecc3f165ac44bdf3b6031bb = $this->env->getExtension("native_profiler");
        $__internal_2fde07d7821e14ebdc9a7737bebd415bc29097db8ecc3f165ac44bdf3b6031bb->enter($__internal_2fde07d7821e14ebdc9a7737bebd415bc29097db8ecc3f165ac44bdf3b6031bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fde07d7821e14ebdc9a7737bebd415bc29097db8ecc3f165ac44bdf3b6031bb->leave($__internal_2fde07d7821e14ebdc9a7737bebd415bc29097db8ecc3f165ac44bdf3b6031bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84bc8aaf71cca8e1a314c91d129566549a8d3603ed099492c663a2c6b74107ae = $this->env->getExtension("native_profiler");
        $__internal_84bc8aaf71cca8e1a314c91d129566549a8d3603ed099492c663a2c6b74107ae->enter($__internal_84bc8aaf71cca8e1a314c91d129566549a8d3603ed099492c663a2c6b74107ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_84bc8aaf71cca8e1a314c91d129566549a8d3603ed099492c663a2c6b74107ae->leave($__internal_84bc8aaf71cca8e1a314c91d129566549a8d3603ed099492c663a2c6b74107ae_prof);

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
