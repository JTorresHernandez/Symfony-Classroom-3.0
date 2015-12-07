<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_4b77edffd51161294672c75f74fb457afbd6d30d482005b4afd2bd31b1ae75bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_535d2fc9b205610bd3278d0cf761d5edc45e9c278a61d3414ede348a8142bd16 = $this->env->getExtension("native_profiler");
        $__internal_535d2fc9b205610bd3278d0cf761d5edc45e9c278a61d3414ede348a8142bd16->enter($__internal_535d2fc9b205610bd3278d0cf761d5edc45e9c278a61d3414ede348a8142bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535d2fc9b205610bd3278d0cf761d5edc45e9c278a61d3414ede348a8142bd16->leave($__internal_535d2fc9b205610bd3278d0cf761d5edc45e9c278a61d3414ede348a8142bd16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fe697c750ce56920a11ee711d87b985a2eaa631a9b11270336a7d1273a882dd = $this->env->getExtension("native_profiler");
        $__internal_5fe697c750ce56920a11ee711d87b985a2eaa631a9b11270336a7d1273a882dd->enter($__internal_5fe697c750ce56920a11ee711d87b985a2eaa631a9b11270336a7d1273a882dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5fe697c750ce56920a11ee711d87b985a2eaa631a9b11270336a7d1273a882dd->leave($__internal_5fe697c750ce56920a11ee711d87b985a2eaa631a9b11270336a7d1273a882dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
