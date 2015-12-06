<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a979cec57eb30674477c09a54aac1e76c04cc7b4dfaa991a35da2acf78535d55 extends Twig_Template
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
        $__internal_f380eac378dc97a0974ef8c306bb5c37d3c43745d19922d1791d3609708deadd = $this->env->getExtension("native_profiler");
        $__internal_f380eac378dc97a0974ef8c306bb5c37d3c43745d19922d1791d3609708deadd->enter($__internal_f380eac378dc97a0974ef8c306bb5c37d3c43745d19922d1791d3609708deadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f380eac378dc97a0974ef8c306bb5c37d3c43745d19922d1791d3609708deadd->leave($__internal_f380eac378dc97a0974ef8c306bb5c37d3c43745d19922d1791d3609708deadd_prof);

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
