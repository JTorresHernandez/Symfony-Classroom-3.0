<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_cdb31b25542149425a3fe966a90fceda399c99a5e7741e3fe16971d1922da821 = $this->env->getExtension("native_profiler");
        $__internal_cdb31b25542149425a3fe966a90fceda399c99a5e7741e3fe16971d1922da821->enter($__internal_cdb31b25542149425a3fe966a90fceda399c99a5e7741e3fe16971d1922da821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb31b25542149425a3fe966a90fceda399c99a5e7741e3fe16971d1922da821->leave($__internal_cdb31b25542149425a3fe966a90fceda399c99a5e7741e3fe16971d1922da821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b045fdce254fb710b7bf3e97377f4e5dd4a5b3e0282c486e75432d1b8ac554a = $this->env->getExtension("native_profiler");
        $__internal_7b045fdce254fb710b7bf3e97377f4e5dd4a5b3e0282c486e75432d1b8ac554a->enter($__internal_7b045fdce254fb710b7bf3e97377f4e5dd4a5b3e0282c486e75432d1b8ac554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7b045fdce254fb710b7bf3e97377f4e5dd4a5b3e0282c486e75432d1b8ac554a->leave($__internal_7b045fdce254fb710b7bf3e97377f4e5dd4a5b3e0282c486e75432d1b8ac554a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
