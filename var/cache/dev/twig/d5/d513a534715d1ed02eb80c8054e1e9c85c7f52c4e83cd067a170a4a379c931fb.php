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
        $__internal_8102def5c7fa728ab93452687b1d703613d2737c91508b3f63eefb3aa7e45d51 = $this->env->getExtension("native_profiler");
        $__internal_8102def5c7fa728ab93452687b1d703613d2737c91508b3f63eefb3aa7e45d51->enter($__internal_8102def5c7fa728ab93452687b1d703613d2737c91508b3f63eefb3aa7e45d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8102def5c7fa728ab93452687b1d703613d2737c91508b3f63eefb3aa7e45d51->leave($__internal_8102def5c7fa728ab93452687b1d703613d2737c91508b3f63eefb3aa7e45d51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc9c7c7a5a602d0af1f425afb5cb42de12bf8a70b6b023753533a0aa2cc31eab = $this->env->getExtension("native_profiler");
        $__internal_dc9c7c7a5a602d0af1f425afb5cb42de12bf8a70b6b023753533a0aa2cc31eab->enter($__internal_dc9c7c7a5a602d0af1f425afb5cb42de12bf8a70b6b023753533a0aa2cc31eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc9c7c7a5a602d0af1f425afb5cb42de12bf8a70b6b023753533a0aa2cc31eab->leave($__internal_dc9c7c7a5a602d0af1f425afb5cb42de12bf8a70b6b023753533a0aa2cc31eab_prof);

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
