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
        $__internal_52107740b53e909c3cb5630b5988ed044e0505598d8e3f0c3c8494d840414644 = $this->env->getExtension("native_profiler");
        $__internal_52107740b53e909c3cb5630b5988ed044e0505598d8e3f0c3c8494d840414644->enter($__internal_52107740b53e909c3cb5630b5988ed044e0505598d8e3f0c3c8494d840414644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52107740b53e909c3cb5630b5988ed044e0505598d8e3f0c3c8494d840414644->leave($__internal_52107740b53e909c3cb5630b5988ed044e0505598d8e3f0c3c8494d840414644_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_36f3547e5b39880955916d18b44b0abe317dc92a0a994c7147a15e9072c6f505 = $this->env->getExtension("native_profiler");
        $__internal_36f3547e5b39880955916d18b44b0abe317dc92a0a994c7147a15e9072c6f505->enter($__internal_36f3547e5b39880955916d18b44b0abe317dc92a0a994c7147a15e9072c6f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_36f3547e5b39880955916d18b44b0abe317dc92a0a994c7147a15e9072c6f505->leave($__internal_36f3547e5b39880955916d18b44b0abe317dc92a0a994c7147a15e9072c6f505_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d691b379fcda7d5435bec46a630bab117c3f2015f721e0448fc6603b48fd0cb = $this->env->getExtension("native_profiler");
        $__internal_5d691b379fcda7d5435bec46a630bab117c3f2015f721e0448fc6603b48fd0cb->enter($__internal_5d691b379fcda7d5435bec46a630bab117c3f2015f721e0448fc6603b48fd0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_5d691b379fcda7d5435bec46a630bab117c3f2015f721e0448fc6603b48fd0cb->leave($__internal_5d691b379fcda7d5435bec46a630bab117c3f2015f721e0448fc6603b48fd0cb_prof);

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
