<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ea4818c72e8242c3520a1ff220e78808d1a0ca2740194b7120eb358eef708fcc extends Twig_Template
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
        $__internal_bc655fea3ed288513914a060b8088c91d90daca691a2a8974e4c47c8e988e0c1 = $this->env->getExtension("native_profiler");
        $__internal_bc655fea3ed288513914a060b8088c91d90daca691a2a8974e4c47c8e988e0c1->enter($__internal_bc655fea3ed288513914a060b8088c91d90daca691a2a8974e4c47c8e988e0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bc655fea3ed288513914a060b8088c91d90daca691a2a8974e4c47c8e988e0c1->leave($__internal_bc655fea3ed288513914a060b8088c91d90daca691a2a8974e4c47c8e988e0c1_prof);

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
