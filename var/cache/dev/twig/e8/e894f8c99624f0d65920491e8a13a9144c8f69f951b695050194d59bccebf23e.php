<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2ab5a4bd87ede1deb76ca82a21135bf9c55db3c987122bb86cb028ceeedba271 extends Twig_Template
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
        $__internal_ea6c1c0e90a298544ecac228b5aa37602f95ecebe5ff147badfd9565617b1792 = $this->env->getExtension("native_profiler");
        $__internal_ea6c1c0e90a298544ecac228b5aa37602f95ecebe5ff147badfd9565617b1792->enter($__internal_ea6c1c0e90a298544ecac228b5aa37602f95ecebe5ff147badfd9565617b1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ea6c1c0e90a298544ecac228b5aa37602f95ecebe5ff147badfd9565617b1792->leave($__internal_ea6c1c0e90a298544ecac228b5aa37602f95ecebe5ff147badfd9565617b1792_prof);

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
