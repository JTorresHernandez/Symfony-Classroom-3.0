<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd5ec6d27d1066beef227dbda9afa7902de45ee5991ece7ec3a03ddcbc97de61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b0b849bf4b6a0c6c6b369cbaac9436381de49dae92a3c2009ca630b2992a700d = $this->env->getExtension("native_profiler");
        $__internal_b0b849bf4b6a0c6c6b369cbaac9436381de49dae92a3c2009ca630b2992a700d->enter($__internal_b0b849bf4b6a0c6c6b369cbaac9436381de49dae92a3c2009ca630b2992a700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b849bf4b6a0c6c6b369cbaac9436381de49dae92a3c2009ca630b2992a700d->leave($__internal_b0b849bf4b6a0c6c6b369cbaac9436381de49dae92a3c2009ca630b2992a700d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bae53e71b6d455622561e747b77fc6d5a7f2edb16a387fb1964b46eef8f5de6 = $this->env->getExtension("native_profiler");
        $__internal_0bae53e71b6d455622561e747b77fc6d5a7f2edb16a387fb1964b46eef8f5de6->enter($__internal_0bae53e71b6d455622561e747b77fc6d5a7f2edb16a387fb1964b46eef8f5de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0bae53e71b6d455622561e747b77fc6d5a7f2edb16a387fb1964b46eef8f5de6->leave($__internal_0bae53e71b6d455622561e747b77fc6d5a7f2edb16a387fb1964b46eef8f5de6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
