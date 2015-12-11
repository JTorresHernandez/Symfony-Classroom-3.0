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
        $__internal_b3d3f9fc0658f68cf9788225cec5abcf2e940b77b400e79e2c42eccdb6afcf6e = $this->env->getExtension("native_profiler");
        $__internal_b3d3f9fc0658f68cf9788225cec5abcf2e940b77b400e79e2c42eccdb6afcf6e->enter($__internal_b3d3f9fc0658f68cf9788225cec5abcf2e940b77b400e79e2c42eccdb6afcf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d3f9fc0658f68cf9788225cec5abcf2e940b77b400e79e2c42eccdb6afcf6e->leave($__internal_b3d3f9fc0658f68cf9788225cec5abcf2e940b77b400e79e2c42eccdb6afcf6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d08ea1276e5fa6b03cf752c124cabc7cc51868f8bd9c21edde4e499869d2648d = $this->env->getExtension("native_profiler");
        $__internal_d08ea1276e5fa6b03cf752c124cabc7cc51868f8bd9c21edde4e499869d2648d->enter($__internal_d08ea1276e5fa6b03cf752c124cabc7cc51868f8bd9c21edde4e499869d2648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d08ea1276e5fa6b03cf752c124cabc7cc51868f8bd9c21edde4e499869d2648d->leave($__internal_d08ea1276e5fa6b03cf752c124cabc7cc51868f8bd9c21edde4e499869d2648d_prof);

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
