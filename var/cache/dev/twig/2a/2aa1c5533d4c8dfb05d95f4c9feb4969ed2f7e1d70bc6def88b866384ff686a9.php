<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e653beadf82025b32f8556c30f65cf1e9322412423cdff2136cb621ee26052a0 extends Twig_Template
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
        $__internal_2dbcf4addc6dfaf61f45ac34ab5107eae91b890434b3d0351964668562e8c1e2 = $this->env->getExtension("native_profiler");
        $__internal_2dbcf4addc6dfaf61f45ac34ab5107eae91b890434b3d0351964668562e8c1e2->enter($__internal_2dbcf4addc6dfaf61f45ac34ab5107eae91b890434b3d0351964668562e8c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dbcf4addc6dfaf61f45ac34ab5107eae91b890434b3d0351964668562e8c1e2->leave($__internal_2dbcf4addc6dfaf61f45ac34ab5107eae91b890434b3d0351964668562e8c1e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_145e98a1ceec311f391a6c7dc870012145b48fd632e8e39f197086ba3b4ae56d = $this->env->getExtension("native_profiler");
        $__internal_145e98a1ceec311f391a6c7dc870012145b48fd632e8e39f197086ba3b4ae56d->enter($__internal_145e98a1ceec311f391a6c7dc870012145b48fd632e8e39f197086ba3b4ae56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_145e98a1ceec311f391a6c7dc870012145b48fd632e8e39f197086ba3b4ae56d->leave($__internal_145e98a1ceec311f391a6c7dc870012145b48fd632e8e39f197086ba3b4ae56d_prof);

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
