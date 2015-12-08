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
        $__internal_1e269b29682e50208ebbf9b00b82545ff6483e88cb4ca8cf28fc2d49c0b5a338 = $this->env->getExtension("native_profiler");
        $__internal_1e269b29682e50208ebbf9b00b82545ff6483e88cb4ca8cf28fc2d49c0b5a338->enter($__internal_1e269b29682e50208ebbf9b00b82545ff6483e88cb4ca8cf28fc2d49c0b5a338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e269b29682e50208ebbf9b00b82545ff6483e88cb4ca8cf28fc2d49c0b5a338->leave($__internal_1e269b29682e50208ebbf9b00b82545ff6483e88cb4ca8cf28fc2d49c0b5a338_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28cd8f3ed84c44a465e07ecbc14dff76885548f64551a42a2e5fe7108af43ddd = $this->env->getExtension("native_profiler");
        $__internal_28cd8f3ed84c44a465e07ecbc14dff76885548f64551a42a2e5fe7108af43ddd->enter($__internal_28cd8f3ed84c44a465e07ecbc14dff76885548f64551a42a2e5fe7108af43ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28cd8f3ed84c44a465e07ecbc14dff76885548f64551a42a2e5fe7108af43ddd->leave($__internal_28cd8f3ed84c44a465e07ecbc14dff76885548f64551a42a2e5fe7108af43ddd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b530809529589697f26351b50d55ece31261bec12d69bea381259b31e0154f36 = $this->env->getExtension("native_profiler");
        $__internal_b530809529589697f26351b50d55ece31261bec12d69bea381259b31e0154f36->enter($__internal_b530809529589697f26351b50d55ece31261bec12d69bea381259b31e0154f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b530809529589697f26351b50d55ece31261bec12d69bea381259b31e0154f36->leave($__internal_b530809529589697f26351b50d55ece31261bec12d69bea381259b31e0154f36_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f5cc2f225287e83fc2ebefd2ec3c3ef8c10888327d3a14960efdba2e0328b43 = $this->env->getExtension("native_profiler");
        $__internal_8f5cc2f225287e83fc2ebefd2ec3c3ef8c10888327d3a14960efdba2e0328b43->enter($__internal_8f5cc2f225287e83fc2ebefd2ec3c3ef8c10888327d3a14960efdba2e0328b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f5cc2f225287e83fc2ebefd2ec3c3ef8c10888327d3a14960efdba2e0328b43->leave($__internal_8f5cc2f225287e83fc2ebefd2ec3c3ef8c10888327d3a14960efdba2e0328b43_prof);

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
