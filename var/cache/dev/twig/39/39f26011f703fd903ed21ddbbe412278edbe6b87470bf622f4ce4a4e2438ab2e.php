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
        $__internal_4dba71c06e8de7f4188a3ef3e2f43e95106b3084e5907bfe253b595a48370244 = $this->env->getExtension("native_profiler");
        $__internal_4dba71c06e8de7f4188a3ef3e2f43e95106b3084e5907bfe253b595a48370244->enter($__internal_4dba71c06e8de7f4188a3ef3e2f43e95106b3084e5907bfe253b595a48370244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dba71c06e8de7f4188a3ef3e2f43e95106b3084e5907bfe253b595a48370244->leave($__internal_4dba71c06e8de7f4188a3ef3e2f43e95106b3084e5907bfe253b595a48370244_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb232c8a8bb37fb0678fe014ee73f9b8812e06780cf8e921b2e4551363b7cf2b = $this->env->getExtension("native_profiler");
        $__internal_cb232c8a8bb37fb0678fe014ee73f9b8812e06780cf8e921b2e4551363b7cf2b->enter($__internal_cb232c8a8bb37fb0678fe014ee73f9b8812e06780cf8e921b2e4551363b7cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cb232c8a8bb37fb0678fe014ee73f9b8812e06780cf8e921b2e4551363b7cf2b->leave($__internal_cb232c8a8bb37fb0678fe014ee73f9b8812e06780cf8e921b2e4551363b7cf2b_prof);

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
