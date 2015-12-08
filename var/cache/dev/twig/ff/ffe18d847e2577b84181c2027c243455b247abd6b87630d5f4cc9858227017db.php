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
        $__internal_83b56d008f5d77581b4c6d784b63cf6c1074d3b82c5e195930f0635ff064afae = $this->env->getExtension("native_profiler");
        $__internal_83b56d008f5d77581b4c6d784b63cf6c1074d3b82c5e195930f0635ff064afae->enter($__internal_83b56d008f5d77581b4c6d784b63cf6c1074d3b82c5e195930f0635ff064afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b56d008f5d77581b4c6d784b63cf6c1074d3b82c5e195930f0635ff064afae->leave($__internal_83b56d008f5d77581b4c6d784b63cf6c1074d3b82c5e195930f0635ff064afae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12600befd84bdecb2ebc54f8f48ccd9590ae04546536e03810956e35e24e1bd4 = $this->env->getExtension("native_profiler");
        $__internal_12600befd84bdecb2ebc54f8f48ccd9590ae04546536e03810956e35e24e1bd4->enter($__internal_12600befd84bdecb2ebc54f8f48ccd9590ae04546536e03810956e35e24e1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_12600befd84bdecb2ebc54f8f48ccd9590ae04546536e03810956e35e24e1bd4->leave($__internal_12600befd84bdecb2ebc54f8f48ccd9590ae04546536e03810956e35e24e1bd4_prof);

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
