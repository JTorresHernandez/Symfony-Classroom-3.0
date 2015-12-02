<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b9e5f935d2086babba1215c6e8e80f1e0a9db0bd5046c3bd72338c5e23301606 extends Twig_Template
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
        $__internal_5579970412e1f3b6c97834dfcdc2acfc09424526d3c15b07b1187d1c4eb0af56 = $this->env->getExtension("native_profiler");
        $__internal_5579970412e1f3b6c97834dfcdc2acfc09424526d3c15b07b1187d1c4eb0af56->enter($__internal_5579970412e1f3b6c97834dfcdc2acfc09424526d3c15b07b1187d1c4eb0af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5579970412e1f3b6c97834dfcdc2acfc09424526d3c15b07b1187d1c4eb0af56->leave($__internal_5579970412e1f3b6c97834dfcdc2acfc09424526d3c15b07b1187d1c4eb0af56_prof);

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
