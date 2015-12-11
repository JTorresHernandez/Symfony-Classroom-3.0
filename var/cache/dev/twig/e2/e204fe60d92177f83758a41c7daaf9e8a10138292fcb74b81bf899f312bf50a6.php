<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_87cb0b52e7f94f7a0c47d6b92415cfe760f603d4efba93ba803159d97d566f18 = $this->env->getExtension("native_profiler");
        $__internal_87cb0b52e7f94f7a0c47d6b92415cfe760f603d4efba93ba803159d97d566f18->enter($__internal_87cb0b52e7f94f7a0c47d6b92415cfe760f603d4efba93ba803159d97d566f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87cb0b52e7f94f7a0c47d6b92415cfe760f603d4efba93ba803159d97d566f18->leave($__internal_87cb0b52e7f94f7a0c47d6b92415cfe760f603d4efba93ba803159d97d566f18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d3f549aea2b9618f1e9b43e28aa2263c5ca575171f1d391a099f8d64b9d601e = $this->env->getExtension("native_profiler");
        $__internal_8d3f549aea2b9618f1e9b43e28aa2263c5ca575171f1d391a099f8d64b9d601e->enter($__internal_8d3f549aea2b9618f1e9b43e28aa2263c5ca575171f1d391a099f8d64b9d601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8d3f549aea2b9618f1e9b43e28aa2263c5ca575171f1d391a099f8d64b9d601e->leave($__internal_8d3f549aea2b9618f1e9b43e28aa2263c5ca575171f1d391a099f8d64b9d601e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
