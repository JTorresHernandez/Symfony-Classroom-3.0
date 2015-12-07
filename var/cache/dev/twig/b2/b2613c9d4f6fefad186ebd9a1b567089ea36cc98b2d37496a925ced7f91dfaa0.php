<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3856acbb9aebdd9f0177c4c8bd23e475d668fc47c6604954c803855ed8c76a99 extends Twig_Template
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
        $__internal_2eae36388a1a51fad6a7c02f852b3aaa85667488e2763e82243d97dfccd1306c = $this->env->getExtension("native_profiler");
        $__internal_2eae36388a1a51fad6a7c02f852b3aaa85667488e2763e82243d97dfccd1306c->enter($__internal_2eae36388a1a51fad6a7c02f852b3aaa85667488e2763e82243d97dfccd1306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2eae36388a1a51fad6a7c02f852b3aaa85667488e2763e82243d97dfccd1306c->leave($__internal_2eae36388a1a51fad6a7c02f852b3aaa85667488e2763e82243d97dfccd1306c_prof);

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
