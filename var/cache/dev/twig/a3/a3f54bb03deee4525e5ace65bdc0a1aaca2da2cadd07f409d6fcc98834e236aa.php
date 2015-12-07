<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e0938ad366002dc40c0def70d028a80cd1b46046c1733640b74876fc90a6a924 extends Twig_Template
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
        $__internal_5d4688f2052e0ebedf424ff76c1faeb1177de36e1aa2d986d05761c96f456698 = $this->env->getExtension("native_profiler");
        $__internal_5d4688f2052e0ebedf424ff76c1faeb1177de36e1aa2d986d05761c96f456698->enter($__internal_5d4688f2052e0ebedf424ff76c1faeb1177de36e1aa2d986d05761c96f456698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5d4688f2052e0ebedf424ff76c1faeb1177de36e1aa2d986d05761c96f456698->leave($__internal_5d4688f2052e0ebedf424ff76c1faeb1177de36e1aa2d986d05761c96f456698_prof);

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
