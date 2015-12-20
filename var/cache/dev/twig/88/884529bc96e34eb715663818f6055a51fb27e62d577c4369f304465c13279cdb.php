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
        $__internal_14078ab214b98133636677550450a22b46b53223ed054e0db1ab611fe3342860 = $this->env->getExtension("native_profiler");
        $__internal_14078ab214b98133636677550450a22b46b53223ed054e0db1ab611fe3342860->enter($__internal_14078ab214b98133636677550450a22b46b53223ed054e0db1ab611fe3342860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14078ab214b98133636677550450a22b46b53223ed054e0db1ab611fe3342860->leave($__internal_14078ab214b98133636677550450a22b46b53223ed054e0db1ab611fe3342860_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_c998b261600bbfae7723274d01d3ed591d7accab4fa77ff06ed832745f253068 = $this->env->getExtension("native_profiler");
        $__internal_c998b261600bbfae7723274d01d3ed591d7accab4fa77ff06ed832745f253068->enter($__internal_c998b261600bbfae7723274d01d3ed591d7accab4fa77ff06ed832745f253068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_c998b261600bbfae7723274d01d3ed591d7accab4fa77ff06ed832745f253068->leave($__internal_c998b261600bbfae7723274d01d3ed591d7accab4fa77ff06ed832745f253068_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffe241859d5fb48a69ea2940d79a272ab93693310a24723404e406285c4b486a = $this->env->getExtension("native_profiler");
        $__internal_ffe241859d5fb48a69ea2940d79a272ab93693310a24723404e406285c4b486a->enter($__internal_ffe241859d5fb48a69ea2940d79a272ab93693310a24723404e406285c4b486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_ffe241859d5fb48a69ea2940d79a272ab93693310a24723404e406285c4b486a->leave($__internal_ffe241859d5fb48a69ea2940d79a272ab93693310a24723404e406285c4b486a_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0f8358beb0c63d9ce848c8172424a201fe79c7a2c28517f98198b9f31c524e5a = $this->env->getExtension("native_profiler");
        $__internal_0f8358beb0c63d9ce848c8172424a201fe79c7a2c28517f98198b9f31c524e5a->enter($__internal_0f8358beb0c63d9ce848c8172424a201fe79c7a2c28517f98198b9f31c524e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0f8358beb0c63d9ce848c8172424a201fe79c7a2c28517f98198b9f31c524e5a->leave($__internal_0f8358beb0c63d9ce848c8172424a201fe79c7a2c28517f98198b9f31c524e5a_prof);

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
