<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_230b1c9defd8d2c325561901c8e306099de9abac9af0f08fca7637b412c3ac03 extends Twig_Template
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
        $__internal_702591be94a58dabb4b07f1d626331692259eb1419c0b6c9b8cc5b1e9d1aa154 = $this->env->getExtension("native_profiler");
        $__internal_702591be94a58dabb4b07f1d626331692259eb1419c0b6c9b8cc5b1e9d1aa154->enter($__internal_702591be94a58dabb4b07f1d626331692259eb1419c0b6c9b8cc5b1e9d1aa154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_702591be94a58dabb4b07f1d626331692259eb1419c0b6c9b8cc5b1e9d1aa154->leave($__internal_702591be94a58dabb4b07f1d626331692259eb1419c0b6c9b8cc5b1e9d1aa154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
