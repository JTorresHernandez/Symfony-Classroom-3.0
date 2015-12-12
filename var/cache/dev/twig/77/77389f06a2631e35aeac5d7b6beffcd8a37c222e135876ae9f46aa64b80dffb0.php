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
        $__internal_f74d9462adcc366acfcc549f2c044e9ebec536d08ce77dce65fa4885f8dc6c4b = $this->env->getExtension("native_profiler");
        $__internal_f74d9462adcc366acfcc549f2c044e9ebec536d08ce77dce65fa4885f8dc6c4b->enter($__internal_f74d9462adcc366acfcc549f2c044e9ebec536d08ce77dce65fa4885f8dc6c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74d9462adcc366acfcc549f2c044e9ebec536d08ce77dce65fa4885f8dc6c4b->leave($__internal_f74d9462adcc366acfcc549f2c044e9ebec536d08ce77dce65fa4885f8dc6c4b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_136229069f0f373952f2c4167869e3c25913a9e7e687fe1a13013e4b56d40874 = $this->env->getExtension("native_profiler");
        $__internal_136229069f0f373952f2c4167869e3c25913a9e7e687fe1a13013e4b56d40874->enter($__internal_136229069f0f373952f2c4167869e3c25913a9e7e687fe1a13013e4b56d40874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_136229069f0f373952f2c4167869e3c25913a9e7e687fe1a13013e4b56d40874->leave($__internal_136229069f0f373952f2c4167869e3c25913a9e7e687fe1a13013e4b56d40874_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d83bc1c91c1597d5278c96fddc9153050dc8fff053aeb48ac557dbb805c08021 = $this->env->getExtension("native_profiler");
        $__internal_d83bc1c91c1597d5278c96fddc9153050dc8fff053aeb48ac557dbb805c08021->enter($__internal_d83bc1c91c1597d5278c96fddc9153050dc8fff053aeb48ac557dbb805c08021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_d83bc1c91c1597d5278c96fddc9153050dc8fff053aeb48ac557dbb805c08021->leave($__internal_d83bc1c91c1597d5278c96fddc9153050dc8fff053aeb48ac557dbb805c08021_prof);

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
