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
        $__internal_9b68e505f800f5ddf73a85906bad63989a81d02ef2b146d2edf8d7e8e709d82f = $this->env->getExtension("native_profiler");
        $__internal_9b68e505f800f5ddf73a85906bad63989a81d02ef2b146d2edf8d7e8e709d82f->enter($__internal_9b68e505f800f5ddf73a85906bad63989a81d02ef2b146d2edf8d7e8e709d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b68e505f800f5ddf73a85906bad63989a81d02ef2b146d2edf8d7e8e709d82f->leave($__internal_9b68e505f800f5ddf73a85906bad63989a81d02ef2b146d2edf8d7e8e709d82f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6eae278558565810de2992701c3d5fc7de6e65200b5e4fb5e31cac7d01b1677 = $this->env->getExtension("native_profiler");
        $__internal_b6eae278558565810de2992701c3d5fc7de6e65200b5e4fb5e31cac7d01b1677->enter($__internal_b6eae278558565810de2992701c3d5fc7de6e65200b5e4fb5e31cac7d01b1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b6eae278558565810de2992701c3d5fc7de6e65200b5e4fb5e31cac7d01b1677->leave($__internal_b6eae278558565810de2992701c3d5fc7de6e65200b5e4fb5e31cac7d01b1677_prof);

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
