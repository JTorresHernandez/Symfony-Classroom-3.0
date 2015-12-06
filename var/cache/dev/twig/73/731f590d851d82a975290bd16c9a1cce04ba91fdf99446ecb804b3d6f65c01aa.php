<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_a3e3c59a99356ec70b17beaf7a5e29c49374778ed4c1af9f7dbce29ae9aff8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_28f945de5d8d385b6998eddd4be5b5771179d439f7f22367bf7d39a4e9cf2ef2 = $this->env->getExtension("native_profiler");
        $__internal_28f945de5d8d385b6998eddd4be5b5771179d439f7f22367bf7d39a4e9cf2ef2->enter($__internal_28f945de5d8d385b6998eddd4be5b5771179d439f7f22367bf7d39a4e9cf2ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f945de5d8d385b6998eddd4be5b5771179d439f7f22367bf7d39a4e9cf2ef2->leave($__internal_28f945de5d8d385b6998eddd4be5b5771179d439f7f22367bf7d39a4e9cf2ef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b55dedc50365e6ce9b5f8cb19486647b1d530767a67e966417e441e0862b8261 = $this->env->getExtension("native_profiler");
        $__internal_b55dedc50365e6ce9b5f8cb19486647b1d530767a67e966417e441e0862b8261->enter($__internal_b55dedc50365e6ce9b5f8cb19486647b1d530767a67e966417e441e0862b8261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b55dedc50365e6ce9b5f8cb19486647b1d530767a67e966417e441e0862b8261->leave($__internal_b55dedc50365e6ce9b5f8cb19486647b1d530767a67e966417e441e0862b8261_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
