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
        $__internal_8630a83c4863e3c9e87e49b569f51a77f1bfe367cd9ba9914d9012a03a8b23f4 = $this->env->getExtension("native_profiler");
        $__internal_8630a83c4863e3c9e87e49b569f51a77f1bfe367cd9ba9914d9012a03a8b23f4->enter($__internal_8630a83c4863e3c9e87e49b569f51a77f1bfe367cd9ba9914d9012a03a8b23f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_8630a83c4863e3c9e87e49b569f51a77f1bfe367cd9ba9914d9012a03a8b23f4->leave($__internal_8630a83c4863e3c9e87e49b569f51a77f1bfe367cd9ba9914d9012a03a8b23f4_prof);

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
