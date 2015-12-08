<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_54fc352fe3812ceddb43bfa35cc2740d696b61638179b51f1f930565c2ca9deb extends Twig_Template
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
        $__internal_6ab1bbe02693fca46e24568bc91250458aa960791e7367190c3cad5e92a26e1a = $this->env->getExtension("native_profiler");
        $__internal_6ab1bbe02693fca46e24568bc91250458aa960791e7367190c3cad5e92a26e1a->enter($__internal_6ab1bbe02693fca46e24568bc91250458aa960791e7367190c3cad5e92a26e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab1bbe02693fca46e24568bc91250458aa960791e7367190c3cad5e92a26e1a->leave($__internal_6ab1bbe02693fca46e24568bc91250458aa960791e7367190c3cad5e92a26e1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e5be2a81af7c397a8460cb07e880ff800a2c5d2e8d6b9249548b5405ccd8d82 = $this->env->getExtension("native_profiler");
        $__internal_8e5be2a81af7c397a8460cb07e880ff800a2c5d2e8d6b9249548b5405ccd8d82->enter($__internal_8e5be2a81af7c397a8460cb07e880ff800a2c5d2e8d6b9249548b5405ccd8d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8e5be2a81af7c397a8460cb07e880ff800a2c5d2e8d6b9249548b5405ccd8d82->leave($__internal_8e5be2a81af7c397a8460cb07e880ff800a2c5d2e8d6b9249548b5405ccd8d82_prof);

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
