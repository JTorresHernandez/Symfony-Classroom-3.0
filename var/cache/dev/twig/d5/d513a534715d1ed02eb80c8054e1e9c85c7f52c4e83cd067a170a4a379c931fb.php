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
        $__internal_3e5e509c78430869ad1de0c7816ee3a26ab570c07042f79528afb2ad78347df0 = $this->env->getExtension("native_profiler");
        $__internal_3e5e509c78430869ad1de0c7816ee3a26ab570c07042f79528afb2ad78347df0->enter($__internal_3e5e509c78430869ad1de0c7816ee3a26ab570c07042f79528afb2ad78347df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3e5e509c78430869ad1de0c7816ee3a26ab570c07042f79528afb2ad78347df0->leave($__internal_3e5e509c78430869ad1de0c7816ee3a26ab570c07042f79528afb2ad78347df0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80f9e2f6c0c1813073f9f7c55ac7be8255b28688a27ae0fe8a24fb20840dfe84 = $this->env->getExtension("native_profiler");
        $__internal_80f9e2f6c0c1813073f9f7c55ac7be8255b28688a27ae0fe8a24fb20840dfe84->enter($__internal_80f9e2f6c0c1813073f9f7c55ac7be8255b28688a27ae0fe8a24fb20840dfe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80f9e2f6c0c1813073f9f7c55ac7be8255b28688a27ae0fe8a24fb20840dfe84->leave($__internal_80f9e2f6c0c1813073f9f7c55ac7be8255b28688a27ae0fe8a24fb20840dfe84_prof);

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
