<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_00cfe5d74b4714f7f5628966f292bf099d318278016e8901541baa800fb9e2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_5ed277d214be83953f04ad4facdb37933ffea24b13ade8c0b7402c2553692d6e = $this->env->getExtension("native_profiler");
        $__internal_5ed277d214be83953f04ad4facdb37933ffea24b13ade8c0b7402c2553692d6e->enter($__internal_5ed277d214be83953f04ad4facdb37933ffea24b13ade8c0b7402c2553692d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed277d214be83953f04ad4facdb37933ffea24b13ade8c0b7402c2553692d6e->leave($__internal_5ed277d214be83953f04ad4facdb37933ffea24b13ade8c0b7402c2553692d6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_460372525b3d327ee398833ea4abd225cff58cfc4d62add7ae3d71036f1a13fd = $this->env->getExtension("native_profiler");
        $__internal_460372525b3d327ee398833ea4abd225cff58cfc4d62add7ae3d71036f1a13fd->enter($__internal_460372525b3d327ee398833ea4abd225cff58cfc4d62add7ae3d71036f1a13fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_460372525b3d327ee398833ea4abd225cff58cfc4d62add7ae3d71036f1a13fd->leave($__internal_460372525b3d327ee398833ea4abd225cff58cfc4d62add7ae3d71036f1a13fd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
