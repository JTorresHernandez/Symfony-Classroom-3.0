<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_fde2d22f5229a8cb89d2eac4681584f0b1d182b19232d00bd07b75f09a1e9a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_434b05496194b356db32b1d717ad32867a2265f54a05413e7ea7b789f8f61069 = $this->env->getExtension("native_profiler");
        $__internal_434b05496194b356db32b1d717ad32867a2265f54a05413e7ea7b789f8f61069->enter($__internal_434b05496194b356db32b1d717ad32867a2265f54a05413e7ea7b789f8f61069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434b05496194b356db32b1d717ad32867a2265f54a05413e7ea7b789f8f61069->leave($__internal_434b05496194b356db32b1d717ad32867a2265f54a05413e7ea7b789f8f61069_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab9a37a3116d8ff318de78f37769f2d4da2cacc96973bf32d450029671333ef1 = $this->env->getExtension("native_profiler");
        $__internal_ab9a37a3116d8ff318de78f37769f2d4da2cacc96973bf32d450029671333ef1->enter($__internal_ab9a37a3116d8ff318de78f37769f2d4da2cacc96973bf32d450029671333ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ab9a37a3116d8ff318de78f37769f2d4da2cacc96973bf32d450029671333ef1->leave($__internal_ab9a37a3116d8ff318de78f37769f2d4da2cacc96973bf32d450029671333ef1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
