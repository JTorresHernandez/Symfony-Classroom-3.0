<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6bf8e6b5c4066c8fd691753cefd8abc41dc4be94f57f648e5b664cfc28576d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_38bb8d4aa4ae6942b2458e282338bd506a3f342b81e39f18165161ec5a80c943 = $this->env->getExtension("native_profiler");
        $__internal_38bb8d4aa4ae6942b2458e282338bd506a3f342b81e39f18165161ec5a80c943->enter($__internal_38bb8d4aa4ae6942b2458e282338bd506a3f342b81e39f18165161ec5a80c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38bb8d4aa4ae6942b2458e282338bd506a3f342b81e39f18165161ec5a80c943->leave($__internal_38bb8d4aa4ae6942b2458e282338bd506a3f342b81e39f18165161ec5a80c943_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_053461ba9d0a36537a62d4ba2d49df6612e141a7ce66eb082e207974206081a7 = $this->env->getExtension("native_profiler");
        $__internal_053461ba9d0a36537a62d4ba2d49df6612e141a7ce66eb082e207974206081a7->enter($__internal_053461ba9d0a36537a62d4ba2d49df6612e141a7ce66eb082e207974206081a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_053461ba9d0a36537a62d4ba2d49df6612e141a7ce66eb082e207974206081a7->leave($__internal_053461ba9d0a36537a62d4ba2d49df6612e141a7ce66eb082e207974206081a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
