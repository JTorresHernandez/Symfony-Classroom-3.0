<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f6332ee78fb2cb709058a428d7fb4004e975fff5c888e2ac7c1b5818c8c18ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9eebfcc1da44f11fd17ada2b0fa0f007192e3648efb0e94a7b7178987dbd407f = $this->env->getExtension("native_profiler");
        $__internal_9eebfcc1da44f11fd17ada2b0fa0f007192e3648efb0e94a7b7178987dbd407f->enter($__internal_9eebfcc1da44f11fd17ada2b0fa0f007192e3648efb0e94a7b7178987dbd407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eebfcc1da44f11fd17ada2b0fa0f007192e3648efb0e94a7b7178987dbd407f->leave($__internal_9eebfcc1da44f11fd17ada2b0fa0f007192e3648efb0e94a7b7178987dbd407f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6513a7a7f55add554441fa4de6360df802ccbdb0f6e6d60b4105218714464de5 = $this->env->getExtension("native_profiler");
        $__internal_6513a7a7f55add554441fa4de6360df802ccbdb0f6e6d60b4105218714464de5->enter($__internal_6513a7a7f55add554441fa4de6360df802ccbdb0f6e6d60b4105218714464de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6513a7a7f55add554441fa4de6360df802ccbdb0f6e6d60b4105218714464de5->leave($__internal_6513a7a7f55add554441fa4de6360df802ccbdb0f6e6d60b4105218714464de5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
