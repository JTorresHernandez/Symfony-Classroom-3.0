<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cd8c6c8e8245fb868aa75c95e8e677398f50d092d51b642e14aa9230eeed489f extends Twig_Template
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
        $__internal_aeebddbc270675d465a9e49c3c11bc5552dd580a0fb28225abd690bb155ea334 = $this->env->getExtension("native_profiler");
        $__internal_aeebddbc270675d465a9e49c3c11bc5552dd580a0fb28225abd690bb155ea334->enter($__internal_aeebddbc270675d465a9e49c3c11bc5552dd580a0fb28225abd690bb155ea334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aeebddbc270675d465a9e49c3c11bc5552dd580a0fb28225abd690bb155ea334->leave($__internal_aeebddbc270675d465a9e49c3c11bc5552dd580a0fb28225abd690bb155ea334_prof);

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
