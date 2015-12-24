<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d19ac437ce62c2e91983ce22954e1bf6364702d763196589427dc3a8225ae2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b609d3d6c60fb48d3966441cfd783ef78bbf24fadaef234474bbe9ed40e2adf7 = $this->env->getExtension("native_profiler");
        $__internal_b609d3d6c60fb48d3966441cfd783ef78bbf24fadaef234474bbe9ed40e2adf7->enter($__internal_b609d3d6c60fb48d3966441cfd783ef78bbf24fadaef234474bbe9ed40e2adf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b609d3d6c60fb48d3966441cfd783ef78bbf24fadaef234474bbe9ed40e2adf7->leave($__internal_b609d3d6c60fb48d3966441cfd783ef78bbf24fadaef234474bbe9ed40e2adf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
