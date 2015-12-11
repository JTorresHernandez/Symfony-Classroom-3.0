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
        $__internal_728d55adcb9ffa6f173a22603899bbe01aab3c59f929d5301046022e263a2642 = $this->env->getExtension("native_profiler");
        $__internal_728d55adcb9ffa6f173a22603899bbe01aab3c59f929d5301046022e263a2642->enter($__internal_728d55adcb9ffa6f173a22603899bbe01aab3c59f929d5301046022e263a2642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728d55adcb9ffa6f173a22603899bbe01aab3c59f929d5301046022e263a2642->leave($__internal_728d55adcb9ffa6f173a22603899bbe01aab3c59f929d5301046022e263a2642_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_945e432d667444000750c2aaa4520718c0b937cced5ccbdd2a5c3cc751c7eb0f = $this->env->getExtension("native_profiler");
        $__internal_945e432d667444000750c2aaa4520718c0b937cced5ccbdd2a5c3cc751c7eb0f->enter($__internal_945e432d667444000750c2aaa4520718c0b937cced5ccbdd2a5c3cc751c7eb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_945e432d667444000750c2aaa4520718c0b937cced5ccbdd2a5c3cc751c7eb0f->leave($__internal_945e432d667444000750c2aaa4520718c0b937cced5ccbdd2a5c3cc751c7eb0f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_549a5f29999ae46caec5d0c3a103ae145abae0f77e3e2833375a6b339ef471e4 = $this->env->getExtension("native_profiler");
        $__internal_549a5f29999ae46caec5d0c3a103ae145abae0f77e3e2833375a6b339ef471e4->enter($__internal_549a5f29999ae46caec5d0c3a103ae145abae0f77e3e2833375a6b339ef471e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_549a5f29999ae46caec5d0c3a103ae145abae0f77e3e2833375a6b339ef471e4->leave($__internal_549a5f29999ae46caec5d0c3a103ae145abae0f77e3e2833375a6b339ef471e4_prof);

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
/*     {% include ':article:article_content.html.twig' with {'show_content': true} %}*/
/* {% endblock %}*/
