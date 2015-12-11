<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f2a3e0d2d5953ac7d0b02258e14a6200ff58192be00e9e08d16fd40939ab2a2d extends Twig_Template
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
        $__internal_3c53f1960ecd055f51a42c83896b9d729715abff34c3066433525ca0cad6f4ee = $this->env->getExtension("native_profiler");
        $__internal_3c53f1960ecd055f51a42c83896b9d729715abff34c3066433525ca0cad6f4ee->enter($__internal_3c53f1960ecd055f51a42c83896b9d729715abff34c3066433525ca0cad6f4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3c53f1960ecd055f51a42c83896b9d729715abff34c3066433525ca0cad6f4ee->leave($__internal_3c53f1960ecd055f51a42c83896b9d729715abff34c3066433525ca0cad6f4ee_prof);

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
