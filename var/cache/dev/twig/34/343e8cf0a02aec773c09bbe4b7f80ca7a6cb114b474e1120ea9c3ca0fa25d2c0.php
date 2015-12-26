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
        $__internal_75fbd7b350c7c930418c27eea700609b10215e5e326913a0de4ee39171e7190b = $this->env->getExtension("native_profiler");
        $__internal_75fbd7b350c7c930418c27eea700609b10215e5e326913a0de4ee39171e7190b->enter($__internal_75fbd7b350c7c930418c27eea700609b10215e5e326913a0de4ee39171e7190b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fbd7b350c7c930418c27eea700609b10215e5e326913a0de4ee39171e7190b->leave($__internal_75fbd7b350c7c930418c27eea700609b10215e5e326913a0de4ee39171e7190b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_47bfabd8eb072305c90dbce6f934f180baebf294b5c7b6d6c2ef1dccffee8c40 = $this->env->getExtension("native_profiler");
        $__internal_47bfabd8eb072305c90dbce6f934f180baebf294b5c7b6d6c2ef1dccffee8c40->enter($__internal_47bfabd8eb072305c90dbce6f934f180baebf294b5c7b6d6c2ef1dccffee8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_47bfabd8eb072305c90dbce6f934f180baebf294b5c7b6d6c2ef1dccffee8c40->leave($__internal_47bfabd8eb072305c90dbce6f934f180baebf294b5c7b6d6c2ef1dccffee8c40_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed63c80e8ac6110bd547e2a6ef0b8a1eaf5988ed6bd83ef0a5522e2ca1866088 = $this->env->getExtension("native_profiler");
        $__internal_ed63c80e8ac6110bd547e2a6ef0b8a1eaf5988ed6bd83ef0a5522e2ca1866088->enter($__internal_ed63c80e8ac6110bd547e2a6ef0b8a1eaf5988ed6bd83ef0a5522e2ca1866088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_ed63c80e8ac6110bd547e2a6ef0b8a1eaf5988ed6bd83ef0a5522e2ca1866088->leave($__internal_ed63c80e8ac6110bd547e2a6ef0b8a1eaf5988ed6bd83ef0a5522e2ca1866088_prof);

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
