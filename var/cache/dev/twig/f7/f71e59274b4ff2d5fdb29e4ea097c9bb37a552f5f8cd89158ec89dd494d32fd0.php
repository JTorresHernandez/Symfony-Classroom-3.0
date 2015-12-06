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
        $__internal_f37a9cf3dfc5fb0fc0cf64efd65d71179a0e7d4725854edc957a02665e9788da = $this->env->getExtension("native_profiler");
        $__internal_f37a9cf3dfc5fb0fc0cf64efd65d71179a0e7d4725854edc957a02665e9788da->enter($__internal_f37a9cf3dfc5fb0fc0cf64efd65d71179a0e7d4725854edc957a02665e9788da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f37a9cf3dfc5fb0fc0cf64efd65d71179a0e7d4725854edc957a02665e9788da->leave($__internal_f37a9cf3dfc5fb0fc0cf64efd65d71179a0e7d4725854edc957a02665e9788da_prof);

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
