<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_55d0ceda7c887010f166f6101a58b66fad174b0e2a5b428f685566a5f4cd062c extends Twig_Template
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
        $__internal_0d01cda241a83114ea7e4d8adc2d99f3723015901c7e8988772749c82fc88fef = $this->env->getExtension("native_profiler");
        $__internal_0d01cda241a83114ea7e4d8adc2d99f3723015901c7e8988772749c82fc88fef->enter($__internal_0d01cda241a83114ea7e4d8adc2d99f3723015901c7e8988772749c82fc88fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d01cda241a83114ea7e4d8adc2d99f3723015901c7e8988772749c82fc88fef->leave($__internal_0d01cda241a83114ea7e4d8adc2d99f3723015901c7e8988772749c82fc88fef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddacadaf707a24f08115244c310d64700a5ff5d20037c84990af64d318d62c40 = $this->env->getExtension("native_profiler");
        $__internal_ddacadaf707a24f08115244c310d64700a5ff5d20037c84990af64d318d62c40->enter($__internal_ddacadaf707a24f08115244c310d64700a5ff5d20037c84990af64d318d62c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ddacadaf707a24f08115244c310d64700a5ff5d20037c84990af64d318d62c40->leave($__internal_ddacadaf707a24f08115244c310d64700a5ff5d20037c84990af64d318d62c40_prof);

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
