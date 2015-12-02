<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c265e3d3bffc62ec87aa7a6fb66d5fec7773537a23d98706f842aeb6b388c793 extends Twig_Template
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
        $__internal_ca7acc9f9d164b293b5e91901af2ad225d848c3de36073f6d81f1c7a5fc49c09 = $this->env->getExtension("native_profiler");
        $__internal_ca7acc9f9d164b293b5e91901af2ad225d848c3de36073f6d81f1c7a5fc49c09->enter($__internal_ca7acc9f9d164b293b5e91901af2ad225d848c3de36073f6d81f1c7a5fc49c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca7acc9f9d164b293b5e91901af2ad225d848c3de36073f6d81f1c7a5fc49c09->leave($__internal_ca7acc9f9d164b293b5e91901af2ad225d848c3de36073f6d81f1c7a5fc49c09_prof);

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
