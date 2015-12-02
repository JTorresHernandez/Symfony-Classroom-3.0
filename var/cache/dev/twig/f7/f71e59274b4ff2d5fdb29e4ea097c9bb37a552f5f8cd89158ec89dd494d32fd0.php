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
        $__internal_612654c6cd8124e99c5334db2bdd4d5c7d8793c36289f96ab82a3ea78cf6f790 = $this->env->getExtension("native_profiler");
        $__internal_612654c6cd8124e99c5334db2bdd4d5c7d8793c36289f96ab82a3ea78cf6f790->enter($__internal_612654c6cd8124e99c5334db2bdd4d5c7d8793c36289f96ab82a3ea78cf6f790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_612654c6cd8124e99c5334db2bdd4d5c7d8793c36289f96ab82a3ea78cf6f790->leave($__internal_612654c6cd8124e99c5334db2bdd4d5c7d8793c36289f96ab82a3ea78cf6f790_prof);

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
