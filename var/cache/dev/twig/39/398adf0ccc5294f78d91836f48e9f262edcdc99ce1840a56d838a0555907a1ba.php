<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_515c4fdc900313e7f587c6c4025a87c56786b769768168e32cdc41b9d0108865 extends Twig_Template
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
        $__internal_f797cfc8666912170685e412e0f2044c2095ea6447b1129eea17175520451f5c = $this->env->getExtension("native_profiler");
        $__internal_f797cfc8666912170685e412e0f2044c2095ea6447b1129eea17175520451f5c->enter($__internal_f797cfc8666912170685e412e0f2044c2095ea6447b1129eea17175520451f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f797cfc8666912170685e412e0f2044c2095ea6447b1129eea17175520451f5c->leave($__internal_f797cfc8666912170685e412e0f2044c2095ea6447b1129eea17175520451f5c_prof);

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
