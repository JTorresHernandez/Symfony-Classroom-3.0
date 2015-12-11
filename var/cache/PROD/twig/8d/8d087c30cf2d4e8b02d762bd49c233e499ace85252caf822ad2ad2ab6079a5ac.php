<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4e920689dc2de35a282e89015d0df56f7d1a4747e9608e387e95e027ee55c11 extends Twig_Template
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
        $__internal_603ec99031757025275da3b511b6f338175496222b0936eac2197e1c943a145b = $this->env->getExtension("native_profiler");
        $__internal_603ec99031757025275da3b511b6f338175496222b0936eac2197e1c943a145b->enter($__internal_603ec99031757025275da3b511b6f338175496222b0936eac2197e1c943a145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_603ec99031757025275da3b511b6f338175496222b0936eac2197e1c943a145b->leave($__internal_603ec99031757025275da3b511b6f338175496222b0936eac2197e1c943a145b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
