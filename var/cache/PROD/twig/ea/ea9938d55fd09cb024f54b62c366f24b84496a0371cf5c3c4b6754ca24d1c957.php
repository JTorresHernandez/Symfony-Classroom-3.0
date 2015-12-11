<?php

/* :article:form.html.twig */
class __TwigTemplate_3766c2dd426a7c5304aefa63a96fdde3898ab028da0a4342750e674efc022967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
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
        $__internal_48546d888ae3fac5e9a7316ce5d245ce91c146e7ba6773b28d33ae8d78611336 = $this->env->getExtension("native_profiler");
        $__internal_48546d888ae3fac5e9a7316ce5d245ce91c146e7ba6773b28d33ae8d78611336->enter($__internal_48546d888ae3fac5e9a7316ce5d245ce91c146e7ba6773b28d33ae8d78611336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48546d888ae3fac5e9a7316ce5d245ce91c146e7ba6773b28d33ae8d78611336->leave($__internal_48546d888ae3fac5e9a7316ce5d245ce91c146e7ba6773b28d33ae8d78611336_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_573dfe3cae627037eeaf326bfe2ee4e70f3f5e6d8e7a970c6a4805bfa582f8ea = $this->env->getExtension("native_profiler");
        $__internal_573dfe3cae627037eeaf326bfe2ee4e70f3f5e6d8e7a970c6a4805bfa582f8ea->enter($__internal_573dfe3cae627037eeaf326bfe2ee4e70f3f5e6d8e7a970c6a4805bfa582f8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_573dfe3cae627037eeaf326bfe2ee4e70f3f5e6d8e7a970c6a4805bfa582f8ea->leave($__internal_573dfe3cae627037eeaf326bfe2ee4e70f3f5e6d8e7a970c6a4805bfa582f8ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_183910a9673ba013b0f2dda59eb2ccb7bddfed1f8e66c3237873cc0953785bc9 = $this->env->getExtension("native_profiler");
        $__internal_183910a9673ba013b0f2dda59eb2ccb7bddfed1f8e66c3237873cc0953785bc9->enter($__internal_183910a9673ba013b0f2dda59eb2ccb7bddfed1f8e66c3237873cc0953785bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_183910a9673ba013b0f2dda59eb2ccb7bddfed1f8e66c3237873cc0953785bc9->leave($__internal_183910a9673ba013b0f2dda59eb2ccb7bddfed1f8e66c3237873cc0953785bc9_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
