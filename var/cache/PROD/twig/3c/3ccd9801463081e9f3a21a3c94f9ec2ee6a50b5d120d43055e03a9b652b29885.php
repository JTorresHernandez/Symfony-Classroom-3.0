<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1a78e8e03deaee1c23957a8396aab189cdfc8cf287958ddb9aae10bc7b4f3ed1 extends Twig_Template
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
        $__internal_e3748ca0a75b7aa8d9c7746235447442123c720fe2492033f2d21a3f2606b525 = $this->env->getExtension("native_profiler");
        $__internal_e3748ca0a75b7aa8d9c7746235447442123c720fe2492033f2d21a3f2606b525->enter($__internal_e3748ca0a75b7aa8d9c7746235447442123c720fe2492033f2d21a3f2606b525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e3748ca0a75b7aa8d9c7746235447442123c720fe2492033f2d21a3f2606b525->leave($__internal_e3748ca0a75b7aa8d9c7746235447442123c720fe2492033f2d21a3f2606b525_prof);

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
