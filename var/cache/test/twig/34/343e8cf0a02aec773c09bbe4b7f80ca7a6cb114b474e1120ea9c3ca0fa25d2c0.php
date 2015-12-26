<?php

/* :article:article.html.twig */
class __TwigTemplate_5ded7b4e26e52d337850ad82ac6bca51d07cfb78d0c3cbd83d911552b833637b extends Twig_Template
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
        $__internal_fc355e234c390514ff760e6117b5f2afdb29e629156752f3c85b86d3123c643b = $this->env->getExtension("native_profiler");
        $__internal_fc355e234c390514ff760e6117b5f2afdb29e629156752f3c85b86d3123c643b->enter($__internal_fc355e234c390514ff760e6117b5f2afdb29e629156752f3c85b86d3123c643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc355e234c390514ff760e6117b5f2afdb29e629156752f3c85b86d3123c643b->leave($__internal_fc355e234c390514ff760e6117b5f2afdb29e629156752f3c85b86d3123c643b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_508b8adb36150f1eb44286d352deb64a673fd5a22036c02f1e80e0a365e7ec53 = $this->env->getExtension("native_profiler");
        $__internal_508b8adb36150f1eb44286d352deb64a673fd5a22036c02f1e80e0a365e7ec53->enter($__internal_508b8adb36150f1eb44286d352deb64a673fd5a22036c02f1e80e0a365e7ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_508b8adb36150f1eb44286d352deb64a673fd5a22036c02f1e80e0a365e7ec53->leave($__internal_508b8adb36150f1eb44286d352deb64a673fd5a22036c02f1e80e0a365e7ec53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_572196af7758e271ec7ccdc1de90cbf916a04f3464dc305c783006387af965dd = $this->env->getExtension("native_profiler");
        $__internal_572196af7758e271ec7ccdc1de90cbf916a04f3464dc305c783006387af965dd->enter($__internal_572196af7758e271ec7ccdc1de90cbf916a04f3464dc305c783006387af965dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_572196af7758e271ec7ccdc1de90cbf916a04f3464dc305c783006387af965dd->leave($__internal_572196af7758e271ec7ccdc1de90cbf916a04f3464dc305c783006387af965dd_prof);

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
