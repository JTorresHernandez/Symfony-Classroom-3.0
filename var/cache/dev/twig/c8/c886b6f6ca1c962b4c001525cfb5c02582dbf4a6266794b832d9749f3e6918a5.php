<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_fde2d22f5229a8cb89d2eac4681584f0b1d182b19232d00bd07b75f09a1e9a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_659553ec1c2e7a4cc5a9fb764a98cedef8cdb9c92df51a966581e0ed4514661a = $this->env->getExtension("native_profiler");
        $__internal_659553ec1c2e7a4cc5a9fb764a98cedef8cdb9c92df51a966581e0ed4514661a->enter($__internal_659553ec1c2e7a4cc5a9fb764a98cedef8cdb9c92df51a966581e0ed4514661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659553ec1c2e7a4cc5a9fb764a98cedef8cdb9c92df51a966581e0ed4514661a->leave($__internal_659553ec1c2e7a4cc5a9fb764a98cedef8cdb9c92df51a966581e0ed4514661a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f76d33089bf8baecde6683b0aac8c6ab9a7fe396ff8f85b9dc5d72523ffed487 = $this->env->getExtension("native_profiler");
        $__internal_f76d33089bf8baecde6683b0aac8c6ab9a7fe396ff8f85b9dc5d72523ffed487->enter($__internal_f76d33089bf8baecde6683b0aac8c6ab9a7fe396ff8f85b9dc5d72523ffed487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f76d33089bf8baecde6683b0aac8c6ab9a7fe396ff8f85b9dc5d72523ffed487->leave($__internal_f76d33089bf8baecde6683b0aac8c6ab9a7fe396ff8f85b9dc5d72523ffed487_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
