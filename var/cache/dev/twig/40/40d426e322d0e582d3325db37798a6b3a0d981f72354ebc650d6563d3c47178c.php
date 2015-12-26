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
        $__internal_496698ee2c1e76106d33f0fdfb16ef3d604ea6a1af9a7720b58940964dcd940b = $this->env->getExtension("native_profiler");
        $__internal_496698ee2c1e76106d33f0fdfb16ef3d604ea6a1af9a7720b58940964dcd940b->enter($__internal_496698ee2c1e76106d33f0fdfb16ef3d604ea6a1af9a7720b58940964dcd940b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_496698ee2c1e76106d33f0fdfb16ef3d604ea6a1af9a7720b58940964dcd940b->leave($__internal_496698ee2c1e76106d33f0fdfb16ef3d604ea6a1af9a7720b58940964dcd940b_prof);

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
