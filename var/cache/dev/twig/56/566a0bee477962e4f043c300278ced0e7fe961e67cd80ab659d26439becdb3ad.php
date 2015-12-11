<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f433aa22f9e772bf914e8141e16f36272c3d8574c931aaea561d01050df943d9 extends Twig_Template
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
        $__internal_4bcf522be089708fe7261e523ed226c3b95f293ebbf70e614e3015db38c12a85 = $this->env->getExtension("native_profiler");
        $__internal_4bcf522be089708fe7261e523ed226c3b95f293ebbf70e614e3015db38c12a85->enter($__internal_4bcf522be089708fe7261e523ed226c3b95f293ebbf70e614e3015db38c12a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4bcf522be089708fe7261e523ed226c3b95f293ebbf70e614e3015db38c12a85->leave($__internal_4bcf522be089708fe7261e523ed226c3b95f293ebbf70e614e3015db38c12a85_prof);

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
