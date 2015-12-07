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
        $__internal_d510319751c8d9b501c7f16f86688b850c39de933b6f8c67d9d1e6584d59a4bb = $this->env->getExtension("native_profiler");
        $__internal_d510319751c8d9b501c7f16f86688b850c39de933b6f8c67d9d1e6584d59a4bb->enter($__internal_d510319751c8d9b501c7f16f86688b850c39de933b6f8c67d9d1e6584d59a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:addArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d510319751c8d9b501c7f16f86688b850c39de933b6f8c67d9d1e6584d59a4bb->leave($__internal_d510319751c8d9b501c7f16f86688b850c39de933b6f8c67d9d1e6584d59a4bb_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_83848249f5ddd72978084f0aafee1baf7b2620b7bd8094699f8ecb20a147381b = $this->env->getExtension("native_profiler");
        $__internal_83848249f5ddd72978084f0aafee1baf7b2620b7bd8094699f8ecb20a147381b->enter($__internal_83848249f5ddd72978084f0aafee1baf7b2620b7bd8094699f8ecb20a147381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "New Article";
        
        $__internal_83848249f5ddd72978084f0aafee1baf7b2620b7bd8094699f8ecb20a147381b->leave($__internal_83848249f5ddd72978084f0aafee1baf7b2620b7bd8094699f8ecb20a147381b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e925987a0312e2e15096eb7203633ddcc63019f8b85f025d658c017e246bdd = $this->env->getExtension("native_profiler");
        $__internal_90e925987a0312e2e15096eb7203633ddcc63019f8b85f025d658c017e246bdd->enter($__internal_90e925987a0312e2e15096eb7203633ddcc63019f8b85f025d658c017e246bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_90e925987a0312e2e15096eb7203633ddcc63019f8b85f025d658c017e246bdd->leave($__internal_90e925987a0312e2e15096eb7203633ddcc63019f8b85f025d658c017e246bdd_prof);

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
