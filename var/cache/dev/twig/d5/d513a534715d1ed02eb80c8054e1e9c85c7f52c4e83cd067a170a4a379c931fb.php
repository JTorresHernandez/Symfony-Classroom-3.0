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
        $__internal_2e068cb1a17538210401f94e6c8d5c99d4f71409cbf6108b071930c2d6d71234 = $this->env->getExtension("native_profiler");
        $__internal_2e068cb1a17538210401f94e6c8d5c99d4f71409cbf6108b071930c2d6d71234->enter($__internal_2e068cb1a17538210401f94e6c8d5c99d4f71409cbf6108b071930c2d6d71234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2e068cb1a17538210401f94e6c8d5c99d4f71409cbf6108b071930c2d6d71234->leave($__internal_2e068cb1a17538210401f94e6c8d5c99d4f71409cbf6108b071930c2d6d71234_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1405e1362e2277c8ed015f823c6f10c239e0b22e2b388778a32fb3e3ff6ab462 = $this->env->getExtension("native_profiler");
        $__internal_1405e1362e2277c8ed015f823c6f10c239e0b22e2b388778a32fb3e3ff6ab462->enter($__internal_1405e1362e2277c8ed015f823c6f10c239e0b22e2b388778a32fb3e3ff6ab462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1405e1362e2277c8ed015f823c6f10c239e0b22e2b388778a32fb3e3ff6ab462->leave($__internal_1405e1362e2277c8ed015f823c6f10c239e0b22e2b388778a32fb3e3ff6ab462_prof);

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
