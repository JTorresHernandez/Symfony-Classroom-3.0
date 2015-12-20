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
        $__internal_a9df75aaeb8c4fde7e7e30a185a89bda6f8b458f7799de5dc32160bcffe43cbc = $this->env->getExtension("native_profiler");
        $__internal_a9df75aaeb8c4fde7e7e30a185a89bda6f8b458f7799de5dc32160bcffe43cbc->enter($__internal_a9df75aaeb8c4fde7e7e30a185a89bda6f8b458f7799de5dc32160bcffe43cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a9df75aaeb8c4fde7e7e30a185a89bda6f8b458f7799de5dc32160bcffe43cbc->leave($__internal_a9df75aaeb8c4fde7e7e30a185a89bda6f8b458f7799de5dc32160bcffe43cbc_prof);

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
