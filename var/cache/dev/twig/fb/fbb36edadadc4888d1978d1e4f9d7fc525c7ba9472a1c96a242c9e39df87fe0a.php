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
        $__internal_0b0a100d176ce3e68ebcb46a7b061d030b5b2d5c8ee5829899e6c8ec977d876b = $this->env->getExtension("native_profiler");
        $__internal_0b0a100d176ce3e68ebcb46a7b061d030b5b2d5c8ee5829899e6c8ec977d876b->enter($__internal_0b0a100d176ce3e68ebcb46a7b061d030b5b2d5c8ee5829899e6c8ec977d876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0b0a100d176ce3e68ebcb46a7b061d030b5b2d5c8ee5829899e6c8ec977d876b->leave($__internal_0b0a100d176ce3e68ebcb46a7b061d030b5b2d5c8ee5829899e6c8ec977d876b_prof);

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
