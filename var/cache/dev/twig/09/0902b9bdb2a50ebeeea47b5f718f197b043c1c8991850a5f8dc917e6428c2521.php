<?php

/* :article:addArticle.html.twig */
class __TwigTemplate_ce3ce2a5d09a5960fe02316c492f24a2ade2ec5e3315f288df9ca222a5b12a46 extends Twig_Template
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
        $__internal_60cecc228a2b4ee6c5e9654893913c3b113bb10e666729f16fd35f19f001042a = $this->env->getExtension("native_profiler");
        $__internal_60cecc228a2b4ee6c5e9654893913c3b113bb10e666729f16fd35f19f001042a->enter($__internal_60cecc228a2b4ee6c5e9654893913c3b113bb10e666729f16fd35f19f001042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:addArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60cecc228a2b4ee6c5e9654893913c3b113bb10e666729f16fd35f19f001042a->leave($__internal_60cecc228a2b4ee6c5e9654893913c3b113bb10e666729f16fd35f19f001042a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_6d0dfc8e6f5a6157f4f8526837e982bdba9f4b6c68b27969310a4afcfc9a78de = $this->env->getExtension("native_profiler");
        $__internal_6d0dfc8e6f5a6157f4f8526837e982bdba9f4b6c68b27969310a4afcfc9a78de->enter($__internal_6d0dfc8e6f5a6157f4f8526837e982bdba9f4b6c68b27969310a4afcfc9a78de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "New Article";
        
        $__internal_6d0dfc8e6f5a6157f4f8526837e982bdba9f4b6c68b27969310a4afcfc9a78de->leave($__internal_6d0dfc8e6f5a6157f4f8526837e982bdba9f4b6c68b27969310a4afcfc9a78de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a932909031dc56968de21d81be54ce47778b40d31798186a627fb9d6bf48f9 = $this->env->getExtension("native_profiler");
        $__internal_47a932909031dc56968de21d81be54ce47778b40d31798186a627fb9d6bf48f9->enter($__internal_47a932909031dc56968de21d81be54ce47778b40d31798186a627fb9d6bf48f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_47a932909031dc56968de21d81be54ce47778b40d31798186a627fb9d6bf48f9->leave($__internal_47a932909031dc56968de21d81be54ce47778b40d31798186a627fb9d6bf48f9_prof);

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
