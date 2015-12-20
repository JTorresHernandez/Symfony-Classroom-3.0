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
        $__internal_0a3fd594b37b242a43bc13a1fb6da83596eaf4d37fe4035b50977fb12303c5df = $this->env->getExtension("native_profiler");
        $__internal_0a3fd594b37b242a43bc13a1fb6da83596eaf4d37fe4035b50977fb12303c5df->enter($__internal_0a3fd594b37b242a43bc13a1fb6da83596eaf4d37fe4035b50977fb12303c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0a3fd594b37b242a43bc13a1fb6da83596eaf4d37fe4035b50977fb12303c5df->leave($__internal_0a3fd594b37b242a43bc13a1fb6da83596eaf4d37fe4035b50977fb12303c5df_prof);

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
