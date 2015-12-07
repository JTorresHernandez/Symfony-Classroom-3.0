<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_be91cb43978f68c5ee85502454857112c35c4c3d56a8150dea7d1c4a830ba6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_5cbc31fcaecd976e63f7f38a9f6a36316bf80cdfa0f553593052c7ddd0e7f2eb = $this->env->getExtension("native_profiler");
        $__internal_5cbc31fcaecd976e63f7f38a9f6a36316bf80cdfa0f553593052c7ddd0e7f2eb->enter($__internal_5cbc31fcaecd976e63f7f38a9f6a36316bf80cdfa0f553593052c7ddd0e7f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cbc31fcaecd976e63f7f38a9f6a36316bf80cdfa0f553593052c7ddd0e7f2eb->leave($__internal_5cbc31fcaecd976e63f7f38a9f6a36316bf80cdfa0f553593052c7ddd0e7f2eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93a3620352c9a9f069d236ed718e482903ad4ebd50e47ab124b20d6013fe35ab = $this->env->getExtension("native_profiler");
        $__internal_93a3620352c9a9f069d236ed718e482903ad4ebd50e47ab124b20d6013fe35ab->enter($__internal_93a3620352c9a9f069d236ed718e482903ad4ebd50e47ab124b20d6013fe35ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_93a3620352c9a9f069d236ed718e482903ad4ebd50e47ab124b20d6013fe35ab->leave($__internal_93a3620352c9a9f069d236ed718e482903ad4ebd50e47ab124b20d6013fe35ab_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
