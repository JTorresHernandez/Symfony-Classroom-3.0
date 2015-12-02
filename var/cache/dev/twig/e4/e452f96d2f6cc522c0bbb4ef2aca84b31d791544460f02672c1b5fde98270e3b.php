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
        $__internal_12cb89d84440bab2d74d33ce78c134fd8a768116f8c20fc9f57e3b43583f1d8a = $this->env->getExtension("native_profiler");
        $__internal_12cb89d84440bab2d74d33ce78c134fd8a768116f8c20fc9f57e3b43583f1d8a->enter($__internal_12cb89d84440bab2d74d33ce78c134fd8a768116f8c20fc9f57e3b43583f1d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12cb89d84440bab2d74d33ce78c134fd8a768116f8c20fc9f57e3b43583f1d8a->leave($__internal_12cb89d84440bab2d74d33ce78c134fd8a768116f8c20fc9f57e3b43583f1d8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0050b5f94b3655e01369de556b40dffdbb180c9aefe713e9671c2e44a982ca8b = $this->env->getExtension("native_profiler");
        $__internal_0050b5f94b3655e01369de556b40dffdbb180c9aefe713e9671c2e44a982ca8b->enter($__internal_0050b5f94b3655e01369de556b40dffdbb180c9aefe713e9671c2e44a982ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0050b5f94b3655e01369de556b40dffdbb180c9aefe713e9671c2e44a982ca8b->leave($__internal_0050b5f94b3655e01369de556b40dffdbb180c9aefe713e9671c2e44a982ca8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd5fb9d45395931bf919b0907ecfa007a311d3f00bef12c97f5e53a5ad0e5848 = $this->env->getExtension("native_profiler");
        $__internal_fd5fb9d45395931bf919b0907ecfa007a311d3f00bef12c97f5e53a5ad0e5848->enter($__internal_fd5fb9d45395931bf919b0907ecfa007a311d3f00bef12c97f5e53a5ad0e5848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd5fb9d45395931bf919b0907ecfa007a311d3f00bef12c97f5e53a5ad0e5848->leave($__internal_fd5fb9d45395931bf919b0907ecfa007a311d3f00bef12c97f5e53a5ad0e5848_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b37c89c7789482c9bb956ee3c3cbbf65207a8d704dee083fe946cf59446d1383 = $this->env->getExtension("native_profiler");
        $__internal_b37c89c7789482c9bb956ee3c3cbbf65207a8d704dee083fe946cf59446d1383->enter($__internal_b37c89c7789482c9bb956ee3c3cbbf65207a8d704dee083fe946cf59446d1383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b37c89c7789482c9bb956ee3c3cbbf65207a8d704dee083fe946cf59446d1383->leave($__internal_b37c89c7789482c9bb956ee3c3cbbf65207a8d704dee083fe946cf59446d1383_prof);

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
