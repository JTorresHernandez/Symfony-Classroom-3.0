<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e05afe6fb3631dc00f005896e40e670c52e4a9ac093f0787f4a757f22cdd3cc extends Twig_Template
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
        $__internal_a3cb5f921d5a6d0093e619ce6333ad95487da2c97a37e0269bb4fabceb278baf = $this->env->getExtension("native_profiler");
        $__internal_a3cb5f921d5a6d0093e619ce6333ad95487da2c97a37e0269bb4fabceb278baf->enter($__internal_a3cb5f921d5a6d0093e619ce6333ad95487da2c97a37e0269bb4fabceb278baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cb5f921d5a6d0093e619ce6333ad95487da2c97a37e0269bb4fabceb278baf->leave($__internal_a3cb5f921d5a6d0093e619ce6333ad95487da2c97a37e0269bb4fabceb278baf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8af97dc3ed5a41f58b32f7f8131e652c7587cd63794b08c69580ecac9e3c402b = $this->env->getExtension("native_profiler");
        $__internal_8af97dc3ed5a41f58b32f7f8131e652c7587cd63794b08c69580ecac9e3c402b->enter($__internal_8af97dc3ed5a41f58b32f7f8131e652c7587cd63794b08c69580ecac9e3c402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8af97dc3ed5a41f58b32f7f8131e652c7587cd63794b08c69580ecac9e3c402b->leave($__internal_8af97dc3ed5a41f58b32f7f8131e652c7587cd63794b08c69580ecac9e3c402b_prof);

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
