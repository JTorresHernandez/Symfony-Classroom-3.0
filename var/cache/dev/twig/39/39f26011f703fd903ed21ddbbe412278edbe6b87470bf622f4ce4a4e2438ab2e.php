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
        $__internal_7c5516b38888d30250fda142702261fe8c88c2b8c57f5c37f025f9b05f1ccd38 = $this->env->getExtension("native_profiler");
        $__internal_7c5516b38888d30250fda142702261fe8c88c2b8c57f5c37f025f9b05f1ccd38->enter($__internal_7c5516b38888d30250fda142702261fe8c88c2b8c57f5c37f025f9b05f1ccd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5516b38888d30250fda142702261fe8c88c2b8c57f5c37f025f9b05f1ccd38->leave($__internal_7c5516b38888d30250fda142702261fe8c88c2b8c57f5c37f025f9b05f1ccd38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02a7f87f9632fe6869cba7ee4b9701ea8113f8be0b324ece20b2f3e5430cf596 = $this->env->getExtension("native_profiler");
        $__internal_02a7f87f9632fe6869cba7ee4b9701ea8113f8be0b324ece20b2f3e5430cf596->enter($__internal_02a7f87f9632fe6869cba7ee4b9701ea8113f8be0b324ece20b2f3e5430cf596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_02a7f87f9632fe6869cba7ee4b9701ea8113f8be0b324ece20b2f3e5430cf596->leave($__internal_02a7f87f9632fe6869cba7ee4b9701ea8113f8be0b324ece20b2f3e5430cf596_prof);

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
