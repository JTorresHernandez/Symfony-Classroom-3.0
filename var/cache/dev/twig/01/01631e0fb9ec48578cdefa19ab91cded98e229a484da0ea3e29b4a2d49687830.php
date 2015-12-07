<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b2adf917fa99cc0511911646f36d3688d7c12eebb01aaf4dee2d5822e5bcb7b0 extends Twig_Template
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
        $__internal_398e49655353b1ca6f9c62b2e13420dc2d4a7e764bc1b183961eea5ddd785f88 = $this->env->getExtension("native_profiler");
        $__internal_398e49655353b1ca6f9c62b2e13420dc2d4a7e764bc1b183961eea5ddd785f88->enter($__internal_398e49655353b1ca6f9c62b2e13420dc2d4a7e764bc1b183961eea5ddd785f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398e49655353b1ca6f9c62b2e13420dc2d4a7e764bc1b183961eea5ddd785f88->leave($__internal_398e49655353b1ca6f9c62b2e13420dc2d4a7e764bc1b183961eea5ddd785f88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93cc43431cafb2d3d1cf1947614c73e0bb970ea889c98937ebbefb3ab2082621 = $this->env->getExtension("native_profiler");
        $__internal_93cc43431cafb2d3d1cf1947614c73e0bb970ea889c98937ebbefb3ab2082621->enter($__internal_93cc43431cafb2d3d1cf1947614c73e0bb970ea889c98937ebbefb3ab2082621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_93cc43431cafb2d3d1cf1947614c73e0bb970ea889c98937ebbefb3ab2082621->leave($__internal_93cc43431cafb2d3d1cf1947614c73e0bb970ea889c98937ebbefb3ab2082621_prof);

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
