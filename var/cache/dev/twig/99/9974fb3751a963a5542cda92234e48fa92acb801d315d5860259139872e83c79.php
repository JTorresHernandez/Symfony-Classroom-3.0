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
        $__internal_d9491e14146bb9f7945142ab82587e72d7b9183775f1526002dcf7b85c8a21aa = $this->env->getExtension("native_profiler");
        $__internal_d9491e14146bb9f7945142ab82587e72d7b9183775f1526002dcf7b85c8a21aa->enter($__internal_d9491e14146bb9f7945142ab82587e72d7b9183775f1526002dcf7b85c8a21aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d9491e14146bb9f7945142ab82587e72d7b9183775f1526002dcf7b85c8a21aa->leave($__internal_d9491e14146bb9f7945142ab82587e72d7b9183775f1526002dcf7b85c8a21aa_prof);

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
