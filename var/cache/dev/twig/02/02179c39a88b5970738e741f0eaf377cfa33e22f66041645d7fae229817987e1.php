<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_2b747d0c4c2bd2b6932d30bdfeab395222839fdc2c50733fa78fdb61ad8bd723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6f03467495473644ba9e9ed570bf66768c5c24f73894ed13f32b35d176fffca6 = $this->env->getExtension("native_profiler");
        $__internal_6f03467495473644ba9e9ed570bf66768c5c24f73894ed13f32b35d176fffca6->enter($__internal_6f03467495473644ba9e9ed570bf66768c5c24f73894ed13f32b35d176fffca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f03467495473644ba9e9ed570bf66768c5c24f73894ed13f32b35d176fffca6->leave($__internal_6f03467495473644ba9e9ed570bf66768c5c24f73894ed13f32b35d176fffca6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9df9ff0c4b402d576eccb73316ee95a37f6f874baa5e3c335e6d309ef8ec6883 = $this->env->getExtension("native_profiler");
        $__internal_9df9ff0c4b402d576eccb73316ee95a37f6f874baa5e3c335e6d309ef8ec6883->enter($__internal_9df9ff0c4b402d576eccb73316ee95a37f6f874baa5e3c335e6d309ef8ec6883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9df9ff0c4b402d576eccb73316ee95a37f6f874baa5e3c335e6d309ef8ec6883->leave($__internal_9df9ff0c4b402d576eccb73316ee95a37f6f874baa5e3c335e6d309ef8ec6883_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
