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
        $__internal_4a5170fd065f5955b36a6ae2d1243ed769a74a50ba6b8c0e717c9d0df159bab4 = $this->env->getExtension("native_profiler");
        $__internal_4a5170fd065f5955b36a6ae2d1243ed769a74a50ba6b8c0e717c9d0df159bab4->enter($__internal_4a5170fd065f5955b36a6ae2d1243ed769a74a50ba6b8c0e717c9d0df159bab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5170fd065f5955b36a6ae2d1243ed769a74a50ba6b8c0e717c9d0df159bab4->leave($__internal_4a5170fd065f5955b36a6ae2d1243ed769a74a50ba6b8c0e717c9d0df159bab4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26bff82ec3057465631552f27f106952dad0dfaaa78672792457cf6c784c508c = $this->env->getExtension("native_profiler");
        $__internal_26bff82ec3057465631552f27f106952dad0dfaaa78672792457cf6c784c508c->enter($__internal_26bff82ec3057465631552f27f106952dad0dfaaa78672792457cf6c784c508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26bff82ec3057465631552f27f106952dad0dfaaa78672792457cf6c784c508c->leave($__internal_26bff82ec3057465631552f27f106952dad0dfaaa78672792457cf6c784c508c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ae5e15cfebd7fd526cc4fa84a8e578b5cae4357da989be183505f82f8a368e5 = $this->env->getExtension("native_profiler");
        $__internal_5ae5e15cfebd7fd526cc4fa84a8e578b5cae4357da989be183505f82f8a368e5->enter($__internal_5ae5e15cfebd7fd526cc4fa84a8e578b5cae4357da989be183505f82f8a368e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ae5e15cfebd7fd526cc4fa84a8e578b5cae4357da989be183505f82f8a368e5->leave($__internal_5ae5e15cfebd7fd526cc4fa84a8e578b5cae4357da989be183505f82f8a368e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28c19334765e1615efda7965126f3d373b20d4f6336b03136bde6e33e8fa5e7e = $this->env->getExtension("native_profiler");
        $__internal_28c19334765e1615efda7965126f3d373b20d4f6336b03136bde6e33e8fa5e7e->enter($__internal_28c19334765e1615efda7965126f3d373b20d4f6336b03136bde6e33e8fa5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_28c19334765e1615efda7965126f3d373b20d4f6336b03136bde6e33e8fa5e7e->leave($__internal_28c19334765e1615efda7965126f3d373b20d4f6336b03136bde6e33e8fa5e7e_prof);

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
