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
        $__internal_318ff3b267bebad468a6deb80c0f5d3969c886924e67bb9131143d9e8d425b68 = $this->env->getExtension("native_profiler");
        $__internal_318ff3b267bebad468a6deb80c0f5d3969c886924e67bb9131143d9e8d425b68->enter($__internal_318ff3b267bebad468a6deb80c0f5d3969c886924e67bb9131143d9e8d425b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_318ff3b267bebad468a6deb80c0f5d3969c886924e67bb9131143d9e8d425b68->leave($__internal_318ff3b267bebad468a6deb80c0f5d3969c886924e67bb9131143d9e8d425b68_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c872ae993dd8027925e29fab2495fc5033e81404b4296f5afee0b43cf6c31e35 = $this->env->getExtension("native_profiler");
        $__internal_c872ae993dd8027925e29fab2495fc5033e81404b4296f5afee0b43cf6c31e35->enter($__internal_c872ae993dd8027925e29fab2495fc5033e81404b4296f5afee0b43cf6c31e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c872ae993dd8027925e29fab2495fc5033e81404b4296f5afee0b43cf6c31e35->leave($__internal_c872ae993dd8027925e29fab2495fc5033e81404b4296f5afee0b43cf6c31e35_prof);

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
