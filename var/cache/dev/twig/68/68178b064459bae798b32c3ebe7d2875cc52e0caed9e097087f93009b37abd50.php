<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_4b77edffd51161294672c75f74fb457afbd6d30d482005b4afd2bd31b1ae75bb extends Twig_Template
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
        $__internal_a0c6398427445030e32c17f85f1d06f7b7e33906f9e72963eda51a8ec1ab9dfa = $this->env->getExtension("native_profiler");
        $__internal_a0c6398427445030e32c17f85f1d06f7b7e33906f9e72963eda51a8ec1ab9dfa->enter($__internal_a0c6398427445030e32c17f85f1d06f7b7e33906f9e72963eda51a8ec1ab9dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c6398427445030e32c17f85f1d06f7b7e33906f9e72963eda51a8ec1ab9dfa->leave($__internal_a0c6398427445030e32c17f85f1d06f7b7e33906f9e72963eda51a8ec1ab9dfa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_450b933d58a8045c6369c46ebcb94ebb43f10594b9ba76561a372838c940726d = $this->env->getExtension("native_profiler");
        $__internal_450b933d58a8045c6369c46ebcb94ebb43f10594b9ba76561a372838c940726d->enter($__internal_450b933d58a8045c6369c46ebcb94ebb43f10594b9ba76561a372838c940726d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_450b933d58a8045c6369c46ebcb94ebb43f10594b9ba76561a372838c940726d->leave($__internal_450b933d58a8045c6369c46ebcb94ebb43f10594b9ba76561a372838c940726d_prof);

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
