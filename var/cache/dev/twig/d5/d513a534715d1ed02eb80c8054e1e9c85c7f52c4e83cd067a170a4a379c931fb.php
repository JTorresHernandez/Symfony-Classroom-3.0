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
        $__internal_7a4ee327875ff16d6f4d501528d2ddf5804bbb54ea11ef04365a1c466d6072aa = $this->env->getExtension("native_profiler");
        $__internal_7a4ee327875ff16d6f4d501528d2ddf5804bbb54ea11ef04365a1c466d6072aa->enter($__internal_7a4ee327875ff16d6f4d501528d2ddf5804bbb54ea11ef04365a1c466d6072aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a4ee327875ff16d6f4d501528d2ddf5804bbb54ea11ef04365a1c466d6072aa->leave($__internal_7a4ee327875ff16d6f4d501528d2ddf5804bbb54ea11ef04365a1c466d6072aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ee42688bbb48381ae0af998621e485277ad4bc05b45c70b85c9eacc7e28a002 = $this->env->getExtension("native_profiler");
        $__internal_3ee42688bbb48381ae0af998621e485277ad4bc05b45c70b85c9eacc7e28a002->enter($__internal_3ee42688bbb48381ae0af998621e485277ad4bc05b45c70b85c9eacc7e28a002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3ee42688bbb48381ae0af998621e485277ad4bc05b45c70b85c9eacc7e28a002->leave($__internal_3ee42688bbb48381ae0af998621e485277ad4bc05b45c70b85c9eacc7e28a002_prof);

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
