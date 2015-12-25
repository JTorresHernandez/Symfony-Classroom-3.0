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
        $__internal_e03728f7bcae88caad3cdd8c1d5ca920b34cf8ba109fca5a7cf3a990d23f3259 = $this->env->getExtension("native_profiler");
        $__internal_e03728f7bcae88caad3cdd8c1d5ca920b34cf8ba109fca5a7cf3a990d23f3259->enter($__internal_e03728f7bcae88caad3cdd8c1d5ca920b34cf8ba109fca5a7cf3a990d23f3259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03728f7bcae88caad3cdd8c1d5ca920b34cf8ba109fca5a7cf3a990d23f3259->leave($__internal_e03728f7bcae88caad3cdd8c1d5ca920b34cf8ba109fca5a7cf3a990d23f3259_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a7a50195f9300ec911f3872cdee53d3404a38fac13c4356805aab4385a0aa7a = $this->env->getExtension("native_profiler");
        $__internal_6a7a50195f9300ec911f3872cdee53d3404a38fac13c4356805aab4385a0aa7a->enter($__internal_6a7a50195f9300ec911f3872cdee53d3404a38fac13c4356805aab4385a0aa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a7a50195f9300ec911f3872cdee53d3404a38fac13c4356805aab4385a0aa7a->leave($__internal_6a7a50195f9300ec911f3872cdee53d3404a38fac13c4356805aab4385a0aa7a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_756a141e595d1c5ee13b77cf1ff9f3ee7a69793c1f4750acf064a1dc9303ad92 = $this->env->getExtension("native_profiler");
        $__internal_756a141e595d1c5ee13b77cf1ff9f3ee7a69793c1f4750acf064a1dc9303ad92->enter($__internal_756a141e595d1c5ee13b77cf1ff9f3ee7a69793c1f4750acf064a1dc9303ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_756a141e595d1c5ee13b77cf1ff9f3ee7a69793c1f4750acf064a1dc9303ad92->leave($__internal_756a141e595d1c5ee13b77cf1ff9f3ee7a69793c1f4750acf064a1dc9303ad92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d01825cae33532f763fb27a59aa3f50211921ce494be54df653983e8a1afe51 = $this->env->getExtension("native_profiler");
        $__internal_0d01825cae33532f763fb27a59aa3f50211921ce494be54df653983e8a1afe51->enter($__internal_0d01825cae33532f763fb27a59aa3f50211921ce494be54df653983e8a1afe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d01825cae33532f763fb27a59aa3f50211921ce494be54df653983e8a1afe51->leave($__internal_0d01825cae33532f763fb27a59aa3f50211921ce494be54df653983e8a1afe51_prof);

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
