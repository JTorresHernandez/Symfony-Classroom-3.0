<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c3264ef05daaef5dff8b86ff39b32378d24adc8c391ffba45f1f9a6e5264bc7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c47e3ac860845bf7688c7baa9e02bdd655fce67fa723cb114855c06b073c57 = $this->env->getExtension("native_profiler");
        $__internal_72c47e3ac860845bf7688c7baa9e02bdd655fce67fa723cb114855c06b073c57->enter($__internal_72c47e3ac860845bf7688c7baa9e02bdd655fce67fa723cb114855c06b073c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_72c47e3ac860845bf7688c7baa9e02bdd655fce67fa723cb114855c06b073c57->leave($__internal_72c47e3ac860845bf7688c7baa9e02bdd655fce67fa723cb114855c06b073c57_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2195fcc24271c512796a33e924ceedf4ce7fffa58b5fe2ea3d8ab0f3f10895f8 = $this->env->getExtension("native_profiler");
        $__internal_2195fcc24271c512796a33e924ceedf4ce7fffa58b5fe2ea3d8ab0f3f10895f8->enter($__internal_2195fcc24271c512796a33e924ceedf4ce7fffa58b5fe2ea3d8ab0f3f10895f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2195fcc24271c512796a33e924ceedf4ce7fffa58b5fe2ea3d8ab0f3f10895f8->leave($__internal_2195fcc24271c512796a33e924ceedf4ce7fffa58b5fe2ea3d8ab0f3f10895f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
