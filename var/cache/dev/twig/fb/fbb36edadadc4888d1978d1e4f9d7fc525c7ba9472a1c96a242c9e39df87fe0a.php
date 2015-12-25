<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9d1914caa06759ebbf1aa769016d87328ee5c1e8de93d3eb3acdf20da273e476 extends Twig_Template
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
        $__internal_15672bf62db83e3b84b21f11ff6ed46be124f048b4252ffb594f9e806189d5ce = $this->env->getExtension("native_profiler");
        $__internal_15672bf62db83e3b84b21f11ff6ed46be124f048b4252ffb594f9e806189d5ce->enter($__internal_15672bf62db83e3b84b21f11ff6ed46be124f048b4252ffb594f9e806189d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_15672bf62db83e3b84b21f11ff6ed46be124f048b4252ffb594f9e806189d5ce->leave($__internal_15672bf62db83e3b84b21f11ff6ed46be124f048b4252ffb594f9e806189d5ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
