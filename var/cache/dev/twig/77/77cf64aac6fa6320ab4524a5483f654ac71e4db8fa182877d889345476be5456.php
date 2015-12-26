<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_74565ccb9ca1c2721181f6468ddedd764285f3a829c6a89fa71cbdc1eedec886 extends Twig_Template
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
        $__internal_aa45d0b3dbfacc1d8b58efdbfef8f539210946a122bb9dd82ee79f70ed4e7479 = $this->env->getExtension("native_profiler");
        $__internal_aa45d0b3dbfacc1d8b58efdbfef8f539210946a122bb9dd82ee79f70ed4e7479->enter($__internal_aa45d0b3dbfacc1d8b58efdbfef8f539210946a122bb9dd82ee79f70ed4e7479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_aa45d0b3dbfacc1d8b58efdbfef8f539210946a122bb9dd82ee79f70ed4e7479->leave($__internal_aa45d0b3dbfacc1d8b58efdbfef8f539210946a122bb9dd82ee79f70ed4e7479_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
