<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b3b058e568c61a91b6e57afacee27af1deff5332bc437ba119d1ad639c667dda extends Twig_Template
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
        $__internal_42b047157d78c87570ada8b15f1114b39c3e90695cd522a66f0662b438fc3a6c = $this->env->getExtension("native_profiler");
        $__internal_42b047157d78c87570ada8b15f1114b39c3e90695cd522a66f0662b438fc3a6c->enter($__internal_42b047157d78c87570ada8b15f1114b39c3e90695cd522a66f0662b438fc3a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_42b047157d78c87570ada8b15f1114b39c3e90695cd522a66f0662b438fc3a6c->leave($__internal_42b047157d78c87570ada8b15f1114b39c3e90695cd522a66f0662b438fc3a6c_prof);

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
