<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_ce6f23701f68ed63bceb5dbb916473359f227072b1ea0e50046386ac594dad5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_8a5116e028ca5445c14dc9b5f19b7c22a4b45322769b83dbaf28a354fc84eab7 = $this->env->getExtension("native_profiler");
        $__internal_8a5116e028ca5445c14dc9b5f19b7c22a4b45322769b83dbaf28a354fc84eab7->enter($__internal_8a5116e028ca5445c14dc9b5f19b7c22a4b45322769b83dbaf28a354fc84eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a5116e028ca5445c14dc9b5f19b7c22a4b45322769b83dbaf28a354fc84eab7->leave($__internal_8a5116e028ca5445c14dc9b5f19b7c22a4b45322769b83dbaf28a354fc84eab7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03f30c82d71810311077c427bc26d5b5d4ce1fa56f49e0f3a469b77389931760 = $this->env->getExtension("native_profiler");
        $__internal_03f30c82d71810311077c427bc26d5b5d4ce1fa56f49e0f3a469b77389931760->enter($__internal_03f30c82d71810311077c427bc26d5b5d4ce1fa56f49e0f3a469b77389931760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_03f30c82d71810311077c427bc26d5b5d4ce1fa56f49e0f3a469b77389931760->leave($__internal_03f30c82d71810311077c427bc26d5b5d4ce1fa56f49e0f3a469b77389931760_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
