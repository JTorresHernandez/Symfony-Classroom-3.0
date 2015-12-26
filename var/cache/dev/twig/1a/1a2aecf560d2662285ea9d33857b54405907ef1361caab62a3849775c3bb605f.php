<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_61c3eae62e95ad140a37bd013fba7eab8d0b2b0c13e07e53d79a560388247832 extends Twig_Template
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
        $__internal_757c023bb95a50184fb0adb126ccaf130ef80e0f8ddf495422aed0ab0b3b442a = $this->env->getExtension("native_profiler");
        $__internal_757c023bb95a50184fb0adb126ccaf130ef80e0f8ddf495422aed0ab0b3b442a->enter($__internal_757c023bb95a50184fb0adb126ccaf130ef80e0f8ddf495422aed0ab0b3b442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_757c023bb95a50184fb0adb126ccaf130ef80e0f8ddf495422aed0ab0b3b442a->leave($__internal_757c023bb95a50184fb0adb126ccaf130ef80e0f8ddf495422aed0ab0b3b442a_prof);

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
