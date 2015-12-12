<?php

/* :article:article.html.twig */
class __TwigTemplate_f4be071e46d2528bd3ce318920551926e7d6a28c7a85027066709b5c81348e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:article.html.twig", 1);
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
        $__internal_d1486ecb18edf5dc0d8fbfcf5e643e35607c2078b993fcd8c8efb6638c40fe9c = $this->env->getExtension("native_profiler");
        $__internal_d1486ecb18edf5dc0d8fbfcf5e643e35607c2078b993fcd8c8efb6638c40fe9c->enter($__internal_d1486ecb18edf5dc0d8fbfcf5e643e35607c2078b993fcd8c8efb6638c40fe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1486ecb18edf5dc0d8fbfcf5e643e35607c2078b993fcd8c8efb6638c40fe9c->leave($__internal_d1486ecb18edf5dc0d8fbfcf5e643e35607c2078b993fcd8c8efb6638c40fe9c_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_936a0b234af691382d872490246893e7a8f33dc207465bb93ea9136b54da8d39 = $this->env->getExtension("native_profiler");
        $__internal_936a0b234af691382d872490246893e7a8f33dc207465bb93ea9136b54da8d39->enter($__internal_936a0b234af691382d872490246893e7a8f33dc207465bb93ea9136b54da8d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_936a0b234af691382d872490246893e7a8f33dc207465bb93ea9136b54da8d39->leave($__internal_936a0b234af691382d872490246893e7a8f33dc207465bb93ea9136b54da8d39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d6322167f279f6e87c17ea3aa31133be342b2bca873cf7ae1a35301dcd57cf = $this->env->getExtension("native_profiler");
        $__internal_71d6322167f279f6e87c17ea3aa31133be342b2bca873cf7ae1a35301dcd57cf->enter($__internal_71d6322167f279f6e87c17ea3aa31133be342b2bca873cf7ae1a35301dcd57cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_71d6322167f279f6e87c17ea3aa31133be342b2bca873cf7ae1a35301dcd57cf->leave($__internal_71d6322167f279f6e87c17ea3aa31133be342b2bca873cf7ae1a35301dcd57cf_prof);

    }

    public function getTemplateName()
    {
        return ":article:article.html.twig";
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
/* {% block headTitle %}Show Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include ':article:article_content.html.twig' with {'show_content': true, 'comments': comments} %}*/
/* {% endblock %}*/
