<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_da02c1e86299d5505c79e34288e3b6385a51ee9b1e745167399367bcf924f00e extends Twig_Template
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
        $__internal_74b5724549fb53b5cff19cb706819748e158c438b0675055603c668e7da44bae = $this->env->getExtension("native_profiler");
        $__internal_74b5724549fb53b5cff19cb706819748e158c438b0675055603c668e7da44bae->enter($__internal_74b5724549fb53b5cff19cb706819748e158c438b0675055603c668e7da44bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b5724549fb53b5cff19cb706819748e158c438b0675055603c668e7da44bae->leave($__internal_74b5724549fb53b5cff19cb706819748e158c438b0675055603c668e7da44bae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fcb4574caf4063d02769baf5f4ae624529ca443dcb0b62170997d8bd6268a38 = $this->env->getExtension("native_profiler");
        $__internal_4fcb4574caf4063d02769baf5f4ae624529ca443dcb0b62170997d8bd6268a38->enter($__internal_4fcb4574caf4063d02769baf5f4ae624529ca443dcb0b62170997d8bd6268a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4fcb4574caf4063d02769baf5f4ae624529ca443dcb0b62170997d8bd6268a38->leave($__internal_4fcb4574caf4063d02769baf5f4ae624529ca443dcb0b62170997d8bd6268a38_prof);

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
