<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_da02c1e86299d5505c79e34288e3b6385a51ee9b1e745167399367bcf924f00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_d73744d8fa2dc24b90961f946680a9a3563f60556f09a049217abb087ff72406 = $this->env->getExtension("native_profiler");
        $__internal_d73744d8fa2dc24b90961f946680a9a3563f60556f09a049217abb087ff72406->enter($__internal_d73744d8fa2dc24b90961f946680a9a3563f60556f09a049217abb087ff72406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73744d8fa2dc24b90961f946680a9a3563f60556f09a049217abb087ff72406->leave($__internal_d73744d8fa2dc24b90961f946680a9a3563f60556f09a049217abb087ff72406_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b4fd04e859095cc44a8dffc6c19d503c91f7ed58d6d341cd49cc3ce4c8a2df9 = $this->env->getExtension("native_profiler");
        $__internal_1b4fd04e859095cc44a8dffc6c19d503c91f7ed58d6d341cd49cc3ce4c8a2df9->enter($__internal_1b4fd04e859095cc44a8dffc6c19d503c91f7ed58d6d341cd49cc3ce4c8a2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1b4fd04e859095cc44a8dffc6c19d503c91f7ed58d6d341cd49cc3ce4c8a2df9->leave($__internal_1b4fd04e859095cc44a8dffc6c19d503c91f7ed58d6d341cd49cc3ce4c8a2df9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
