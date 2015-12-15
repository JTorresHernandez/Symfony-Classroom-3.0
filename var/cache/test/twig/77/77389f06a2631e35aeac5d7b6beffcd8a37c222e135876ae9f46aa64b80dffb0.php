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
        $__internal_16adc2a5aae6373661885f24de2e4ce8822a961edba501b62b1b129f87c0b8d9 = $this->env->getExtension("native_profiler");
        $__internal_16adc2a5aae6373661885f24de2e4ce8822a961edba501b62b1b129f87c0b8d9->enter($__internal_16adc2a5aae6373661885f24de2e4ce8822a961edba501b62b1b129f87c0b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16adc2a5aae6373661885f24de2e4ce8822a961edba501b62b1b129f87c0b8d9->leave($__internal_16adc2a5aae6373661885f24de2e4ce8822a961edba501b62b1b129f87c0b8d9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_3646491ce5cf9dd1c5215fc07bf8d7d0eed5b7c2c69bd45fdaeccbf028e1e298 = $this->env->getExtension("native_profiler");
        $__internal_3646491ce5cf9dd1c5215fc07bf8d7d0eed5b7c2c69bd45fdaeccbf028e1e298->enter($__internal_3646491ce5cf9dd1c5215fc07bf8d7d0eed5b7c2c69bd45fdaeccbf028e1e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_3646491ce5cf9dd1c5215fc07bf8d7d0eed5b7c2c69bd45fdaeccbf028e1e298->leave($__internal_3646491ce5cf9dd1c5215fc07bf8d7d0eed5b7c2c69bd45fdaeccbf028e1e298_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ce609872a136c074f0cccbf9569196a75d71131aa9cca3fa83edbc8eb863dd = $this->env->getExtension("native_profiler");
        $__internal_c4ce609872a136c074f0cccbf9569196a75d71131aa9cca3fa83edbc8eb863dd->enter($__internal_c4ce609872a136c074f0cccbf9569196a75d71131aa9cca3fa83edbc8eb863dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_c4ce609872a136c074f0cccbf9569196a75d71131aa9cca3fa83edbc8eb863dd->leave($__internal_c4ce609872a136c074f0cccbf9569196a75d71131aa9cca3fa83edbc8eb863dd_prof);

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
