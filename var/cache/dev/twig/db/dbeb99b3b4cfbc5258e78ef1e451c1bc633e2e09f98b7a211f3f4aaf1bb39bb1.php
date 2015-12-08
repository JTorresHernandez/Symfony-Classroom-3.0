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
        $__internal_19fcc59a991ce6f6ac47ecf9ea1b2a68289a1c2b3eaeaac574009f23d213067f = $this->env->getExtension("native_profiler");
        $__internal_19fcc59a991ce6f6ac47ecf9ea1b2a68289a1c2b3eaeaac574009f23d213067f->enter($__internal_19fcc59a991ce6f6ac47ecf9ea1b2a68289a1c2b3eaeaac574009f23d213067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19fcc59a991ce6f6ac47ecf9ea1b2a68289a1c2b3eaeaac574009f23d213067f->leave($__internal_19fcc59a991ce6f6ac47ecf9ea1b2a68289a1c2b3eaeaac574009f23d213067f_prof);

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
