<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f88eecae1874647011c39209950567105c6bceb198ca25da717039ee1216b510 extends Twig_Template
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
        $__internal_bf649ff35e6b5f9f81f555f62d51ae3aa8d698f2ef658ce7c244d58fe0bbbaaf = $this->env->getExtension("native_profiler");
        $__internal_bf649ff35e6b5f9f81f555f62d51ae3aa8d698f2ef658ce7c244d58fe0bbbaaf->enter($__internal_bf649ff35e6b5f9f81f555f62d51ae3aa8d698f2ef658ce7c244d58fe0bbbaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf649ff35e6b5f9f81f555f62d51ae3aa8d698f2ef658ce7c244d58fe0bbbaaf->leave($__internal_bf649ff35e6b5f9f81f555f62d51ae3aa8d698f2ef658ce7c244d58fe0bbbaaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
