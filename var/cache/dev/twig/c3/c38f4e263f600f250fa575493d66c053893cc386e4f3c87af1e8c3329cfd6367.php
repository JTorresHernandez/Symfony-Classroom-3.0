<?php

/* :article:addArticle.html.twig */
class __TwigTemplate_c103e45f4089298f62796f03c1b4389b605360f428b3bdece6feb1e0bad692dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:addArticle.html.twig", 1);
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
        $__internal_6062938a52c381000ca7e233c3f6a07aff77e0283a8abaa5f83d292bced1d5a6 = $this->env->getExtension("native_profiler");
        $__internal_6062938a52c381000ca7e233c3f6a07aff77e0283a8abaa5f83d292bced1d5a6->enter($__internal_6062938a52c381000ca7e233c3f6a07aff77e0283a8abaa5f83d292bced1d5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:addArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6062938a52c381000ca7e233c3f6a07aff77e0283a8abaa5f83d292bced1d5a6->leave($__internal_6062938a52c381000ca7e233c3f6a07aff77e0283a8abaa5f83d292bced1d5a6_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1d20c33d8a8d3cd8fa9c67b70bc8e786c11e488cbb44d5f41ea8222dcdfe3ca1 = $this->env->getExtension("native_profiler");
        $__internal_1d20c33d8a8d3cd8fa9c67b70bc8e786c11e488cbb44d5f41ea8222dcdfe3ca1->enter($__internal_1d20c33d8a8d3cd8fa9c67b70bc8e786c11e488cbb44d5f41ea8222dcdfe3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "New Article";
        
        $__internal_1d20c33d8a8d3cd8fa9c67b70bc8e786c11e488cbb44d5f41ea8222dcdfe3ca1->leave($__internal_1d20c33d8a8d3cd8fa9c67b70bc8e786c11e488cbb44d5f41ea8222dcdfe3ca1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b9d7d61100eb631578af665315a4e5566362ac8409b79c836b14ca6476d7ed = $this->env->getExtension("native_profiler");
        $__internal_a9b9d7d61100eb631578af665315a4e5566362ac8409b79c836b14ca6476d7ed->enter($__internal_a9b9d7d61100eb631578af665315a4e5566362ac8409b79c836b14ca6476d7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a9b9d7d61100eb631578af665315a4e5566362ac8409b79c836b14ca6476d7ed->leave($__internal_a9b9d7d61100eb631578af665315a4e5566362ac8409b79c836b14ca6476d7ed_prof);

    }

    public function getTemplateName()
    {
        return ":article:addArticle.html.twig";
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
/* {% block headTitle %}New Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
