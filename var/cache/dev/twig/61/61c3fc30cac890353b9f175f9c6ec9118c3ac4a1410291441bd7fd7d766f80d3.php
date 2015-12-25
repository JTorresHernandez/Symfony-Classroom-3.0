<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_44edd0093cd159b9a194d13f2d70a6267e91b513af71b5d92d1755526473188b extends Twig_Template
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
        $__internal_5a8887cf541a04e2229c457b8d9fe8ea211be48dee61b60df123829175ba6fa2 = $this->env->getExtension("native_profiler");
        $__internal_5a8887cf541a04e2229c457b8d9fe8ea211be48dee61b60df123829175ba6fa2->enter($__internal_5a8887cf541a04e2229c457b8d9fe8ea211be48dee61b60df123829175ba6fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8887cf541a04e2229c457b8d9fe8ea211be48dee61b60df123829175ba6fa2->leave($__internal_5a8887cf541a04e2229c457b8d9fe8ea211be48dee61b60df123829175ba6fa2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e43868bdad42afea579a9d6dfbd19ce88518ec16fd6f7b510fb8f6ee7b9a0872 = $this->env->getExtension("native_profiler");
        $__internal_e43868bdad42afea579a9d6dfbd19ce88518ec16fd6f7b510fb8f6ee7b9a0872->enter($__internal_e43868bdad42afea579a9d6dfbd19ce88518ec16fd6f7b510fb8f6ee7b9a0872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e43868bdad42afea579a9d6dfbd19ce88518ec16fd6f7b510fb8f6ee7b9a0872->leave($__internal_e43868bdad42afea579a9d6dfbd19ce88518ec16fd6f7b510fb8f6ee7b9a0872_prof);

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
