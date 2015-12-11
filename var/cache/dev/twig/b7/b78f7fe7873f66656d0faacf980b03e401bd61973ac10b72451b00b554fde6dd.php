<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c38df04e343190dd075e30c2fb67eb617e475385fbf026166910ac472a9d84b6 extends Twig_Template
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
        $__internal_f331aa7c0fa7e716982a9d0ef401cde07a13310bceeff22567432b7f8f827466 = $this->env->getExtension("native_profiler");
        $__internal_f331aa7c0fa7e716982a9d0ef401cde07a13310bceeff22567432b7f8f827466->enter($__internal_f331aa7c0fa7e716982a9d0ef401cde07a13310bceeff22567432b7f8f827466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f331aa7c0fa7e716982a9d0ef401cde07a13310bceeff22567432b7f8f827466->leave($__internal_f331aa7c0fa7e716982a9d0ef401cde07a13310bceeff22567432b7f8f827466_prof);

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
