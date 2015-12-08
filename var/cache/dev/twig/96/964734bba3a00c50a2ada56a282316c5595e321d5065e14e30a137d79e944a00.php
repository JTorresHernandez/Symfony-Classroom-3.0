<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ec46bee5df7ea62ded0bb0058f9ed5c3645f47a1593e1cbe3bb2cb79af49eb08 extends Twig_Template
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
        $__internal_97e0f2bb48ec8a35e21974b0eb8ebeb6760e06d1e643890a69dfd520a3d98c85 = $this->env->getExtension("native_profiler");
        $__internal_97e0f2bb48ec8a35e21974b0eb8ebeb6760e06d1e643890a69dfd520a3d98c85->enter($__internal_97e0f2bb48ec8a35e21974b0eb8ebeb6760e06d1e643890a69dfd520a3d98c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_97e0f2bb48ec8a35e21974b0eb8ebeb6760e06d1e643890a69dfd520a3d98c85->leave($__internal_97e0f2bb48ec8a35e21974b0eb8ebeb6760e06d1e643890a69dfd520a3d98c85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
