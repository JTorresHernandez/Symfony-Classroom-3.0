<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7e81ef28f28a3dc71ab9d5e5601566e6a161a540c71c7a202e7bdaadae22103 extends Twig_Template
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
        $__internal_d26c348e76e9ed1ab737a083df04093cbb3005207e53b2caafb2fed78201db0b = $this->env->getExtension("native_profiler");
        $__internal_d26c348e76e9ed1ab737a083df04093cbb3005207e53b2caafb2fed78201db0b->enter($__internal_d26c348e76e9ed1ab737a083df04093cbb3005207e53b2caafb2fed78201db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d26c348e76e9ed1ab737a083df04093cbb3005207e53b2caafb2fed78201db0b->leave($__internal_d26c348e76e9ed1ab737a083df04093cbb3005207e53b2caafb2fed78201db0b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ef914a07c477db14c565dee07deec670c11bfd81946d90a1f06815c09a9c1a9 = $this->env->getExtension("native_profiler");
        $__internal_0ef914a07c477db14c565dee07deec670c11bfd81946d90a1f06815c09a9c1a9->enter($__internal_0ef914a07c477db14c565dee07deec670c11bfd81946d90a1f06815c09a9c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ef914a07c477db14c565dee07deec670c11bfd81946d90a1f06815c09a9c1a9->leave($__internal_0ef914a07c477db14c565dee07deec670c11bfd81946d90a1f06815c09a9c1a9_prof);

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
