<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44edd0093cd159b9a194d13f2d70a6267e91b513af71b5d92d1755526473188b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_6c1da430fdbc20634e073d0506e3ee7ad19f68c49d3d6289f7463511a40de21a = $this->env->getExtension("native_profiler");
        $__internal_6c1da430fdbc20634e073d0506e3ee7ad19f68c49d3d6289f7463511a40de21a->enter($__internal_6c1da430fdbc20634e073d0506e3ee7ad19f68c49d3d6289f7463511a40de21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1da430fdbc20634e073d0506e3ee7ad19f68c49d3d6289f7463511a40de21a->leave($__internal_6c1da430fdbc20634e073d0506e3ee7ad19f68c49d3d6289f7463511a40de21a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a589e5a2ddc255a80db616b231177f9941840e3f92c6266c4f966a9666d21a20 = $this->env->getExtension("native_profiler");
        $__internal_a589e5a2ddc255a80db616b231177f9941840e3f92c6266c4f966a9666d21a20->enter($__internal_a589e5a2ddc255a80db616b231177f9941840e3f92c6266c4f966a9666d21a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a589e5a2ddc255a80db616b231177f9941840e3f92c6266c4f966a9666d21a20->leave($__internal_a589e5a2ddc255a80db616b231177f9941840e3f92c6266c4f966a9666d21a20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
