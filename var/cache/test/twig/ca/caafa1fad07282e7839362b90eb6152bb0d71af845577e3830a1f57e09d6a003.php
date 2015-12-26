<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4076de56276e5c7728ec045f88957d5f91a8725f30d9c217e0d5dc330531279e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_984b379e2f5f9f3f68d9c4dbce09cdde9734ccfaac5edd5c2f1a835ca824e8e6 = $this->env->getExtension("native_profiler");
        $__internal_984b379e2f5f9f3f68d9c4dbce09cdde9734ccfaac5edd5c2f1a835ca824e8e6->enter($__internal_984b379e2f5f9f3f68d9c4dbce09cdde9734ccfaac5edd5c2f1a835ca824e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984b379e2f5f9f3f68d9c4dbce09cdde9734ccfaac5edd5c2f1a835ca824e8e6->leave($__internal_984b379e2f5f9f3f68d9c4dbce09cdde9734ccfaac5edd5c2f1a835ca824e8e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b204634a3dbea624307e4752a5b581b5751673c4ca1f40c5d4ae8b84cd9dfb6 = $this->env->getExtension("native_profiler");
        $__internal_7b204634a3dbea624307e4752a5b581b5751673c4ca1f40c5d4ae8b84cd9dfb6->enter($__internal_7b204634a3dbea624307e4752a5b581b5751673c4ca1f40c5d4ae8b84cd9dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b204634a3dbea624307e4752a5b581b5751673c4ca1f40c5d4ae8b84cd9dfb6->leave($__internal_7b204634a3dbea624307e4752a5b581b5751673c4ca1f40c5d4ae8b84cd9dfb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_645176f4170bfdd619bfb73e8d21da49337353e9fc0e4fdb9464db82b7de5a73 = $this->env->getExtension("native_profiler");
        $__internal_645176f4170bfdd619bfb73e8d21da49337353e9fc0e4fdb9464db82b7de5a73->enter($__internal_645176f4170bfdd619bfb73e8d21da49337353e9fc0e4fdb9464db82b7de5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_645176f4170bfdd619bfb73e8d21da49337353e9fc0e4fdb9464db82b7de5a73->leave($__internal_645176f4170bfdd619bfb73e8d21da49337353e9fc0e4fdb9464db82b7de5a73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b746a8c4dbd1b20d39f2449f96889ec4b36ea17a799559d0e75d31c215b84182 = $this->env->getExtension("native_profiler");
        $__internal_b746a8c4dbd1b20d39f2449f96889ec4b36ea17a799559d0e75d31c215b84182->enter($__internal_b746a8c4dbd1b20d39f2449f96889ec4b36ea17a799559d0e75d31c215b84182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b746a8c4dbd1b20d39f2449f96889ec4b36ea17a799559d0e75d31c215b84182->leave($__internal_b746a8c4dbd1b20d39f2449f96889ec4b36ea17a799559d0e75d31c215b84182_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
