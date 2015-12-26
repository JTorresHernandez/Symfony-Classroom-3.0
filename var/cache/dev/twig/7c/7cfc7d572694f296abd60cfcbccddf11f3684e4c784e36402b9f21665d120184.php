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
        $__internal_170c06d17c44225f63566b26eb4472c96d03161df668228c55bfd548ece0b2c4 = $this->env->getExtension("native_profiler");
        $__internal_170c06d17c44225f63566b26eb4472c96d03161df668228c55bfd548ece0b2c4->enter($__internal_170c06d17c44225f63566b26eb4472c96d03161df668228c55bfd548ece0b2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_170c06d17c44225f63566b26eb4472c96d03161df668228c55bfd548ece0b2c4->leave($__internal_170c06d17c44225f63566b26eb4472c96d03161df668228c55bfd548ece0b2c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0cfacdfbc532bf03ce56b52b7cc11b1014f6b804e3fdf274fef08c441eb08e4 = $this->env->getExtension("native_profiler");
        $__internal_d0cfacdfbc532bf03ce56b52b7cc11b1014f6b804e3fdf274fef08c441eb08e4->enter($__internal_d0cfacdfbc532bf03ce56b52b7cc11b1014f6b804e3fdf274fef08c441eb08e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d0cfacdfbc532bf03ce56b52b7cc11b1014f6b804e3fdf274fef08c441eb08e4->leave($__internal_d0cfacdfbc532bf03ce56b52b7cc11b1014f6b804e3fdf274fef08c441eb08e4_prof);

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
