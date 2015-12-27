<?php

/* :comment:show-form.html.twig */
class __TwigTemplate_a4aaa4a520bb4c44b384c06e9b94b4674d8045c256bdc791684a9cd2027041da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70e31927d71a668294d59d999d9f090c9cd8718743e5eec499e76adbc34818f6 = $this->env->getExtension("native_profiler");
        $__internal_70e31927d71a668294d59d999d9f090c9cd8718743e5eec499e76adbc34818f6->enter($__internal_70e31927d71a668294d59d999d9f090c9cd8718743e5eec499e76adbc34818f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_70e31927d71a668294d59d999d9f090c9cd8718743e5eec499e76adbc34818f6->leave($__internal_70e31927d71a668294d59d999d9f090c9cd8718743e5eec499e76adbc34818f6_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ form(form) }}*/
