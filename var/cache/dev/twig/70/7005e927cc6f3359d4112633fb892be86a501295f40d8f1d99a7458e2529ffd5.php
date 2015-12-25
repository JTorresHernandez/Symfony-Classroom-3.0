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
        $__internal_c69a7c86a3c7a5a5efde974afbbdcba7af38192eaef0c203efdc94b18bcccc7c = $this->env->getExtension("native_profiler");
        $__internal_c69a7c86a3c7a5a5efde974afbbdcba7af38192eaef0c203efdc94b18bcccc7c->enter($__internal_c69a7c86a3c7a5a5efde974afbbdcba7af38192eaef0c203efdc94b18bcccc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69a7c86a3c7a5a5efde974afbbdcba7af38192eaef0c203efdc94b18bcccc7c->leave($__internal_c69a7c86a3c7a5a5efde974afbbdcba7af38192eaef0c203efdc94b18bcccc7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde2ea41fb487b5534ea10d9d2b53c95d5cdd3f7fb7e2e70efccac5f358c4c77 = $this->env->getExtension("native_profiler");
        $__internal_fde2ea41fb487b5534ea10d9d2b53c95d5cdd3f7fb7e2e70efccac5f358c4c77->enter($__internal_fde2ea41fb487b5534ea10d9d2b53c95d5cdd3f7fb7e2e70efccac5f358c4c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fde2ea41fb487b5534ea10d9d2b53c95d5cdd3f7fb7e2e70efccac5f358c4c77->leave($__internal_fde2ea41fb487b5534ea10d9d2b53c95d5cdd3f7fb7e2e70efccac5f358c4c77_prof);

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
