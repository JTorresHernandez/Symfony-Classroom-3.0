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
        $__internal_ad10df3f3eafd0705f5e232586ca4b88f5af9cb072459d593d713a271084b2b7 = $this->env->getExtension("native_profiler");
        $__internal_ad10df3f3eafd0705f5e232586ca4b88f5af9cb072459d593d713a271084b2b7->enter($__internal_ad10df3f3eafd0705f5e232586ca4b88f5af9cb072459d593d713a271084b2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad10df3f3eafd0705f5e232586ca4b88f5af9cb072459d593d713a271084b2b7->leave($__internal_ad10df3f3eafd0705f5e232586ca4b88f5af9cb072459d593d713a271084b2b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc6409d3d81219668c9fe579e45b6e1cad53c1277ac8093d5f964d025ee6f50f = $this->env->getExtension("native_profiler");
        $__internal_cc6409d3d81219668c9fe579e45b6e1cad53c1277ac8093d5f964d025ee6f50f->enter($__internal_cc6409d3d81219668c9fe579e45b6e1cad53c1277ac8093d5f964d025ee6f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cc6409d3d81219668c9fe579e45b6e1cad53c1277ac8093d5f964d025ee6f50f->leave($__internal_cc6409d3d81219668c9fe579e45b6e1cad53c1277ac8093d5f964d025ee6f50f_prof);

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
