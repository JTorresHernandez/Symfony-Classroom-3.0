<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f139b87e921408fe782d94dbd5de90bef9d7047f2e51beaa69e6912d2ba852be extends Twig_Template
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
        $__internal_a99ab294ae1baf00af7319eea1926645bd9e29149282cce12ed8b9d80277985b = $this->env->getExtension("native_profiler");
        $__internal_a99ab294ae1baf00af7319eea1926645bd9e29149282cce12ed8b9d80277985b->enter($__internal_a99ab294ae1baf00af7319eea1926645bd9e29149282cce12ed8b9d80277985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a99ab294ae1baf00af7319eea1926645bd9e29149282cce12ed8b9d80277985b->leave($__internal_a99ab294ae1baf00af7319eea1926645bd9e29149282cce12ed8b9d80277985b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_597b21e720965b2fb1d63a89d8ed194686dd4333fa785e83e4d9cebdc722b4d8 = $this->env->getExtension("native_profiler");
        $__internal_597b21e720965b2fb1d63a89d8ed194686dd4333fa785e83e4d9cebdc722b4d8->enter($__internal_597b21e720965b2fb1d63a89d8ed194686dd4333fa785e83e4d9cebdc722b4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_597b21e720965b2fb1d63a89d8ed194686dd4333fa785e83e4d9cebdc722b4d8->leave($__internal_597b21e720965b2fb1d63a89d8ed194686dd4333fa785e83e4d9cebdc722b4d8_prof);

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
