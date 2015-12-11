<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c864a925542895e727dca17c16eda8c1dd4e366a3e65a02db811f5bb777d9a4b extends Twig_Template
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
        $__internal_d8d38f1ecb805493c08b931e39f06e9ce803a77c1027c33fcb759a06416de74c = $this->env->getExtension("native_profiler");
        $__internal_d8d38f1ecb805493c08b931e39f06e9ce803a77c1027c33fcb759a06416de74c->enter($__internal_d8d38f1ecb805493c08b931e39f06e9ce803a77c1027c33fcb759a06416de74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d8d38f1ecb805493c08b931e39f06e9ce803a77c1027c33fcb759a06416de74c->leave($__internal_d8d38f1ecb805493c08b931e39f06e9ce803a77c1027c33fcb759a06416de74c_prof);

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
