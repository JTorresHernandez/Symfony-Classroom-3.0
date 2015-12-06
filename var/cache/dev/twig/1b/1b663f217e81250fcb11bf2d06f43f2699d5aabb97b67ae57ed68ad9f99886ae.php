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
        $__internal_800f1ef7e32688f40e9b57f2994f0e27c690980d9b1d281684a2f0400a878d5d = $this->env->getExtension("native_profiler");
        $__internal_800f1ef7e32688f40e9b57f2994f0e27c690980d9b1d281684a2f0400a878d5d->enter($__internal_800f1ef7e32688f40e9b57f2994f0e27c690980d9b1d281684a2f0400a878d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_800f1ef7e32688f40e9b57f2994f0e27c690980d9b1d281684a2f0400a878d5d->leave($__internal_800f1ef7e32688f40e9b57f2994f0e27c690980d9b1d281684a2f0400a878d5d_prof);

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
