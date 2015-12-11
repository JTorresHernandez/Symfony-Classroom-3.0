<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df6759a73b365fbbf355d857d6b061f62e42ee8c6b66553a8d845d8451ba846b extends Twig_Template
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
        $__internal_37ec3e0781646881f15ad936318b6d8bc6863d6e68723ca9e0c2b3b1b8bc9939 = $this->env->getExtension("native_profiler");
        $__internal_37ec3e0781646881f15ad936318b6d8bc6863d6e68723ca9e0c2b3b1b8bc9939->enter($__internal_37ec3e0781646881f15ad936318b6d8bc6863d6e68723ca9e0c2b3b1b8bc9939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_37ec3e0781646881f15ad936318b6d8bc6863d6e68723ca9e0c2b3b1b8bc9939->leave($__internal_37ec3e0781646881f15ad936318b6d8bc6863d6e68723ca9e0c2b3b1b8bc9939_prof);

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
