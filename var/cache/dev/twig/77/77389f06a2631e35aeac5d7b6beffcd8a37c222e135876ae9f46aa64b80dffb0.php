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
        $__internal_39aec1bf4747a5b696afc19fff6a035a637a0f0cd38a0809d276fdc444d56445 = $this->env->getExtension("native_profiler");
        $__internal_39aec1bf4747a5b696afc19fff6a035a637a0f0cd38a0809d276fdc444d56445->enter($__internal_39aec1bf4747a5b696afc19fff6a035a637a0f0cd38a0809d276fdc444d56445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39aec1bf4747a5b696afc19fff6a035a637a0f0cd38a0809d276fdc444d56445->leave($__internal_39aec1bf4747a5b696afc19fff6a035a637a0f0cd38a0809d276fdc444d56445_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_f28e06dc70fd9048d8e1e5d516d998f133a62ff42caebdb409a4145bd71d1d25 = $this->env->getExtension("native_profiler");
        $__internal_f28e06dc70fd9048d8e1e5d516d998f133a62ff42caebdb409a4145bd71d1d25->enter($__internal_f28e06dc70fd9048d8e1e5d516d998f133a62ff42caebdb409a4145bd71d1d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_f28e06dc70fd9048d8e1e5d516d998f133a62ff42caebdb409a4145bd71d1d25->leave($__internal_f28e06dc70fd9048d8e1e5d516d998f133a62ff42caebdb409a4145bd71d1d25_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef93cf24650a0d7373b7c503b94fa5c398287a54c45c36986bb03b22e65c1b92 = $this->env->getExtension("native_profiler");
        $__internal_ef93cf24650a0d7373b7c503b94fa5c398287a54c45c36986bb03b22e65c1b92->enter($__internal_ef93cf24650a0d7373b7c503b94fa5c398287a54c45c36986bb03b22e65c1b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_ef93cf24650a0d7373b7c503b94fa5c398287a54c45c36986bb03b22e65c1b92->leave($__internal_ef93cf24650a0d7373b7c503b94fa5c398287a54c45c36986bb03b22e65c1b92_prof);

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
