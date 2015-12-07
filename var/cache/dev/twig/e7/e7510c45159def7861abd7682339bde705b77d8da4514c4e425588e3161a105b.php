<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6c237552a17263f5f145afdfb79e09a2cf304485a64d425c1e6a4fd272bdfc3c extends Twig_Template
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
        $__internal_94a62c91a6fe12ac9ab048fe3fa989d3b543a708d78e7ff86460c32afa3d2858 = $this->env->getExtension("native_profiler");
        $__internal_94a62c91a6fe12ac9ab048fe3fa989d3b543a708d78e7ff86460c32afa3d2858->enter($__internal_94a62c91a6fe12ac9ab048fe3fa989d3b543a708d78e7ff86460c32afa3d2858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_94a62c91a6fe12ac9ab048fe3fa989d3b543a708d78e7ff86460c32afa3d2858->leave($__internal_94a62c91a6fe12ac9ab048fe3fa989d3b543a708d78e7ff86460c32afa3d2858_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
