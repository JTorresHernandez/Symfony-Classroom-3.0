<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d4a6d0e99b99efe95427888711452a0a1f2e36fd56de14d2c4f88e8464cc5222 extends Twig_Template
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
        $__internal_c8cc358af66547ae512135172d2ce6fd019368c8c66447b0ca0a74bcad86851d = $this->env->getExtension("native_profiler");
        $__internal_c8cc358af66547ae512135172d2ce6fd019368c8c66447b0ca0a74bcad86851d->enter($__internal_c8cc358af66547ae512135172d2ce6fd019368c8c66447b0ca0a74bcad86851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c8cc358af66547ae512135172d2ce6fd019368c8c66447b0ca0a74bcad86851d->leave($__internal_c8cc358af66547ae512135172d2ce6fd019368c8c66447b0ca0a74bcad86851d_prof);

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
