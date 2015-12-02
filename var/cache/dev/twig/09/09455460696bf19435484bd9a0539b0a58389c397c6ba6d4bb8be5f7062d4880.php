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
        $__internal_465ea28a09eb0b90198bbfeda982b7c4dd04f0693c5eebf8bd7b03cd86a82aa3 = $this->env->getExtension("native_profiler");
        $__internal_465ea28a09eb0b90198bbfeda982b7c4dd04f0693c5eebf8bd7b03cd86a82aa3->enter($__internal_465ea28a09eb0b90198bbfeda982b7c4dd04f0693c5eebf8bd7b03cd86a82aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_465ea28a09eb0b90198bbfeda982b7c4dd04f0693c5eebf8bd7b03cd86a82aa3->leave($__internal_465ea28a09eb0b90198bbfeda982b7c4dd04f0693c5eebf8bd7b03cd86a82aa3_prof);

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
