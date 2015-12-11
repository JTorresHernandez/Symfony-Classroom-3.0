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
        $__internal_84eb11560da4adb66466dbca67399bffce60222e415710eaa3a68765a1db7002 = $this->env->getExtension("native_profiler");
        $__internal_84eb11560da4adb66466dbca67399bffce60222e415710eaa3a68765a1db7002->enter($__internal_84eb11560da4adb66466dbca67399bffce60222e415710eaa3a68765a1db7002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84eb11560da4adb66466dbca67399bffce60222e415710eaa3a68765a1db7002->leave($__internal_84eb11560da4adb66466dbca67399bffce60222e415710eaa3a68765a1db7002_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69d19b85af5a4f4e995319e09d8edbc83acf4d23425d99d9798620a23106dc7f = $this->env->getExtension("native_profiler");
        $__internal_69d19b85af5a4f4e995319e09d8edbc83acf4d23425d99d9798620a23106dc7f->enter($__internal_69d19b85af5a4f4e995319e09d8edbc83acf4d23425d99d9798620a23106dc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_69d19b85af5a4f4e995319e09d8edbc83acf4d23425d99d9798620a23106dc7f->leave($__internal_69d19b85af5a4f4e995319e09d8edbc83acf4d23425d99d9798620a23106dc7f_prof);

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
