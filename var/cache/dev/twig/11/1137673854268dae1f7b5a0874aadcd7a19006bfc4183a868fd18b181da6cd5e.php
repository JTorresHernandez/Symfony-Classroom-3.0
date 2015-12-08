<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_125aa3a0e5f754306ad043737a95b0b7b5a6ecb9a75290da57f4622985430373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7c4f833e949c73df9e5a9fe4d728cb9258bf043d30c1fdf74a7fee1a1a518468 = $this->env->getExtension("native_profiler");
        $__internal_7c4f833e949c73df9e5a9fe4d728cb9258bf043d30c1fdf74a7fee1a1a518468->enter($__internal_7c4f833e949c73df9e5a9fe4d728cb9258bf043d30c1fdf74a7fee1a1a518468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4f833e949c73df9e5a9fe4d728cb9258bf043d30c1fdf74a7fee1a1a518468->leave($__internal_7c4f833e949c73df9e5a9fe4d728cb9258bf043d30c1fdf74a7fee1a1a518468_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4dc1748a16d7cf9d39372ca6e619e55d27013cf6b3a35a626866fff271ac517 = $this->env->getExtension("native_profiler");
        $__internal_e4dc1748a16d7cf9d39372ca6e619e55d27013cf6b3a35a626866fff271ac517->enter($__internal_e4dc1748a16d7cf9d39372ca6e619e55d27013cf6b3a35a626866fff271ac517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e4dc1748a16d7cf9d39372ca6e619e55d27013cf6b3a35a626866fff271ac517->leave($__internal_e4dc1748a16d7cf9d39372ca6e619e55d27013cf6b3a35a626866fff271ac517_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
