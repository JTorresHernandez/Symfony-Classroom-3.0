<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b69e3bcd0343586664e347b75d3aa92844b813e2707eeccbb87aeee03eceb336 extends Twig_Template
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
        $__internal_67977c0b74526dd363334a236e22534f3a24b2ebb94c2d6a168bf5cd86871cb3 = $this->env->getExtension("native_profiler");
        $__internal_67977c0b74526dd363334a236e22534f3a24b2ebb94c2d6a168bf5cd86871cb3->enter($__internal_67977c0b74526dd363334a236e22534f3a24b2ebb94c2d6a168bf5cd86871cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_67977c0b74526dd363334a236e22534f3a24b2ebb94c2d6a168bf5cd86871cb3->leave($__internal_67977c0b74526dd363334a236e22534f3a24b2ebb94c2d6a168bf5cd86871cb3_prof);

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
