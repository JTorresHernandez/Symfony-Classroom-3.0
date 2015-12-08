<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_62c9a194a08b94e0044850916bd0f1c9653bf0d50e9ca339ced701849742fa3f extends Twig_Template
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
        $__internal_97eb3a562ca3b0d36d5dbe5286c04005fea2a557c352f9a28ad5835a01475182 = $this->env->getExtension("native_profiler");
        $__internal_97eb3a562ca3b0d36d5dbe5286c04005fea2a557c352f9a28ad5835a01475182->enter($__internal_97eb3a562ca3b0d36d5dbe5286c04005fea2a557c352f9a28ad5835a01475182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_97eb3a562ca3b0d36d5dbe5286c04005fea2a557c352f9a28ad5835a01475182->leave($__internal_97eb3a562ca3b0d36d5dbe5286c04005fea2a557c352f9a28ad5835a01475182_prof);

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
