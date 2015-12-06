<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7019a194f0dbd58573d402dfb8a2872674dd9c1edbfe7362379182036fef8070 extends Twig_Template
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
        $__internal_29ade7d8fcfa48fffc60b47b96b6073608d002aab6e23be8f19e6de4ffa85347 = $this->env->getExtension("native_profiler");
        $__internal_29ade7d8fcfa48fffc60b47b96b6073608d002aab6e23be8f19e6de4ffa85347->enter($__internal_29ade7d8fcfa48fffc60b47b96b6073608d002aab6e23be8f19e6de4ffa85347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_29ade7d8fcfa48fffc60b47b96b6073608d002aab6e23be8f19e6de4ffa85347->leave($__internal_29ade7d8fcfa48fffc60b47b96b6073608d002aab6e23be8f19e6de4ffa85347_prof);

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
