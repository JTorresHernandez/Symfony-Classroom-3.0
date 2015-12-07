<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e12b5e126e5277a84886f3215aff79c92219226342ca6601fe521d9474471a0d extends Twig_Template
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
        $__internal_1070fd18960a8a04b39a79a6af3496850268ce2c998db00b584aabbc379b2f88 = $this->env->getExtension("native_profiler");
        $__internal_1070fd18960a8a04b39a79a6af3496850268ce2c998db00b584aabbc379b2f88->enter($__internal_1070fd18960a8a04b39a79a6af3496850268ce2c998db00b584aabbc379b2f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1070fd18960a8a04b39a79a6af3496850268ce2c998db00b584aabbc379b2f88->leave($__internal_1070fd18960a8a04b39a79a6af3496850268ce2c998db00b584aabbc379b2f88_prof);

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
