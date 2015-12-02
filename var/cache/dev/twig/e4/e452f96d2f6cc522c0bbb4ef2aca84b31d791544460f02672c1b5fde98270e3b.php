<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a358c8b69e88bec36c89c126e248a061aed9f5f7d5a169b10ddb626f5caff3b4 extends Twig_Template
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
        $__internal_42d1a8d5265ed00e64b8d31ccabcdd663be1df8ca44589ebc38c447440803f10 = $this->env->getExtension("native_profiler");
        $__internal_42d1a8d5265ed00e64b8d31ccabcdd663be1df8ca44589ebc38c447440803f10->enter($__internal_42d1a8d5265ed00e64b8d31ccabcdd663be1df8ca44589ebc38c447440803f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d1a8d5265ed00e64b8d31ccabcdd663be1df8ca44589ebc38c447440803f10->leave($__internal_42d1a8d5265ed00e64b8d31ccabcdd663be1df8ca44589ebc38c447440803f10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cee6444f0d9f8af9584d6ccee37b78e0ee66dc9cb03e29dd0f0618467a424069 = $this->env->getExtension("native_profiler");
        $__internal_cee6444f0d9f8af9584d6ccee37b78e0ee66dc9cb03e29dd0f0618467a424069->enter($__internal_cee6444f0d9f8af9584d6ccee37b78e0ee66dc9cb03e29dd0f0618467a424069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cee6444f0d9f8af9584d6ccee37b78e0ee66dc9cb03e29dd0f0618467a424069->leave($__internal_cee6444f0d9f8af9584d6ccee37b78e0ee66dc9cb03e29dd0f0618467a424069_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcc03c4307a7ca6664ed4d26d231ea84923d33121110eefa57ab793c0e583819 = $this->env->getExtension("native_profiler");
        $__internal_bcc03c4307a7ca6664ed4d26d231ea84923d33121110eefa57ab793c0e583819->enter($__internal_bcc03c4307a7ca6664ed4d26d231ea84923d33121110eefa57ab793c0e583819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bcc03c4307a7ca6664ed4d26d231ea84923d33121110eefa57ab793c0e583819->leave($__internal_bcc03c4307a7ca6664ed4d26d231ea84923d33121110eefa57ab793c0e583819_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_04d0172264ad20a94705b163673e5ca4fbae37e70273d68819b34e0d8ba139fb = $this->env->getExtension("native_profiler");
        $__internal_04d0172264ad20a94705b163673e5ca4fbae37e70273d68819b34e0d8ba139fb->enter($__internal_04d0172264ad20a94705b163673e5ca4fbae37e70273d68819b34e0d8ba139fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_04d0172264ad20a94705b163673e5ca4fbae37e70273d68819b34e0d8ba139fb->leave($__internal_04d0172264ad20a94705b163673e5ca4fbae37e70273d68819b34e0d8ba139fb_prof);

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
