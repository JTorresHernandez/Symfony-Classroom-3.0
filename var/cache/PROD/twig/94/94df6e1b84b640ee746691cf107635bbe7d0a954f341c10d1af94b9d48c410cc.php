<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_043ef48a3e9ac0bd2d89688159cb102c115b83200a0f9820b4ec9eba38e3cfda extends Twig_Template
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
        $__internal_6e1c4530c8d8a75d6d0030be861b97fa36f559aa1ceabd5293c36cf83769903b = $this->env->getExtension("native_profiler");
        $__internal_6e1c4530c8d8a75d6d0030be861b97fa36f559aa1ceabd5293c36cf83769903b->enter($__internal_6e1c4530c8d8a75d6d0030be861b97fa36f559aa1ceabd5293c36cf83769903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6e1c4530c8d8a75d6d0030be861b97fa36f559aa1ceabd5293c36cf83769903b->leave($__internal_6e1c4530c8d8a75d6d0030be861b97fa36f559aa1ceabd5293c36cf83769903b_prof);

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
