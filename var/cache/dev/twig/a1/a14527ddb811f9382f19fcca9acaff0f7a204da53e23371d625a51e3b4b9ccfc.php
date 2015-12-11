<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c07907f6108f9ca62531af78933d9f12cd8082cc742c07059676f3662e1a9a7d extends Twig_Template
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
        $__internal_368f714ba0c524a1624ae4160009d59e7581461ecd2e7cfcb542ae15fb6ceafc = $this->env->getExtension("native_profiler");
        $__internal_368f714ba0c524a1624ae4160009d59e7581461ecd2e7cfcb542ae15fb6ceafc->enter($__internal_368f714ba0c524a1624ae4160009d59e7581461ecd2e7cfcb542ae15fb6ceafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_368f714ba0c524a1624ae4160009d59e7581461ecd2e7cfcb542ae15fb6ceafc->leave($__internal_368f714ba0c524a1624ae4160009d59e7581461ecd2e7cfcb542ae15fb6ceafc_prof);

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
