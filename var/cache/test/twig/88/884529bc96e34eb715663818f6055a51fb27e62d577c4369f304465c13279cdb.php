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
        $__internal_9719270a97f8bdf36dd36f40d6598759c2700658cd075f4edb2e3b03c3ffa88c = $this->env->getExtension("native_profiler");
        $__internal_9719270a97f8bdf36dd36f40d6598759c2700658cd075f4edb2e3b03c3ffa88c->enter($__internal_9719270a97f8bdf36dd36f40d6598759c2700658cd075f4edb2e3b03c3ffa88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9719270a97f8bdf36dd36f40d6598759c2700658cd075f4edb2e3b03c3ffa88c->leave($__internal_9719270a97f8bdf36dd36f40d6598759c2700658cd075f4edb2e3b03c3ffa88c_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_54556a3cb81229af5fc74f23f3adfad4656e46c75ee5bb6c44c3ca876c856eb9 = $this->env->getExtension("native_profiler");
        $__internal_54556a3cb81229af5fc74f23f3adfad4656e46c75ee5bb6c44c3ca876c856eb9->enter($__internal_54556a3cb81229af5fc74f23f3adfad4656e46c75ee5bb6c44c3ca876c856eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_54556a3cb81229af5fc74f23f3adfad4656e46c75ee5bb6c44c3ca876c856eb9->leave($__internal_54556a3cb81229af5fc74f23f3adfad4656e46c75ee5bb6c44c3ca876c856eb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a80099ecf2ac035cb7e3c5d9ec5f600ea9996a0858ad0635f60b1e4a745398fa = $this->env->getExtension("native_profiler");
        $__internal_a80099ecf2ac035cb7e3c5d9ec5f600ea9996a0858ad0635f60b1e4a745398fa->enter($__internal_a80099ecf2ac035cb7e3c5d9ec5f600ea9996a0858ad0635f60b1e4a745398fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a80099ecf2ac035cb7e3c5d9ec5f600ea9996a0858ad0635f60b1e4a745398fa->leave($__internal_a80099ecf2ac035cb7e3c5d9ec5f600ea9996a0858ad0635f60b1e4a745398fa_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fca9e75212fcd31e7723ce718a59f5c8f873abc9ea413364ef6c38a10c5e3044 = $this->env->getExtension("native_profiler");
        $__internal_fca9e75212fcd31e7723ce718a59f5c8f873abc9ea413364ef6c38a10c5e3044->enter($__internal_fca9e75212fcd31e7723ce718a59f5c8f873abc9ea413364ef6c38a10c5e3044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_fca9e75212fcd31e7723ce718a59f5c8f873abc9ea413364ef6c38a10c5e3044->leave($__internal_fca9e75212fcd31e7723ce718a59f5c8f873abc9ea413364ef6c38a10c5e3044_prof);

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
