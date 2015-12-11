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
        $__internal_4b2f3f8b1c131e71b8fcd65a53ef60e0b982cfc58c4142b4992dcd04972d0cf8 = $this->env->getExtension("native_profiler");
        $__internal_4b2f3f8b1c131e71b8fcd65a53ef60e0b982cfc58c4142b4992dcd04972d0cf8->enter($__internal_4b2f3f8b1c131e71b8fcd65a53ef60e0b982cfc58c4142b4992dcd04972d0cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4b2f3f8b1c131e71b8fcd65a53ef60e0b982cfc58c4142b4992dcd04972d0cf8->leave($__internal_4b2f3f8b1c131e71b8fcd65a53ef60e0b982cfc58c4142b4992dcd04972d0cf8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_99f1644ca247b2103fa2ff01cce911306d9dfb025ab1372747b49783091d9b3c = $this->env->getExtension("native_profiler");
        $__internal_99f1644ca247b2103fa2ff01cce911306d9dfb025ab1372747b49783091d9b3c->enter($__internal_99f1644ca247b2103fa2ff01cce911306d9dfb025ab1372747b49783091d9b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_99f1644ca247b2103fa2ff01cce911306d9dfb025ab1372747b49783091d9b3c->leave($__internal_99f1644ca247b2103fa2ff01cce911306d9dfb025ab1372747b49783091d9b3c_prof);

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
