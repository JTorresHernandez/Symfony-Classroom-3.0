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
        $__internal_aa31d5a1013f95ac29bd70e4b16e2bf4a7192fa27b6583f266eb0dd0a7ccaf93 = $this->env->getExtension("native_profiler");
        $__internal_aa31d5a1013f95ac29bd70e4b16e2bf4a7192fa27b6583f266eb0dd0a7ccaf93->enter($__internal_aa31d5a1013f95ac29bd70e4b16e2bf4a7192fa27b6583f266eb0dd0a7ccaf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa31d5a1013f95ac29bd70e4b16e2bf4a7192fa27b6583f266eb0dd0a7ccaf93->leave($__internal_aa31d5a1013f95ac29bd70e4b16e2bf4a7192fa27b6583f266eb0dd0a7ccaf93_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_57051c888829b5224aa273def1efde070f04e8719a75adf3572b5492594b2835 = $this->env->getExtension("native_profiler");
        $__internal_57051c888829b5224aa273def1efde070f04e8719a75adf3572b5492594b2835->enter($__internal_57051c888829b5224aa273def1efde070f04e8719a75adf3572b5492594b2835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_57051c888829b5224aa273def1efde070f04e8719a75adf3572b5492594b2835->leave($__internal_57051c888829b5224aa273def1efde070f04e8719a75adf3572b5492594b2835_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9e09c8bbab55768ce688842c48d1571d8566945d1218878b9525509813c094 = $this->env->getExtension("native_profiler");
        $__internal_7c9e09c8bbab55768ce688842c48d1571d8566945d1218878b9525509813c094->enter($__internal_7c9e09c8bbab55768ce688842c48d1571d8566945d1218878b9525509813c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_7c9e09c8bbab55768ce688842c48d1571d8566945d1218878b9525509813c094->leave($__internal_7c9e09c8bbab55768ce688842c48d1571d8566945d1218878b9525509813c094_prof);

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
