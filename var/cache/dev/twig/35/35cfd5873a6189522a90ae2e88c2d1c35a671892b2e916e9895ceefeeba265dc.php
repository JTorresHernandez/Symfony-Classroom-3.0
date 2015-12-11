<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_debbbeac76da295f12ae6ec4f695e4151d68f33653084ea2ca90ac9138bf3183 extends Twig_Template
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
        $__internal_9f4dcd0e374e4de1dc41583613612231319adb7886f6d85283eb8a31e90f01ee = $this->env->getExtension("native_profiler");
        $__internal_9f4dcd0e374e4de1dc41583613612231319adb7886f6d85283eb8a31e90f01ee->enter($__internal_9f4dcd0e374e4de1dc41583613612231319adb7886f6d85283eb8a31e90f01ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9f4dcd0e374e4de1dc41583613612231319adb7886f6d85283eb8a31e90f01ee->leave($__internal_9f4dcd0e374e4de1dc41583613612231319adb7886f6d85283eb8a31e90f01ee_prof);

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
