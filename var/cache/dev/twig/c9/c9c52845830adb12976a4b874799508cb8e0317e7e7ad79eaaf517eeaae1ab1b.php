<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_120b568faa1c0a220aaf92790edd788a739980ff2ccd861616ac06bb6e9fe397 extends Twig_Template
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
        $__internal_ed678047110ec53b98565f0dac8985d6f4c421996446abf3a6e7d53e720e4cba = $this->env->getExtension("native_profiler");
        $__internal_ed678047110ec53b98565f0dac8985d6f4c421996446abf3a6e7d53e720e4cba->enter($__internal_ed678047110ec53b98565f0dac8985d6f4c421996446abf3a6e7d53e720e4cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ed678047110ec53b98565f0dac8985d6f4c421996446abf3a6e7d53e720e4cba->leave($__internal_ed678047110ec53b98565f0dac8985d6f4c421996446abf3a6e7d53e720e4cba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
