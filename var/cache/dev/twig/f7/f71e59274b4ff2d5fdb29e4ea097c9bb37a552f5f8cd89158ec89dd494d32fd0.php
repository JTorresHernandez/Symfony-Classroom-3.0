<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c265e3d3bffc62ec87aa7a6fb66d5fec7773537a23d98706f842aeb6b388c793 extends Twig_Template
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
        $__internal_6e5c1d8f1181d440227d3655a346f7f05284af155ddfa935ec2e79fcfde183ab = $this->env->getExtension("native_profiler");
        $__internal_6e5c1d8f1181d440227d3655a346f7f05284af155ddfa935ec2e79fcfde183ab->enter($__internal_6e5c1d8f1181d440227d3655a346f7f05284af155ddfa935ec2e79fcfde183ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6e5c1d8f1181d440227d3655a346f7f05284af155ddfa935ec2e79fcfde183ab->leave($__internal_6e5c1d8f1181d440227d3655a346f7f05284af155ddfa935ec2e79fcfde183ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
