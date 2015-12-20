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
        $__internal_2562205271cd05065d94cdd28a190e4b4ba11e5f36b9fcb22c1815df5076b0dd = $this->env->getExtension("native_profiler");
        $__internal_2562205271cd05065d94cdd28a190e4b4ba11e5f36b9fcb22c1815df5076b0dd->enter($__internal_2562205271cd05065d94cdd28a190e4b4ba11e5f36b9fcb22c1815df5076b0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2562205271cd05065d94cdd28a190e4b4ba11e5f36b9fcb22c1815df5076b0dd->leave($__internal_2562205271cd05065d94cdd28a190e4b4ba11e5f36b9fcb22c1815df5076b0dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb9b3731c0151b4a817f886f0f2fea960e770842834df413b45aa24076a3ee55 = $this->env->getExtension("native_profiler");
        $__internal_fb9b3731c0151b4a817f886f0f2fea960e770842834df413b45aa24076a3ee55->enter($__internal_fb9b3731c0151b4a817f886f0f2fea960e770842834df413b45aa24076a3ee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb9b3731c0151b4a817f886f0f2fea960e770842834df413b45aa24076a3ee55->leave($__internal_fb9b3731c0151b4a817f886f0f2fea960e770842834df413b45aa24076a3ee55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b2a57e998e32ff441d2d61464f28ca18dcf3eff269717525c66a7642d0dc8c = $this->env->getExtension("native_profiler");
        $__internal_60b2a57e998e32ff441d2d61464f28ca18dcf3eff269717525c66a7642d0dc8c->enter($__internal_60b2a57e998e32ff441d2d61464f28ca18dcf3eff269717525c66a7642d0dc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60b2a57e998e32ff441d2d61464f28ca18dcf3eff269717525c66a7642d0dc8c->leave($__internal_60b2a57e998e32ff441d2d61464f28ca18dcf3eff269717525c66a7642d0dc8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5ec2084e05d3a190d17395db81581e13a88ba00cdf391f0f8bc969e67d8d34 = $this->env->getExtension("native_profiler");
        $__internal_ec5ec2084e05d3a190d17395db81581e13a88ba00cdf391f0f8bc969e67d8d34->enter($__internal_ec5ec2084e05d3a190d17395db81581e13a88ba00cdf391f0f8bc969e67d8d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec5ec2084e05d3a190d17395db81581e13a88ba00cdf391f0f8bc969e67d8d34->leave($__internal_ec5ec2084e05d3a190d17395db81581e13a88ba00cdf391f0f8bc969e67d8d34_prof);

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
