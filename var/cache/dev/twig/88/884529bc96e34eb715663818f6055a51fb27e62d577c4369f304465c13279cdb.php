<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a932f845a7fb0d228b9ab271ebd9b33e89990b7c75f0e7a1ce239a6392182c9f = $this->env->getExtension("native_profiler");
        $__internal_a932f845a7fb0d228b9ab271ebd9b33e89990b7c75f0e7a1ce239a6392182c9f->enter($__internal_a932f845a7fb0d228b9ab271ebd9b33e89990b7c75f0e7a1ce239a6392182c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a932f845a7fb0d228b9ab271ebd9b33e89990b7c75f0e7a1ce239a6392182c9f->leave($__internal_a932f845a7fb0d228b9ab271ebd9b33e89990b7c75f0e7a1ce239a6392182c9f_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_3faf607ab3635c68a1426bd463d03cd9505d8863662e17d3e4480bb0c40d6f66 = $this->env->getExtension("native_profiler");
        $__internal_3faf607ab3635c68a1426bd463d03cd9505d8863662e17d3e4480bb0c40d6f66->enter($__internal_3faf607ab3635c68a1426bd463d03cd9505d8863662e17d3e4480bb0c40d6f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_3faf607ab3635c68a1426bd463d03cd9505d8863662e17d3e4480bb0c40d6f66->leave($__internal_3faf607ab3635c68a1426bd463d03cd9505d8863662e17d3e4480bb0c40d6f66_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d530920346949d2ac0f02b45b9801bd10da544c5a419fac64d5d0ca5840720 = $this->env->getExtension("native_profiler");
        $__internal_63d530920346949d2ac0f02b45b9801bd10da544c5a419fac64d5d0ca5840720->enter($__internal_63d530920346949d2ac0f02b45b9801bd10da544c5a419fac64d5d0ca5840720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_63d530920346949d2ac0f02b45b9801bd10da544c5a419fac64d5d0ca5840720->leave($__internal_63d530920346949d2ac0f02b45b9801bd10da544c5a419fac64d5d0ca5840720_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2a48144fd53b9e49bd0e36f49ed80d2f718aafb76b4f8acbf7a279e70d1adae2 = $this->env->getExtension("native_profiler");
        $__internal_2a48144fd53b9e49bd0e36f49ed80d2f718aafb76b4f8acbf7a279e70d1adae2->enter($__internal_2a48144fd53b9e49bd0e36f49ed80d2f718aafb76b4f8acbf7a279e70d1adae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2a48144fd53b9e49bd0e36f49ed80d2f718aafb76b4f8acbf7a279e70d1adae2->leave($__internal_2a48144fd53b9e49bd0e36f49ed80d2f718aafb76b4f8acbf7a279e70d1adae2_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
