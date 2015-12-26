<?php

/* :article:form.html.twig */
class __TwigTemplate_1aa97c11ab040de099b915c8a60d8bd6c16fac4ecf3a86ce7c452324cc514758 extends Twig_Template
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
        $__internal_60e8cb5386708c7460fdf23768666def0901cdb8e535532de7449e7cf15c026a = $this->env->getExtension("native_profiler");
        $__internal_60e8cb5386708c7460fdf23768666def0901cdb8e535532de7449e7cf15c026a->enter($__internal_60e8cb5386708c7460fdf23768666def0901cdb8e535532de7449e7cf15c026a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e8cb5386708c7460fdf23768666def0901cdb8e535532de7449e7cf15c026a->leave($__internal_60e8cb5386708c7460fdf23768666def0901cdb8e535532de7449e7cf15c026a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_a7db751cbcec562fa282991c9a0e8b29d61874a68007cadd8ff76aad4030e652 = $this->env->getExtension("native_profiler");
        $__internal_a7db751cbcec562fa282991c9a0e8b29d61874a68007cadd8ff76aad4030e652->enter($__internal_a7db751cbcec562fa282991c9a0e8b29d61874a68007cadd8ff76aad4030e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_a7db751cbcec562fa282991c9a0e8b29d61874a68007cadd8ff76aad4030e652->leave($__internal_a7db751cbcec562fa282991c9a0e8b29d61874a68007cadd8ff76aad4030e652_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30488ddab871756416e44ebaec686ca253bbb0d4ea2c2691140f452c98295e48 = $this->env->getExtension("native_profiler");
        $__internal_30488ddab871756416e44ebaec686ca253bbb0d4ea2c2691140f452c98295e48->enter($__internal_30488ddab871756416e44ebaec686ca253bbb0d4ea2c2691140f452c98295e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_30488ddab871756416e44ebaec686ca253bbb0d4ea2c2691140f452c98295e48->leave($__internal_30488ddab871756416e44ebaec686ca253bbb0d4ea2c2691140f452c98295e48_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a611a640ebce3ed47763b44b1aba2aab2af038b931afcfc9cac3bf52aeb66868 = $this->env->getExtension("native_profiler");
        $__internal_a611a640ebce3ed47763b44b1aba2aab2af038b931afcfc9cac3bf52aeb66868->enter($__internal_a611a640ebce3ed47763b44b1aba2aab2af038b931afcfc9cac3bf52aeb66868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a611a640ebce3ed47763b44b1aba2aab2af038b931afcfc9cac3bf52aeb66868->leave($__internal_a611a640ebce3ed47763b44b1aba2aab2af038b931afcfc9cac3bf52aeb66868_prof);

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
