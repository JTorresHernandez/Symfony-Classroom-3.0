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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a8c4267d6ae5dd08b427d7526b83b4789cc3b42b4053afdc6c89eebe78b8c7 = $this->env->getExtension("native_profiler");
        $__internal_a8a8c4267d6ae5dd08b427d7526b83b4789cc3b42b4053afdc6c89eebe78b8c7->enter($__internal_a8a8c4267d6ae5dd08b427d7526b83b4789cc3b42b4053afdc6c89eebe78b8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a8c4267d6ae5dd08b427d7526b83b4789cc3b42b4053afdc6c89eebe78b8c7->leave($__internal_a8a8c4267d6ae5dd08b427d7526b83b4789cc3b42b4053afdc6c89eebe78b8c7_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_cd5ebfa2c4c849cd14caa2c9ce0ba1798fec926536811d39ee4ce2499c328f67 = $this->env->getExtension("native_profiler");
        $__internal_cd5ebfa2c4c849cd14caa2c9ce0ba1798fec926536811d39ee4ce2499c328f67->enter($__internal_cd5ebfa2c4c849cd14caa2c9ce0ba1798fec926536811d39ee4ce2499c328f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_cd5ebfa2c4c849cd14caa2c9ce0ba1798fec926536811d39ee4ce2499c328f67->leave($__internal_cd5ebfa2c4c849cd14caa2c9ce0ba1798fec926536811d39ee4ce2499c328f67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96eacb828b1fcf6cb4d119ea053e53f5157661499f62916ac19634071196a37 = $this->env->getExtension("native_profiler");
        $__internal_a96eacb828b1fcf6cb4d119ea053e53f5157661499f62916ac19634071196a37->enter($__internal_a96eacb828b1fcf6cb4d119ea053e53f5157661499f62916ac19634071196a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a96eacb828b1fcf6cb4d119ea053e53f5157661499f62916ac19634071196a37->leave($__internal_a96eacb828b1fcf6cb4d119ea053e53f5157661499f62916ac19634071196a37_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
