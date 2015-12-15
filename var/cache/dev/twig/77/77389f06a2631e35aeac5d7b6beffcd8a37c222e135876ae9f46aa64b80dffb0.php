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
        $__internal_8ceece1d85bab3cb6c5a43aeb6458ea9b8cca48790baad4ceb2961e2d7e4449d = $this->env->getExtension("native_profiler");
        $__internal_8ceece1d85bab3cb6c5a43aeb6458ea9b8cca48790baad4ceb2961e2d7e4449d->enter($__internal_8ceece1d85bab3cb6c5a43aeb6458ea9b8cca48790baad4ceb2961e2d7e4449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ceece1d85bab3cb6c5a43aeb6458ea9b8cca48790baad4ceb2961e2d7e4449d->leave($__internal_8ceece1d85bab3cb6c5a43aeb6458ea9b8cca48790baad4ceb2961e2d7e4449d_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_eb50bc36bb5ea69797226e41d484c810af6f8f117289d9d099c1dd4314bd706b = $this->env->getExtension("native_profiler");
        $__internal_eb50bc36bb5ea69797226e41d484c810af6f8f117289d9d099c1dd4314bd706b->enter($__internal_eb50bc36bb5ea69797226e41d484c810af6f8f117289d9d099c1dd4314bd706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_eb50bc36bb5ea69797226e41d484c810af6f8f117289d9d099c1dd4314bd706b->leave($__internal_eb50bc36bb5ea69797226e41d484c810af6f8f117289d9d099c1dd4314bd706b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_768fb4637194a97ac5072ff6b0bdbe945911d2b77b57ad0ede911716d01e9a7e = $this->env->getExtension("native_profiler");
        $__internal_768fb4637194a97ac5072ff6b0bdbe945911d2b77b57ad0ede911716d01e9a7e->enter($__internal_768fb4637194a97ac5072ff6b0bdbe945911d2b77b57ad0ede911716d01e9a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_768fb4637194a97ac5072ff6b0bdbe945911d2b77b57ad0ede911716d01e9a7e->leave($__internal_768fb4637194a97ac5072ff6b0bdbe945911d2b77b57ad0ede911716d01e9a7e_prof);

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
