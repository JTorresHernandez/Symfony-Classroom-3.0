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
        $__internal_6075743668543ae42435f93d515174315fa1e08dbdec5804f4d279fd0c80a028 = $this->env->getExtension("native_profiler");
        $__internal_6075743668543ae42435f93d515174315fa1e08dbdec5804f4d279fd0c80a028->enter($__internal_6075743668543ae42435f93d515174315fa1e08dbdec5804f4d279fd0c80a028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6075743668543ae42435f93d515174315fa1e08dbdec5804f4d279fd0c80a028->leave($__internal_6075743668543ae42435f93d515174315fa1e08dbdec5804f4d279fd0c80a028_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6566d3b9b906d9c18c7be818500f11f1bba7c8f67829f7d04f91bc7816c167b = $this->env->getExtension("native_profiler");
        $__internal_b6566d3b9b906d9c18c7be818500f11f1bba7c8f67829f7d04f91bc7816c167b->enter($__internal_b6566d3b9b906d9c18c7be818500f11f1bba7c8f67829f7d04f91bc7816c167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b6566d3b9b906d9c18c7be818500f11f1bba7c8f67829f7d04f91bc7816c167b->leave($__internal_b6566d3b9b906d9c18c7be818500f11f1bba7c8f67829f7d04f91bc7816c167b_prof);

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
