<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_b954a446011786f678ff01133cc54e95af1d17f4a003fde861e965a38dc11368 extends Twig_Template
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
        $__internal_d63b9a034e10fdb5c5b66d66dfe2cc63d9b1b15bff5496a5b6f091446c7cc877 = $this->env->getExtension("native_profiler");
        $__internal_d63b9a034e10fdb5c5b66d66dfe2cc63d9b1b15bff5496a5b6f091446c7cc877->enter($__internal_d63b9a034e10fdb5c5b66d66dfe2cc63d9b1b15bff5496a5b6f091446c7cc877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63b9a034e10fdb5c5b66d66dfe2cc63d9b1b15bff5496a5b6f091446c7cc877->leave($__internal_d63b9a034e10fdb5c5b66d66dfe2cc63d9b1b15bff5496a5b6f091446c7cc877_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1eef77722ecbc57312ba4c18f60f3ef8508d4d5e95ac8483af41aad62d239ca3 = $this->env->getExtension("native_profiler");
        $__internal_1eef77722ecbc57312ba4c18f60f3ef8508d4d5e95ac8483af41aad62d239ca3->enter($__internal_1eef77722ecbc57312ba4c18f60f3ef8508d4d5e95ac8483af41aad62d239ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1eef77722ecbc57312ba4c18f60f3ef8508d4d5e95ac8483af41aad62d239ca3->leave($__internal_1eef77722ecbc57312ba4c18f60f3ef8508d4d5e95ac8483af41aad62d239ca3_prof);

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
