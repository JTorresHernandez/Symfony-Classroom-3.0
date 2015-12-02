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
        $__internal_fadf2dfd4de1d059ae416434909c634b0b48aaeb3106997315afd537b48798f6 = $this->env->getExtension("native_profiler");
        $__internal_fadf2dfd4de1d059ae416434909c634b0b48aaeb3106997315afd537b48798f6->enter($__internal_fadf2dfd4de1d059ae416434909c634b0b48aaeb3106997315afd537b48798f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fadf2dfd4de1d059ae416434909c634b0b48aaeb3106997315afd537b48798f6->leave($__internal_fadf2dfd4de1d059ae416434909c634b0b48aaeb3106997315afd537b48798f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d2e069baf5854d59a21c3ac25b067bbf3f76027d4f523fb0f65852557706744 = $this->env->getExtension("native_profiler");
        $__internal_4d2e069baf5854d59a21c3ac25b067bbf3f76027d4f523fb0f65852557706744->enter($__internal_4d2e069baf5854d59a21c3ac25b067bbf3f76027d4f523fb0f65852557706744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d2e069baf5854d59a21c3ac25b067bbf3f76027d4f523fb0f65852557706744->leave($__internal_4d2e069baf5854d59a21c3ac25b067bbf3f76027d4f523fb0f65852557706744_prof);

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
