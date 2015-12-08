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
        $__internal_163ac84a76e3be0c2f88babe9d14935796c7f17bb45ff3448aed8ff2d857d003 = $this->env->getExtension("native_profiler");
        $__internal_163ac84a76e3be0c2f88babe9d14935796c7f17bb45ff3448aed8ff2d857d003->enter($__internal_163ac84a76e3be0c2f88babe9d14935796c7f17bb45ff3448aed8ff2d857d003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_163ac84a76e3be0c2f88babe9d14935796c7f17bb45ff3448aed8ff2d857d003->leave($__internal_163ac84a76e3be0c2f88babe9d14935796c7f17bb45ff3448aed8ff2d857d003_prof);

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
