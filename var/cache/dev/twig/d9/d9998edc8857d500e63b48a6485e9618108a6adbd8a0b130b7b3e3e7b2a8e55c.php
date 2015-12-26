<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f72a1db97b30483a721d393a0198761a2c59d3ef25693b765956823c8e5eeed extends Twig_Template
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
        $__internal_e7e178f0dd592ea64db770374cf6a202beb6dec9f289cefebf21f8152c276961 = $this->env->getExtension("native_profiler");
        $__internal_e7e178f0dd592ea64db770374cf6a202beb6dec9f289cefebf21f8152c276961->enter($__internal_e7e178f0dd592ea64db770374cf6a202beb6dec9f289cefebf21f8152c276961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e7e178f0dd592ea64db770374cf6a202beb6dec9f289cefebf21f8152c276961->leave($__internal_e7e178f0dd592ea64db770374cf6a202beb6dec9f289cefebf21f8152c276961_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
