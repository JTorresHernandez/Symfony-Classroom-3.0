<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7d6f672d295a2369d11e0c1055462758990bcd22f543b3d15a25fdcb0ccca850 extends Twig_Template
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
        $__internal_f270299f2f1a28976beec9baa6cc64f4f620b19bfe700ae04d38dad98ebad9f2 = $this->env->getExtension("native_profiler");
        $__internal_f270299f2f1a28976beec9baa6cc64f4f620b19bfe700ae04d38dad98ebad9f2->enter($__internal_f270299f2f1a28976beec9baa6cc64f4f620b19bfe700ae04d38dad98ebad9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f270299f2f1a28976beec9baa6cc64f4f620b19bfe700ae04d38dad98ebad9f2->leave($__internal_f270299f2f1a28976beec9baa6cc64f4f620b19bfe700ae04d38dad98ebad9f2_prof);

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
