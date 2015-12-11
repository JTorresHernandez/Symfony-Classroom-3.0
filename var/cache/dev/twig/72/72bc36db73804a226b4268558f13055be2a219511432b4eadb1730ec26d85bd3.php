<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9bd4a5cdda4ec9eb0f3f33cfe18590891de0c8a306f37a8b710c4f91b460c347 extends Twig_Template
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
        $__internal_9ff3bf644c23ec7c43d61312e7fa357e585a5954e20c0b1aa91533e350fe019b = $this->env->getExtension("native_profiler");
        $__internal_9ff3bf644c23ec7c43d61312e7fa357e585a5954e20c0b1aa91533e350fe019b->enter($__internal_9ff3bf644c23ec7c43d61312e7fa357e585a5954e20c0b1aa91533e350fe019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9ff3bf644c23ec7c43d61312e7fa357e585a5954e20c0b1aa91533e350fe019b->leave($__internal_9ff3bf644c23ec7c43d61312e7fa357e585a5954e20c0b1aa91533e350fe019b_prof);

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
