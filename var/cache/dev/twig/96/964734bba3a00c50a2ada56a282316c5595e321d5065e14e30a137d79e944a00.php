<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ec46bee5df7ea62ded0bb0058f9ed5c3645f47a1593e1cbe3bb2cb79af49eb08 extends Twig_Template
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
        $__internal_be220cf2c5aa4a9fb13b0ed1eb33bc03fcf100770bed39717089e5c96d33cc6e = $this->env->getExtension("native_profiler");
        $__internal_be220cf2c5aa4a9fb13b0ed1eb33bc03fcf100770bed39717089e5c96d33cc6e->enter($__internal_be220cf2c5aa4a9fb13b0ed1eb33bc03fcf100770bed39717089e5c96d33cc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_be220cf2c5aa4a9fb13b0ed1eb33bc03fcf100770bed39717089e5c96d33cc6e->leave($__internal_be220cf2c5aa4a9fb13b0ed1eb33bc03fcf100770bed39717089e5c96d33cc6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
