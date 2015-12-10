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
        $__internal_412e9d37c1b84c317899ce9705be0679dac9ef866b5f8e5bba1f46e3094f907f = $this->env->getExtension("native_profiler");
        $__internal_412e9d37c1b84c317899ce9705be0679dac9ef866b5f8e5bba1f46e3094f907f->enter($__internal_412e9d37c1b84c317899ce9705be0679dac9ef866b5f8e5bba1f46e3094f907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412e9d37c1b84c317899ce9705be0679dac9ef866b5f8e5bba1f46e3094f907f->leave($__internal_412e9d37c1b84c317899ce9705be0679dac9ef866b5f8e5bba1f46e3094f907f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ac6279ed6993572280cd2b9fc99d6acbed10d061960b375c718335a68fe96bd = $this->env->getExtension("native_profiler");
        $__internal_7ac6279ed6993572280cd2b9fc99d6acbed10d061960b375c718335a68fe96bd->enter($__internal_7ac6279ed6993572280cd2b9fc99d6acbed10d061960b375c718335a68fe96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ac6279ed6993572280cd2b9fc99d6acbed10d061960b375c718335a68fe96bd->leave($__internal_7ac6279ed6993572280cd2b9fc99d6acbed10d061960b375c718335a68fe96bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_828d1a3fc84c7e5295858fcacd07c3f2bd298cdabb884fb1403b4d136eb6ae3d = $this->env->getExtension("native_profiler");
        $__internal_828d1a3fc84c7e5295858fcacd07c3f2bd298cdabb884fb1403b4d136eb6ae3d->enter($__internal_828d1a3fc84c7e5295858fcacd07c3f2bd298cdabb884fb1403b4d136eb6ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_828d1a3fc84c7e5295858fcacd07c3f2bd298cdabb884fb1403b4d136eb6ae3d->leave($__internal_828d1a3fc84c7e5295858fcacd07c3f2bd298cdabb884fb1403b4d136eb6ae3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bdf6f798ad4def218faddde5699aa1da6a9ae923e32e51dcbaefa109328705 = $this->env->getExtension("native_profiler");
        $__internal_c3bdf6f798ad4def218faddde5699aa1da6a9ae923e32e51dcbaefa109328705->enter($__internal_c3bdf6f798ad4def218faddde5699aa1da6a9ae923e32e51dcbaefa109328705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c3bdf6f798ad4def218faddde5699aa1da6a9ae923e32e51dcbaefa109328705->leave($__internal_c3bdf6f798ad4def218faddde5699aa1da6a9ae923e32e51dcbaefa109328705_prof);

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
