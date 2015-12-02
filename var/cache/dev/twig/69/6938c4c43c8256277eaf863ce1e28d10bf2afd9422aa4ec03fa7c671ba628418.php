<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_de885da1fe48fcedd1e9623b6f4350eb37baaf5b8a03fd8edb365108d0fc6947 extends Twig_Template
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
        $__internal_a37b9d8c957e408e04ae1008eee439667fd07d18de25aca6f46c3917cc633f3d = $this->env->getExtension("native_profiler");
        $__internal_a37b9d8c957e408e04ae1008eee439667fd07d18de25aca6f46c3917cc633f3d->enter($__internal_a37b9d8c957e408e04ae1008eee439667fd07d18de25aca6f46c3917cc633f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a37b9d8c957e408e04ae1008eee439667fd07d18de25aca6f46c3917cc633f3d->leave($__internal_a37b9d8c957e408e04ae1008eee439667fd07d18de25aca6f46c3917cc633f3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
