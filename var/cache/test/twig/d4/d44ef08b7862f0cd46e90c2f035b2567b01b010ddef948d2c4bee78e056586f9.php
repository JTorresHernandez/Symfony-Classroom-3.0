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
        $__internal_fa88ac4297ccad7836f8918baa27206c017de1c5bfc7a467c5538708abf47312 = $this->env->getExtension("native_profiler");
        $__internal_fa88ac4297ccad7836f8918baa27206c017de1c5bfc7a467c5538708abf47312->enter($__internal_fa88ac4297ccad7836f8918baa27206c017de1c5bfc7a467c5538708abf47312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa88ac4297ccad7836f8918baa27206c017de1c5bfc7a467c5538708abf47312->leave($__internal_fa88ac4297ccad7836f8918baa27206c017de1c5bfc7a467c5538708abf47312_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b6b55a5d86d9e8962ba2690d865877dd7fd73701241f32d24621bcc892358be = $this->env->getExtension("native_profiler");
        $__internal_9b6b55a5d86d9e8962ba2690d865877dd7fd73701241f32d24621bcc892358be->enter($__internal_9b6b55a5d86d9e8962ba2690d865877dd7fd73701241f32d24621bcc892358be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9b6b55a5d86d9e8962ba2690d865877dd7fd73701241f32d24621bcc892358be->leave($__internal_9b6b55a5d86d9e8962ba2690d865877dd7fd73701241f32d24621bcc892358be_prof);

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
