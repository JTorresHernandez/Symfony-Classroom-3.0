<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_aa9c29d8d03303c7410e32a1159ab3f1c6dcd0d979f0fd612a25521e1d282eb6 extends Twig_Template
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
        $__internal_61bff70236a1a855e771de88c9470a2c1897d21ad5bce963b46ccbb2d455dd7d = $this->env->getExtension("native_profiler");
        $__internal_61bff70236a1a855e771de88c9470a2c1897d21ad5bce963b46ccbb2d455dd7d->enter($__internal_61bff70236a1a855e771de88c9470a2c1897d21ad5bce963b46ccbb2d455dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61bff70236a1a855e771de88c9470a2c1897d21ad5bce963b46ccbb2d455dd7d->leave($__internal_61bff70236a1a855e771de88c9470a2c1897d21ad5bce963b46ccbb2d455dd7d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaf4699167a56ef5658fea5865b132bf58279d383069e3c8305c3dc0716adb3a = $this->env->getExtension("native_profiler");
        $__internal_aaf4699167a56ef5658fea5865b132bf58279d383069e3c8305c3dc0716adb3a->enter($__internal_aaf4699167a56ef5658fea5865b132bf58279d383069e3c8305c3dc0716adb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_aaf4699167a56ef5658fea5865b132bf58279d383069e3c8305c3dc0716adb3a->leave($__internal_aaf4699167a56ef5658fea5865b132bf58279d383069e3c8305c3dc0716adb3a_prof);

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
