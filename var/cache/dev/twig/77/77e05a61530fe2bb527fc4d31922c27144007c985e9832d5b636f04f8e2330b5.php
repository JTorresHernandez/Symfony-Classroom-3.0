<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3322a17322d9b37e954455b7d43aa0919e7a9671b8d7d2a7866d814cdc58cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_82ea94189e946a4f05f7b4bb618fbad0c0145248e24fd9c14e3a17f339335694 = $this->env->getExtension("native_profiler");
        $__internal_82ea94189e946a4f05f7b4bb618fbad0c0145248e24fd9c14e3a17f339335694->enter($__internal_82ea94189e946a4f05f7b4bb618fbad0c0145248e24fd9c14e3a17f339335694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ea94189e946a4f05f7b4bb618fbad0c0145248e24fd9c14e3a17f339335694->leave($__internal_82ea94189e946a4f05f7b4bb618fbad0c0145248e24fd9c14e3a17f339335694_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_172f4863c9d8b21ab5e419b274c80ce0529d9c5c288132576f0810c283d2e97b = $this->env->getExtension("native_profiler");
        $__internal_172f4863c9d8b21ab5e419b274c80ce0529d9c5c288132576f0810c283d2e97b->enter($__internal_172f4863c9d8b21ab5e419b274c80ce0529d9c5c288132576f0810c283d2e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_172f4863c9d8b21ab5e419b274c80ce0529d9c5c288132576f0810c283d2e97b->leave($__internal_172f4863c9d8b21ab5e419b274c80ce0529d9c5c288132576f0810c283d2e97b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
