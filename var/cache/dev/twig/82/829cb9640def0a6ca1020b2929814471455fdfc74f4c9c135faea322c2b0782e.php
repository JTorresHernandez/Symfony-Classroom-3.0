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
        $__internal_ba1e155563facb16ebd01a67c083ed899e6bcee4f36f21bf9522b58c15761aa9 = $this->env->getExtension("native_profiler");
        $__internal_ba1e155563facb16ebd01a67c083ed899e6bcee4f36f21bf9522b58c15761aa9->enter($__internal_ba1e155563facb16ebd01a67c083ed899e6bcee4f36f21bf9522b58c15761aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ba1e155563facb16ebd01a67c083ed899e6bcee4f36f21bf9522b58c15761aa9->leave($__internal_ba1e155563facb16ebd01a67c083ed899e6bcee4f36f21bf9522b58c15761aa9_prof);

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
