<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b26d616c91b49f53be175150a0c56d42ba2557a408c0a503c515b62add43e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e1b24d046dc1bceeab9e96352cbedc19c1309b31e63ea6ebf827f82e63eaff44 = $this->env->getExtension("native_profiler");
        $__internal_e1b24d046dc1bceeab9e96352cbedc19c1309b31e63ea6ebf827f82e63eaff44->enter($__internal_e1b24d046dc1bceeab9e96352cbedc19c1309b31e63ea6ebf827f82e63eaff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b24d046dc1bceeab9e96352cbedc19c1309b31e63ea6ebf827f82e63eaff44->leave($__internal_e1b24d046dc1bceeab9e96352cbedc19c1309b31e63ea6ebf827f82e63eaff44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0c98f6aa1002e4dc5fcdf56defbd3be11998f9d5045ad388d61b1cefec84fac = $this->env->getExtension("native_profiler");
        $__internal_e0c98f6aa1002e4dc5fcdf56defbd3be11998f9d5045ad388d61b1cefec84fac->enter($__internal_e0c98f6aa1002e4dc5fcdf56defbd3be11998f9d5045ad388d61b1cefec84fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e0c98f6aa1002e4dc5fcdf56defbd3be11998f9d5045ad388d61b1cefec84fac->leave($__internal_e0c98f6aa1002e4dc5fcdf56defbd3be11998f9d5045ad388d61b1cefec84fac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
