<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bb104c8a563768e669d736c16ad18b103d856dc4adf7c901f7770ce629717e9c extends Twig_Template
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
        $__internal_b14cf1f45d64f8fc3be6f8afbd3dad305b0525080c456616be20ef6cec13c95b = $this->env->getExtension("native_profiler");
        $__internal_b14cf1f45d64f8fc3be6f8afbd3dad305b0525080c456616be20ef6cec13c95b->enter($__internal_b14cf1f45d64f8fc3be6f8afbd3dad305b0525080c456616be20ef6cec13c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b14cf1f45d64f8fc3be6f8afbd3dad305b0525080c456616be20ef6cec13c95b->leave($__internal_b14cf1f45d64f8fc3be6f8afbd3dad305b0525080c456616be20ef6cec13c95b_prof);

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
