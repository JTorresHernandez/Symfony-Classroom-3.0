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
        $__internal_092232fc72713b8fb146b9af9bb19f4043a9f42387b8d286b71a3ae77fb09add = $this->env->getExtension("native_profiler");
        $__internal_092232fc72713b8fb146b9af9bb19f4043a9f42387b8d286b71a3ae77fb09add->enter($__internal_092232fc72713b8fb146b9af9bb19f4043a9f42387b8d286b71a3ae77fb09add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_092232fc72713b8fb146b9af9bb19f4043a9f42387b8d286b71a3ae77fb09add->leave($__internal_092232fc72713b8fb146b9af9bb19f4043a9f42387b8d286b71a3ae77fb09add_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d78b5f34cfd6d0d011b0a5a1649c3ad4f06fbf995e0ed1e1365c6a25014b0f42 = $this->env->getExtension("native_profiler");
        $__internal_d78b5f34cfd6d0d011b0a5a1649c3ad4f06fbf995e0ed1e1365c6a25014b0f42->enter($__internal_d78b5f34cfd6d0d011b0a5a1649c3ad4f06fbf995e0ed1e1365c6a25014b0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d78b5f34cfd6d0d011b0a5a1649c3ad4f06fbf995e0ed1e1365c6a25014b0f42->leave($__internal_d78b5f34cfd6d0d011b0a5a1649c3ad4f06fbf995e0ed1e1365c6a25014b0f42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91ca481f515fce8dde69af5068ea3c8b35abce5321322ad16c94d880e7dc49d2 = $this->env->getExtension("native_profiler");
        $__internal_91ca481f515fce8dde69af5068ea3c8b35abce5321322ad16c94d880e7dc49d2->enter($__internal_91ca481f515fce8dde69af5068ea3c8b35abce5321322ad16c94d880e7dc49d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91ca481f515fce8dde69af5068ea3c8b35abce5321322ad16c94d880e7dc49d2->leave($__internal_91ca481f515fce8dde69af5068ea3c8b35abce5321322ad16c94d880e7dc49d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2c18aa853ff5ebc573b35b9a470de1d2b182f12f54562d967d56cafbb2d016d = $this->env->getExtension("native_profiler");
        $__internal_e2c18aa853ff5ebc573b35b9a470de1d2b182f12f54562d967d56cafbb2d016d->enter($__internal_e2c18aa853ff5ebc573b35b9a470de1d2b182f12f54562d967d56cafbb2d016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e2c18aa853ff5ebc573b35b9a470de1d2b182f12f54562d967d56cafbb2d016d->leave($__internal_e2c18aa853ff5ebc573b35b9a470de1d2b182f12f54562d967d56cafbb2d016d_prof);

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
