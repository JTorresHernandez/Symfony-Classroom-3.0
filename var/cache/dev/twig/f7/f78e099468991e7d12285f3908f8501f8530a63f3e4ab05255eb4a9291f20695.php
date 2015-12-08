<?php

/* :article:form.html.twig */
class __TwigTemplate_21ffc41319981db478590a7bd84b3f26acdca0b8352e1cd2ffa4b3307bdc1861 extends Twig_Template
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
        $__internal_b421bf926034b9345640711309cd450ee0303fd2d328567e3a146ab8d6cb74a9 = $this->env->getExtension("native_profiler");
        $__internal_b421bf926034b9345640711309cd450ee0303fd2d328567e3a146ab8d6cb74a9->enter($__internal_b421bf926034b9345640711309cd450ee0303fd2d328567e3a146ab8d6cb74a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b421bf926034b9345640711309cd450ee0303fd2d328567e3a146ab8d6cb74a9->leave($__internal_b421bf926034b9345640711309cd450ee0303fd2d328567e3a146ab8d6cb74a9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_27682844969f05767775bf0af0ea3875d702fc12ba148b32870b4b1da0e0bef0 = $this->env->getExtension("native_profiler");
        $__internal_27682844969f05767775bf0af0ea3875d702fc12ba148b32870b4b1da0e0bef0->enter($__internal_27682844969f05767775bf0af0ea3875d702fc12ba148b32870b4b1da0e0bef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_27682844969f05767775bf0af0ea3875d702fc12ba148b32870b4b1da0e0bef0->leave($__internal_27682844969f05767775bf0af0ea3875d702fc12ba148b32870b4b1da0e0bef0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a91e5d5168a94cdf3fa95e9adb6b61b95f3859467e7747dbd8dff5ba4bc496d = $this->env->getExtension("native_profiler");
        $__internal_0a91e5d5168a94cdf3fa95e9adb6b61b95f3859467e7747dbd8dff5ba4bc496d->enter($__internal_0a91e5d5168a94cdf3fa95e9adb6b61b95f3859467e7747dbd8dff5ba4bc496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_0a91e5d5168a94cdf3fa95e9adb6b61b95f3859467e7747dbd8dff5ba4bc496d->leave($__internal_0a91e5d5168a94cdf3fa95e9adb6b61b95f3859467e7747dbd8dff5ba4bc496d_prof);

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
