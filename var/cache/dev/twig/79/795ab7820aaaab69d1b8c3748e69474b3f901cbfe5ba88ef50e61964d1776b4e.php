<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_214ce4894e5a4e0e961cadcdc1cb2ce85a39127f7fa09c0d803e63a392332c38 extends Twig_Template
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
        $__internal_7b2857c6b629d0d6d220c1fc68952b73af7f353ade4469b7a7aafa2071b7ee06 = $this->env->getExtension("native_profiler");
        $__internal_7b2857c6b629d0d6d220c1fc68952b73af7f353ade4469b7a7aafa2071b7ee06->enter($__internal_7b2857c6b629d0d6d220c1fc68952b73af7f353ade4469b7a7aafa2071b7ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7b2857c6b629d0d6d220c1fc68952b73af7f353ade4469b7a7aafa2071b7ee06->leave($__internal_7b2857c6b629d0d6d220c1fc68952b73af7f353ade4469b7a7aafa2071b7ee06_prof);

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
