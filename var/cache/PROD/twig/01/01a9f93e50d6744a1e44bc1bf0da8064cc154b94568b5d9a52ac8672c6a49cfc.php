<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_93bfc92421fbb939eb214660cf81e2e22f8d03036f5905205f20aedfc1c7c9c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e524df42b7d7dfed2eac828deae3b5d88d2d2676113dfbebf4e0aec8555d95c8 = $this->env->getExtension("native_profiler");
        $__internal_e524df42b7d7dfed2eac828deae3b5d88d2d2676113dfbebf4e0aec8555d95c8->enter($__internal_e524df42b7d7dfed2eac828deae3b5d88d2d2676113dfbebf4e0aec8555d95c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e524df42b7d7dfed2eac828deae3b5d88d2d2676113dfbebf4e0aec8555d95c8->leave($__internal_e524df42b7d7dfed2eac828deae3b5d88d2d2676113dfbebf4e0aec8555d95c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed39c41199976f65593e9464c42ae5bfe874f79755bbc7353d0894538e237250 = $this->env->getExtension("native_profiler");
        $__internal_ed39c41199976f65593e9464c42ae5bfe874f79755bbc7353d0894538e237250->enter($__internal_ed39c41199976f65593e9464c42ae5bfe874f79755bbc7353d0894538e237250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ed39c41199976f65593e9464c42ae5bfe874f79755bbc7353d0894538e237250->leave($__internal_ed39c41199976f65593e9464c42ae5bfe874f79755bbc7353d0894538e237250_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
