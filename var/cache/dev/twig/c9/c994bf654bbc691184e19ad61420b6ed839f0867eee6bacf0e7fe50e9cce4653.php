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
        $__internal_156600c82c8a1fd78cdee4e3453ffe8f9d7f43e19a95b8856ed145991934b316 = $this->env->getExtension("native_profiler");
        $__internal_156600c82c8a1fd78cdee4e3453ffe8f9d7f43e19a95b8856ed145991934b316->enter($__internal_156600c82c8a1fd78cdee4e3453ffe8f9d7f43e19a95b8856ed145991934b316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156600c82c8a1fd78cdee4e3453ffe8f9d7f43e19a95b8856ed145991934b316->leave($__internal_156600c82c8a1fd78cdee4e3453ffe8f9d7f43e19a95b8856ed145991934b316_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6690cd8e5caa822373f0021b2569bf6a94ce5d9266df047313598ebad8bb27db = $this->env->getExtension("native_profiler");
        $__internal_6690cd8e5caa822373f0021b2569bf6a94ce5d9266df047313598ebad8bb27db->enter($__internal_6690cd8e5caa822373f0021b2569bf6a94ce5d9266df047313598ebad8bb27db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6690cd8e5caa822373f0021b2569bf6a94ce5d9266df047313598ebad8bb27db->leave($__internal_6690cd8e5caa822373f0021b2569bf6a94ce5d9266df047313598ebad8bb27db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f23512171bc6b72cf0fc3ad704e742dd1940a20690b61bb6cf5abf6ca0b717 = $this->env->getExtension("native_profiler");
        $__internal_48f23512171bc6b72cf0fc3ad704e742dd1940a20690b61bb6cf5abf6ca0b717->enter($__internal_48f23512171bc6b72cf0fc3ad704e742dd1940a20690b61bb6cf5abf6ca0b717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48f23512171bc6b72cf0fc3ad704e742dd1940a20690b61bb6cf5abf6ca0b717->leave($__internal_48f23512171bc6b72cf0fc3ad704e742dd1940a20690b61bb6cf5abf6ca0b717_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd33944b6a9bce75508e17fc79c714c595ebff3ae4313b6124aadef747c1428 = $this->env->getExtension("native_profiler");
        $__internal_4dd33944b6a9bce75508e17fc79c714c595ebff3ae4313b6124aadef747c1428->enter($__internal_4dd33944b6a9bce75508e17fc79c714c595ebff3ae4313b6124aadef747c1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4dd33944b6a9bce75508e17fc79c714c595ebff3ae4313b6124aadef747c1428->leave($__internal_4dd33944b6a9bce75508e17fc79c714c595ebff3ae4313b6124aadef747c1428_prof);

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
