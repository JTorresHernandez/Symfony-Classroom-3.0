<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_e39169b4658129d827956cb867102b79c0eba9ffc1a3d93493ad682a84aec49e extends Twig_Template
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
        $__internal_dee42ddce79cc142fb996c73db3eda91bf05a3656eef1b9cbecf64321f4a05a4 = $this->env->getExtension("native_profiler");
        $__internal_dee42ddce79cc142fb996c73db3eda91bf05a3656eef1b9cbecf64321f4a05a4->enter($__internal_dee42ddce79cc142fb996c73db3eda91bf05a3656eef1b9cbecf64321f4a05a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee42ddce79cc142fb996c73db3eda91bf05a3656eef1b9cbecf64321f4a05a4->leave($__internal_dee42ddce79cc142fb996c73db3eda91bf05a3656eef1b9cbecf64321f4a05a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_482c4f78a59f89cc1c03f57f93f99657404fb009ce00e9f321473213f954c5bc = $this->env->getExtension("native_profiler");
        $__internal_482c4f78a59f89cc1c03f57f93f99657404fb009ce00e9f321473213f954c5bc->enter($__internal_482c4f78a59f89cc1c03f57f93f99657404fb009ce00e9f321473213f954c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_482c4f78a59f89cc1c03f57f93f99657404fb009ce00e9f321473213f954c5bc->leave($__internal_482c4f78a59f89cc1c03f57f93f99657404fb009ce00e9f321473213f954c5bc_prof);

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
