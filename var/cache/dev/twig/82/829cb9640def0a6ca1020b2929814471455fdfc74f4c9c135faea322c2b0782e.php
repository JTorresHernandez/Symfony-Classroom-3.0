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
        $__internal_f8c7474534a601afdb0deb30293f8ae9c8facf8251737250f005ea87a9ec25e6 = $this->env->getExtension("native_profiler");
        $__internal_f8c7474534a601afdb0deb30293f8ae9c8facf8251737250f005ea87a9ec25e6->enter($__internal_f8c7474534a601afdb0deb30293f8ae9c8facf8251737250f005ea87a9ec25e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f8c7474534a601afdb0deb30293f8ae9c8facf8251737250f005ea87a9ec25e6->leave($__internal_f8c7474534a601afdb0deb30293f8ae9c8facf8251737250f005ea87a9ec25e6_prof);

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
