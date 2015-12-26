<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a9297738f943bb523f81359b4992b3f94d4ee7feba90bcb501847f8d73ff1021 extends Twig_Template
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
        $__internal_9fbb20c5a5b121aa6fffd6de113df768cdd87d4a9c5c4b3da22d5d7ad78358bd = $this->env->getExtension("native_profiler");
        $__internal_9fbb20c5a5b121aa6fffd6de113df768cdd87d4a9c5c4b3da22d5d7ad78358bd->enter($__internal_9fbb20c5a5b121aa6fffd6de113df768cdd87d4a9c5c4b3da22d5d7ad78358bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9fbb20c5a5b121aa6fffd6de113df768cdd87d4a9c5c4b3da22d5d7ad78358bd->leave($__internal_9fbb20c5a5b121aa6fffd6de113df768cdd87d4a9c5c4b3da22d5d7ad78358bd_prof);

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
