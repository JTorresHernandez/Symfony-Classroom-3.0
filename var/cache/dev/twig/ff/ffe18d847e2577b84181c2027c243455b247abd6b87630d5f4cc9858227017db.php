<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2f6fe825c3d811714652473979c60896c63ca6ec0d8dc898977f5ca1ea459a07 extends Twig_Template
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
        $__internal_72a06b09e396f2989cc6fcf55d07bb7ce6751ea16b2dbc875c64faeea65f676b = $this->env->getExtension("native_profiler");
        $__internal_72a06b09e396f2989cc6fcf55d07bb7ce6751ea16b2dbc875c64faeea65f676b->enter($__internal_72a06b09e396f2989cc6fcf55d07bb7ce6751ea16b2dbc875c64faeea65f676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a06b09e396f2989cc6fcf55d07bb7ce6751ea16b2dbc875c64faeea65f676b->leave($__internal_72a06b09e396f2989cc6fcf55d07bb7ce6751ea16b2dbc875c64faeea65f676b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cd81c61e415e01cfd68c655a21922725077849652baabdb4e9c93a98da59156 = $this->env->getExtension("native_profiler");
        $__internal_8cd81c61e415e01cfd68c655a21922725077849652baabdb4e9c93a98da59156->enter($__internal_8cd81c61e415e01cfd68c655a21922725077849652baabdb4e9c93a98da59156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8cd81c61e415e01cfd68c655a21922725077849652baabdb4e9c93a98da59156->leave($__internal_8cd81c61e415e01cfd68c655a21922725077849652baabdb4e9c93a98da59156_prof);

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
