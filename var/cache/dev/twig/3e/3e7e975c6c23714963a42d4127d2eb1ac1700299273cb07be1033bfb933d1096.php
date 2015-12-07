<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b2bda4d52fc80ff92502505fec06b3c263c728a4835eae6e86ca57c71d310ee8 extends Twig_Template
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
        $__internal_18b756cd17c55d56722cb53147f34eece820e948d4976a78b074ba22325e5206 = $this->env->getExtension("native_profiler");
        $__internal_18b756cd17c55d56722cb53147f34eece820e948d4976a78b074ba22325e5206->enter($__internal_18b756cd17c55d56722cb53147f34eece820e948d4976a78b074ba22325e5206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18b756cd17c55d56722cb53147f34eece820e948d4976a78b074ba22325e5206->leave($__internal_18b756cd17c55d56722cb53147f34eece820e948d4976a78b074ba22325e5206_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_72f3af9a27c9e7faa4b688fe59e7aea4064da33f441e58e23d1d68e14b5198e2 = $this->env->getExtension("native_profiler");
        $__internal_72f3af9a27c9e7faa4b688fe59e7aea4064da33f441e58e23d1d68e14b5198e2->enter($__internal_72f3af9a27c9e7faa4b688fe59e7aea4064da33f441e58e23d1d68e14b5198e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72f3af9a27c9e7faa4b688fe59e7aea4064da33f441e58e23d1d68e14b5198e2->leave($__internal_72f3af9a27c9e7faa4b688fe59e7aea4064da33f441e58e23d1d68e14b5198e2_prof);

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
