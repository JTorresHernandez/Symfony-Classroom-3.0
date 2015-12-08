<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3f999591506d54487e898d6c22c80335fb3a77181e2e935e4780d5f5db85c37e extends Twig_Template
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
        $__internal_bb7eed407f89c1884e39d9e71c99d8596347365c4ff9c24aa724859ad0ac8125 = $this->env->getExtension("native_profiler");
        $__internal_bb7eed407f89c1884e39d9e71c99d8596347365c4ff9c24aa724859ad0ac8125->enter($__internal_bb7eed407f89c1884e39d9e71c99d8596347365c4ff9c24aa724859ad0ac8125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bb7eed407f89c1884e39d9e71c99d8596347365c4ff9c24aa724859ad0ac8125->leave($__internal_bb7eed407f89c1884e39d9e71c99d8596347365c4ff9c24aa724859ad0ac8125_prof);

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
