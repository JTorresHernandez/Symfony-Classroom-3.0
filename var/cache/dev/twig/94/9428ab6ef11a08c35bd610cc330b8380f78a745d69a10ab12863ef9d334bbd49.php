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
        $__internal_0476dfd259b212d203818e8f296c40bf7b103182afe3d6af0b8421fc37137c95 = $this->env->getExtension("native_profiler");
        $__internal_0476dfd259b212d203818e8f296c40bf7b103182afe3d6af0b8421fc37137c95->enter($__internal_0476dfd259b212d203818e8f296c40bf7b103182afe3d6af0b8421fc37137c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0476dfd259b212d203818e8f296c40bf7b103182afe3d6af0b8421fc37137c95->leave($__internal_0476dfd259b212d203818e8f296c40bf7b103182afe3d6af0b8421fc37137c95_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0947bb6de3b60895b4264dab5fa53c0171577c2391f7f88206e09b24fafdb148 = $this->env->getExtension("native_profiler");
        $__internal_0947bb6de3b60895b4264dab5fa53c0171577c2391f7f88206e09b24fafdb148->enter($__internal_0947bb6de3b60895b4264dab5fa53c0171577c2391f7f88206e09b24fafdb148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0947bb6de3b60895b4264dab5fa53c0171577c2391f7f88206e09b24fafdb148->leave($__internal_0947bb6de3b60895b4264dab5fa53c0171577c2391f7f88206e09b24fafdb148_prof);

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
