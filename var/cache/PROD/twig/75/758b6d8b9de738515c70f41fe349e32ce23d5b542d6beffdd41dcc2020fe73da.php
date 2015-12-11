<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_b52186fdae51dd3ce7e5bfec84d105d91c93234c53fe35f73366843f6c0473eb extends Twig_Template
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
        $__internal_a1b3addc641869aadb7cfa8d9f78e2864db5779aa87be959d6c0eb483b80ff78 = $this->env->getExtension("native_profiler");
        $__internal_a1b3addc641869aadb7cfa8d9f78e2864db5779aa87be959d6c0eb483b80ff78->enter($__internal_a1b3addc641869aadb7cfa8d9f78e2864db5779aa87be959d6c0eb483b80ff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b3addc641869aadb7cfa8d9f78e2864db5779aa87be959d6c0eb483b80ff78->leave($__internal_a1b3addc641869aadb7cfa8d9f78e2864db5779aa87be959d6c0eb483b80ff78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7666c52eb1bff55be4d1220ebc3675c5c7592588d41adb56a86ba54dff3d3fb3 = $this->env->getExtension("native_profiler");
        $__internal_7666c52eb1bff55be4d1220ebc3675c5c7592588d41adb56a86ba54dff3d3fb3->enter($__internal_7666c52eb1bff55be4d1220ebc3675c5c7592588d41adb56a86ba54dff3d3fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7666c52eb1bff55be4d1220ebc3675c5c7592588d41adb56a86ba54dff3d3fb3->leave($__internal_7666c52eb1bff55be4d1220ebc3675c5c7592588d41adb56a86ba54dff3d3fb3_prof);

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
