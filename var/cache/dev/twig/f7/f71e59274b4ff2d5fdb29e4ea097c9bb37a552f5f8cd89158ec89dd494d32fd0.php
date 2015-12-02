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
        $__internal_847bf07eb845e099b5d2bd53e4e7d2325ba8d26c98d654536bfd3459ec3c8dfb = $this->env->getExtension("native_profiler");
        $__internal_847bf07eb845e099b5d2bd53e4e7d2325ba8d26c98d654536bfd3459ec3c8dfb->enter($__internal_847bf07eb845e099b5d2bd53e4e7d2325ba8d26c98d654536bfd3459ec3c8dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_847bf07eb845e099b5d2bd53e4e7d2325ba8d26c98d654536bfd3459ec3c8dfb->leave($__internal_847bf07eb845e099b5d2bd53e4e7d2325ba8d26c98d654536bfd3459ec3c8dfb_prof);

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
