<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_089e503d0fa4cf8950405f31bf197a40a8297fa81757aa947f1b8e2297970d36 extends Twig_Template
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
        $__internal_4b881b0ac2c22fd6e6f833faa09d887055313c7f6ea9123d03e514ed529e1ce1 = $this->env->getExtension("native_profiler");
        $__internal_4b881b0ac2c22fd6e6f833faa09d887055313c7f6ea9123d03e514ed529e1ce1->enter($__internal_4b881b0ac2c22fd6e6f833faa09d887055313c7f6ea9123d03e514ed529e1ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b881b0ac2c22fd6e6f833faa09d887055313c7f6ea9123d03e514ed529e1ce1->leave($__internal_4b881b0ac2c22fd6e6f833faa09d887055313c7f6ea9123d03e514ed529e1ce1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23fe444a7facf2c5005869054428349e03d9da510b7227aee031d05b7e1c16e7 = $this->env->getExtension("native_profiler");
        $__internal_23fe444a7facf2c5005869054428349e03d9da510b7227aee031d05b7e1c16e7->enter($__internal_23fe444a7facf2c5005869054428349e03d9da510b7227aee031d05b7e1c16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23fe444a7facf2c5005869054428349e03d9da510b7227aee031d05b7e1c16e7->leave($__internal_23fe444a7facf2c5005869054428349e03d9da510b7227aee031d05b7e1c16e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0ac728f3708bd656a5941482bebb3bd18ea2a501afd88b91d5c69afe140ab46 = $this->env->getExtension("native_profiler");
        $__internal_a0ac728f3708bd656a5941482bebb3bd18ea2a501afd88b91d5c69afe140ab46->enter($__internal_a0ac728f3708bd656a5941482bebb3bd18ea2a501afd88b91d5c69afe140ab46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0ac728f3708bd656a5941482bebb3bd18ea2a501afd88b91d5c69afe140ab46->leave($__internal_a0ac728f3708bd656a5941482bebb3bd18ea2a501afd88b91d5c69afe140ab46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ad1cfc698de8788ca652ed31f08a1d48088f3b7d2a7905ab2b4f07c7ed7e100 = $this->env->getExtension("native_profiler");
        $__internal_6ad1cfc698de8788ca652ed31f08a1d48088f3b7d2a7905ab2b4f07c7ed7e100->enter($__internal_6ad1cfc698de8788ca652ed31f08a1d48088f3b7d2a7905ab2b4f07c7ed7e100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ad1cfc698de8788ca652ed31f08a1d48088f3b7d2a7905ab2b4f07c7ed7e100->leave($__internal_6ad1cfc698de8788ca652ed31f08a1d48088f3b7d2a7905ab2b4f07c7ed7e100_prof);

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
