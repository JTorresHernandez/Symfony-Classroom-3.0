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
        $__internal_e0ccb5f686791cf397e8d769cde3099d159842a8a6e0242a087916bb92bd1f66 = $this->env->getExtension("native_profiler");
        $__internal_e0ccb5f686791cf397e8d769cde3099d159842a8a6e0242a087916bb92bd1f66->enter($__internal_e0ccb5f686791cf397e8d769cde3099d159842a8a6e0242a087916bb92bd1f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0ccb5f686791cf397e8d769cde3099d159842a8a6e0242a087916bb92bd1f66->leave($__internal_e0ccb5f686791cf397e8d769cde3099d159842a8a6e0242a087916bb92bd1f66_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_44a2d15431f611486e95ce0c6849f735b8a00982561685f42a10d84242c1be5a = $this->env->getExtension("native_profiler");
        $__internal_44a2d15431f611486e95ce0c6849f735b8a00982561685f42a10d84242c1be5a->enter($__internal_44a2d15431f611486e95ce0c6849f735b8a00982561685f42a10d84242c1be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_44a2d15431f611486e95ce0c6849f735b8a00982561685f42a10d84242c1be5a->leave($__internal_44a2d15431f611486e95ce0c6849f735b8a00982561685f42a10d84242c1be5a_prof);

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
