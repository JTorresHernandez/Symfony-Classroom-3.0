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
        $__internal_d2f58588dfe699d1370e5d6a1ec087e1750ac7d12ebe4b5f9eb848a672ee2fe4 = $this->env->getExtension("native_profiler");
        $__internal_d2f58588dfe699d1370e5d6a1ec087e1750ac7d12ebe4b5f9eb848a672ee2fe4->enter($__internal_d2f58588dfe699d1370e5d6a1ec087e1750ac7d12ebe4b5f9eb848a672ee2fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f58588dfe699d1370e5d6a1ec087e1750ac7d12ebe4b5f9eb848a672ee2fe4->leave($__internal_d2f58588dfe699d1370e5d6a1ec087e1750ac7d12ebe4b5f9eb848a672ee2fe4_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_e9bf1a70a6e79199b6f510d7e7b75e2f999afb9e859ff4a65fa56ed1e0972ace = $this->env->getExtension("native_profiler");
        $__internal_e9bf1a70a6e79199b6f510d7e7b75e2f999afb9e859ff4a65fa56ed1e0972ace->enter($__internal_e9bf1a70a6e79199b6f510d7e7b75e2f999afb9e859ff4a65fa56ed1e0972ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_e9bf1a70a6e79199b6f510d7e7b75e2f999afb9e859ff4a65fa56ed1e0972ace->leave($__internal_e9bf1a70a6e79199b6f510d7e7b75e2f999afb9e859ff4a65fa56ed1e0972ace_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce71d2224dd11adbbab9fced986fc0d8e850c553b6641423c7d5d8314ec35ad = $this->env->getExtension("native_profiler");
        $__internal_3ce71d2224dd11adbbab9fced986fc0d8e850c553b6641423c7d5d8314ec35ad->enter($__internal_3ce71d2224dd11adbbab9fced986fc0d8e850c553b6641423c7d5d8314ec35ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_3ce71d2224dd11adbbab9fced986fc0d8e850c553b6641423c7d5d8314ec35ad->leave($__internal_3ce71d2224dd11adbbab9fced986fc0d8e850c553b6641423c7d5d8314ec35ad_prof);

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
