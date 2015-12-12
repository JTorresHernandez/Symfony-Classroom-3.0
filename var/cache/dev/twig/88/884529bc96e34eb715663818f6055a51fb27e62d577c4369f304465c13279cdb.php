<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64c3ab1d1a5be13b88ef927b81a0e165407bf8280dc905dd900112bb29c221ae = $this->env->getExtension("native_profiler");
        $__internal_64c3ab1d1a5be13b88ef927b81a0e165407bf8280dc905dd900112bb29c221ae->enter($__internal_64c3ab1d1a5be13b88ef927b81a0e165407bf8280dc905dd900112bb29c221ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c3ab1d1a5be13b88ef927b81a0e165407bf8280dc905dd900112bb29c221ae->leave($__internal_64c3ab1d1a5be13b88ef927b81a0e165407bf8280dc905dd900112bb29c221ae_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_b0020200ef88f84d074595759b2701ea5a7860f66d42a43664bd698b29651beb = $this->env->getExtension("native_profiler");
        $__internal_b0020200ef88f84d074595759b2701ea5a7860f66d42a43664bd698b29651beb->enter($__internal_b0020200ef88f84d074595759b2701ea5a7860f66d42a43664bd698b29651beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_b0020200ef88f84d074595759b2701ea5a7860f66d42a43664bd698b29651beb->leave($__internal_b0020200ef88f84d074595759b2701ea5a7860f66d42a43664bd698b29651beb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16e23428a3f334ce4b922c536be16fb517c90fdff5c0744fe0b7e866ae8c9598 = $this->env->getExtension("native_profiler");
        $__internal_16e23428a3f334ce4b922c536be16fb517c90fdff5c0744fe0b7e866ae8c9598->enter($__internal_16e23428a3f334ce4b922c536be16fb517c90fdff5c0744fe0b7e866ae8c9598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_16e23428a3f334ce4b922c536be16fb517c90fdff5c0744fe0b7e866ae8c9598->leave($__internal_16e23428a3f334ce4b922c536be16fb517c90fdff5c0744fe0b7e866ae8c9598_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_21db520b3a663effa036f73705505084adeec0891ce360c859f12d3e0b939320 = $this->env->getExtension("native_profiler");
        $__internal_21db520b3a663effa036f73705505084adeec0891ce360c859f12d3e0b939320->enter($__internal_21db520b3a663effa036f73705505084adeec0891ce360c859f12d3e0b939320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_21db520b3a663effa036f73705505084adeec0891ce360c859f12d3e0b939320->leave($__internal_21db520b3a663effa036f73705505084adeec0891ce360c859f12d3e0b939320_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
