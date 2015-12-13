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
        $__internal_7bf164a213134d94a264cf66296c80d6127b2940b35fa522f95c1bc480e6ec85 = $this->env->getExtension("native_profiler");
        $__internal_7bf164a213134d94a264cf66296c80d6127b2940b35fa522f95c1bc480e6ec85->enter($__internal_7bf164a213134d94a264cf66296c80d6127b2940b35fa522f95c1bc480e6ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7bf164a213134d94a264cf66296c80d6127b2940b35fa522f95c1bc480e6ec85->leave($__internal_7bf164a213134d94a264cf66296c80d6127b2940b35fa522f95c1bc480e6ec85_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f34855cd54bb1376f6167dc0563c6a635d28f42ae82907b5ed084ae5cc840c2b = $this->env->getExtension("native_profiler");
        $__internal_f34855cd54bb1376f6167dc0563c6a635d28f42ae82907b5ed084ae5cc840c2b->enter($__internal_f34855cd54bb1376f6167dc0563c6a635d28f42ae82907b5ed084ae5cc840c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f34855cd54bb1376f6167dc0563c6a635d28f42ae82907b5ed084ae5cc840c2b->leave($__internal_f34855cd54bb1376f6167dc0563c6a635d28f42ae82907b5ed084ae5cc840c2b_prof);

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
