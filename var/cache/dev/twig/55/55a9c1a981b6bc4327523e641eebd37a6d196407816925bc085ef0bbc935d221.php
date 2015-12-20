<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_785340534e3be41ff90c4b5862d4e71630ec75279157f3b34b900a59b18bb766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_e7d49185ca0d8564935c84debead80f35eaf68aa97172c92d00094b2baae5cb8 = $this->env->getExtension("native_profiler");
        $__internal_e7d49185ca0d8564935c84debead80f35eaf68aa97172c92d00094b2baae5cb8->enter($__internal_e7d49185ca0d8564935c84debead80f35eaf68aa97172c92d00094b2baae5cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d49185ca0d8564935c84debead80f35eaf68aa97172c92d00094b2baae5cb8->leave($__internal_e7d49185ca0d8564935c84debead80f35eaf68aa97172c92d00094b2baae5cb8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2810a79cd963a9c3fb06528221fce54badd7306b85ec54d7670d41696001dcb0 = $this->env->getExtension("native_profiler");
        $__internal_2810a79cd963a9c3fb06528221fce54badd7306b85ec54d7670d41696001dcb0->enter($__internal_2810a79cd963a9c3fb06528221fce54badd7306b85ec54d7670d41696001dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2810a79cd963a9c3fb06528221fce54badd7306b85ec54d7670d41696001dcb0->leave($__internal_2810a79cd963a9c3fb06528221fce54badd7306b85ec54d7670d41696001dcb0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
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
