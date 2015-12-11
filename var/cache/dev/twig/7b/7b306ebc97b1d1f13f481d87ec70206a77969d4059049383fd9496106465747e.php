<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9ad6b7ad57e7416ab1f0fe915d86b7a64975943cba9a3b69192c2ce4ee2f6545 extends Twig_Template
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
        $__internal_a0d5a02a7fe32f3fe0f6f87b774656f05007bcd448806b256ac74d621a862579 = $this->env->getExtension("native_profiler");
        $__internal_a0d5a02a7fe32f3fe0f6f87b774656f05007bcd448806b256ac74d621a862579->enter($__internal_a0d5a02a7fe32f3fe0f6f87b774656f05007bcd448806b256ac74d621a862579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a0d5a02a7fe32f3fe0f6f87b774656f05007bcd448806b256ac74d621a862579->leave($__internal_a0d5a02a7fe32f3fe0f6f87b774656f05007bcd448806b256ac74d621a862579_prof);

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
