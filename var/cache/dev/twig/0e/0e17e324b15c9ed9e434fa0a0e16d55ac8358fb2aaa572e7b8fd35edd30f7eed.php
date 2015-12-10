<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c3862a6fe84907131d2bf4493c49b51902f294ff688e016f5d5719dd5e8ca963 extends Twig_Template
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
        $__internal_9ef1350b4c1115ae67001e4bc885290e495a2e8d8f6821a28b7048d6d5680853 = $this->env->getExtension("native_profiler");
        $__internal_9ef1350b4c1115ae67001e4bc885290e495a2e8d8f6821a28b7048d6d5680853->enter($__internal_9ef1350b4c1115ae67001e4bc885290e495a2e8d8f6821a28b7048d6d5680853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9ef1350b4c1115ae67001e4bc885290e495a2e8d8f6821a28b7048d6d5680853->leave($__internal_9ef1350b4c1115ae67001e4bc885290e495a2e8d8f6821a28b7048d6d5680853_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
