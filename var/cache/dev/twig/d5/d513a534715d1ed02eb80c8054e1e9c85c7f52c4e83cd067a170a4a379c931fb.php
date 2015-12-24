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
        $__internal_bc7da2b38e13cbd590bfed8465b4d5272f98842b26da90de985c7bec576f1cbb = $this->env->getExtension("native_profiler");
        $__internal_bc7da2b38e13cbd590bfed8465b4d5272f98842b26da90de985c7bec576f1cbb->enter($__internal_bc7da2b38e13cbd590bfed8465b4d5272f98842b26da90de985c7bec576f1cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bc7da2b38e13cbd590bfed8465b4d5272f98842b26da90de985c7bec576f1cbb->leave($__internal_bc7da2b38e13cbd590bfed8465b4d5272f98842b26da90de985c7bec576f1cbb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c95ff2e3238e3fa62c3c2c9e1dd94e23403237e7be146d35b4c5153403ec522 = $this->env->getExtension("native_profiler");
        $__internal_0c95ff2e3238e3fa62c3c2c9e1dd94e23403237e7be146d35b4c5153403ec522->enter($__internal_0c95ff2e3238e3fa62c3c2c9e1dd94e23403237e7be146d35b4c5153403ec522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0c95ff2e3238e3fa62c3c2c9e1dd94e23403237e7be146d35b4c5153403ec522->leave($__internal_0c95ff2e3238e3fa62c3c2c9e1dd94e23403237e7be146d35b4c5153403ec522_prof);

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
