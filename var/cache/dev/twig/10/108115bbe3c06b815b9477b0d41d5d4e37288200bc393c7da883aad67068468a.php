<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0038cd17f05e0303f5747f09e6ed8dcee9fd8a09557fe761fc8600776cfb91ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ce38e050fa24ee8114e8575e2451d20aa4e77f7881c98abd4c5a6735f6403e1a = $this->env->getExtension("native_profiler");
        $__internal_ce38e050fa24ee8114e8575e2451d20aa4e77f7881c98abd4c5a6735f6403e1a->enter($__internal_ce38e050fa24ee8114e8575e2451d20aa4e77f7881c98abd4c5a6735f6403e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce38e050fa24ee8114e8575e2451d20aa4e77f7881c98abd4c5a6735f6403e1a->leave($__internal_ce38e050fa24ee8114e8575e2451d20aa4e77f7881c98abd4c5a6735f6403e1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7db948bb69a55e4cc1b21a633bcb10c04b0e4f34d1f792605e57c348728b668f = $this->env->getExtension("native_profiler");
        $__internal_7db948bb69a55e4cc1b21a633bcb10c04b0e4f34d1f792605e57c348728b668f->enter($__internal_7db948bb69a55e4cc1b21a633bcb10c04b0e4f34d1f792605e57c348728b668f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7db948bb69a55e4cc1b21a633bcb10c04b0e4f34d1f792605e57c348728b668f->leave($__internal_7db948bb69a55e4cc1b21a633bcb10c04b0e4f34d1f792605e57c348728b668f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
