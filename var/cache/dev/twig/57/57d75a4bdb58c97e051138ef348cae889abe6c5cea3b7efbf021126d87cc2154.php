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
        $__internal_6e2f8101e6645132dab37fe0900d9342a29f1c87b80e294b29f9c6a82c035685 = $this->env->getExtension("native_profiler");
        $__internal_6e2f8101e6645132dab37fe0900d9342a29f1c87b80e294b29f9c6a82c035685->enter($__internal_6e2f8101e6645132dab37fe0900d9342a29f1c87b80e294b29f9c6a82c035685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6e2f8101e6645132dab37fe0900d9342a29f1c87b80e294b29f9c6a82c035685->leave($__internal_6e2f8101e6645132dab37fe0900d9342a29f1c87b80e294b29f9c6a82c035685_prof);

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
