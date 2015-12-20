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
        $__internal_79a416034dd5a39b8626086ac809622fb3a2702cc520aa243402d445da857e12 = $this->env->getExtension("native_profiler");
        $__internal_79a416034dd5a39b8626086ac809622fb3a2702cc520aa243402d445da857e12->enter($__internal_79a416034dd5a39b8626086ac809622fb3a2702cc520aa243402d445da857e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_79a416034dd5a39b8626086ac809622fb3a2702cc520aa243402d445da857e12->leave($__internal_79a416034dd5a39b8626086ac809622fb3a2702cc520aa243402d445da857e12_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9945fbeefa10977558ff0a71b9a5b963e8fb5f6bc0bbeeb26955f39c6b2829a2 = $this->env->getExtension("native_profiler");
        $__internal_9945fbeefa10977558ff0a71b9a5b963e8fb5f6bc0bbeeb26955f39c6b2829a2->enter($__internal_9945fbeefa10977558ff0a71b9a5b963e8fb5f6bc0bbeeb26955f39c6b2829a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9945fbeefa10977558ff0a71b9a5b963e8fb5f6bc0bbeeb26955f39c6b2829a2->leave($__internal_9945fbeefa10977558ff0a71b9a5b963e8fb5f6bc0bbeeb26955f39c6b2829a2_prof);

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
