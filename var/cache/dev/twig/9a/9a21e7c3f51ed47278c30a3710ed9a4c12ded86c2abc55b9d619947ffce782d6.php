<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cebab6148fe8d4d08c850d2c81b173264562cb65f32f09d1255f561e0024eb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_06d4064f69f1a9b7884c5b1d2c648acb1d803305516159d34e305abaad6222ee = $this->env->getExtension("native_profiler");
        $__internal_06d4064f69f1a9b7884c5b1d2c648acb1d803305516159d34e305abaad6222ee->enter($__internal_06d4064f69f1a9b7884c5b1d2c648acb1d803305516159d34e305abaad6222ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d4064f69f1a9b7884c5b1d2c648acb1d803305516159d34e305abaad6222ee->leave($__internal_06d4064f69f1a9b7884c5b1d2c648acb1d803305516159d34e305abaad6222ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb21da08811c3075d99b12b2d231e1bf9be062063e7ffb3cfbe79979a050da59 = $this->env->getExtension("native_profiler");
        $__internal_fb21da08811c3075d99b12b2d231e1bf9be062063e7ffb3cfbe79979a050da59->enter($__internal_fb21da08811c3075d99b12b2d231e1bf9be062063e7ffb3cfbe79979a050da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_fb21da08811c3075d99b12b2d231e1bf9be062063e7ffb3cfbe79979a050da59->leave($__internal_fb21da08811c3075d99b12b2d231e1bf9be062063e7ffb3cfbe79979a050da59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
