<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
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
        $__internal_e0cc01983095685cf23bb25097d10a8c6648dc5544dd5c00e14544ec0713c440 = $this->env->getExtension("native_profiler");
        $__internal_e0cc01983095685cf23bb25097d10a8c6648dc5544dd5c00e14544ec0713c440->enter($__internal_e0cc01983095685cf23bb25097d10a8c6648dc5544dd5c00e14544ec0713c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0cc01983095685cf23bb25097d10a8c6648dc5544dd5c00e14544ec0713c440->leave($__internal_e0cc01983095685cf23bb25097d10a8c6648dc5544dd5c00e14544ec0713c440_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec48199e19be476a97ea72998e87ae60d93053567eca61d77f8b4705d83dba2a = $this->env->getExtension("native_profiler");
        $__internal_ec48199e19be476a97ea72998e87ae60d93053567eca61d77f8b4705d83dba2a->enter($__internal_ec48199e19be476a97ea72998e87ae60d93053567eca61d77f8b4705d83dba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ec48199e19be476a97ea72998e87ae60d93053567eca61d77f8b4705d83dba2a->leave($__internal_ec48199e19be476a97ea72998e87ae60d93053567eca61d77f8b4705d83dba2a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
