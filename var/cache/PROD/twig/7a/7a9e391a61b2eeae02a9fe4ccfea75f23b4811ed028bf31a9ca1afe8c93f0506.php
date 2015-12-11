<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_76bd79f00ec554ac7f6ff46ba1e1742b97c87cf52006eb74d55c145662e76bcd extends Twig_Template
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
        $__internal_459b45dca85b627a7791b91ad61a5fd05e880a6d49bbc497ad528d74ac7a5849 = $this->env->getExtension("native_profiler");
        $__internal_459b45dca85b627a7791b91ad61a5fd05e880a6d49bbc497ad528d74ac7a5849->enter($__internal_459b45dca85b627a7791b91ad61a5fd05e880a6d49bbc497ad528d74ac7a5849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_459b45dca85b627a7791b91ad61a5fd05e880a6d49bbc497ad528d74ac7a5849->leave($__internal_459b45dca85b627a7791b91ad61a5fd05e880a6d49bbc497ad528d74ac7a5849_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
