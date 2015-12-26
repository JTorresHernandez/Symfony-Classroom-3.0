<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9132623b47a916d953d00de1b8c0726833009a4e2585de393a3bb60b80d55fde extends Twig_Template
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
        $__internal_6935aa65a318694873646a7b4e6a1f58a54e297fcbc049aca046366addfe8676 = $this->env->getExtension("native_profiler");
        $__internal_6935aa65a318694873646a7b4e6a1f58a54e297fcbc049aca046366addfe8676->enter($__internal_6935aa65a318694873646a7b4e6a1f58a54e297fcbc049aca046366addfe8676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6935aa65a318694873646a7b4e6a1f58a54e297fcbc049aca046366addfe8676->leave($__internal_6935aa65a318694873646a7b4e6a1f58a54e297fcbc049aca046366addfe8676_prof);

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
