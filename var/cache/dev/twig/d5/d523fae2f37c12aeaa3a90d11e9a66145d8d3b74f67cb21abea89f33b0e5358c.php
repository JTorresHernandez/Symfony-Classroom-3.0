<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_adda245088750acff59221f7a7126210cfde5678f30e9ab7b3c2b73422f0e0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_68d8b9874f5c06f13cc7be6144fdbff519356cfd9c35de31c34d9f40eae8aa40 = $this->env->getExtension("native_profiler");
        $__internal_68d8b9874f5c06f13cc7be6144fdbff519356cfd9c35de31c34d9f40eae8aa40->enter($__internal_68d8b9874f5c06f13cc7be6144fdbff519356cfd9c35de31c34d9f40eae8aa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d8b9874f5c06f13cc7be6144fdbff519356cfd9c35de31c34d9f40eae8aa40->leave($__internal_68d8b9874f5c06f13cc7be6144fdbff519356cfd9c35de31c34d9f40eae8aa40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_532c6e66057c835ab09d32e1eccb4073c5c3712350dc981f02d7911905dbbf72 = $this->env->getExtension("native_profiler");
        $__internal_532c6e66057c835ab09d32e1eccb4073c5c3712350dc981f02d7911905dbbf72->enter($__internal_532c6e66057c835ab09d32e1eccb4073c5c3712350dc981f02d7911905dbbf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_532c6e66057c835ab09d32e1eccb4073c5c3712350dc981f02d7911905dbbf72->leave($__internal_532c6e66057c835ab09d32e1eccb4073c5c3712350dc981f02d7911905dbbf72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
