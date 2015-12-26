<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5913acc64f7d69faaa0c43a26fd197528ab74a258be7e57e59dea9b05dd4ef39 extends Twig_Template
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
        $__internal_da9e9ee5cbedbbb2da4b48d8c533cad02898436135c22b7fb3df4301c7ea317a = $this->env->getExtension("native_profiler");
        $__internal_da9e9ee5cbedbbb2da4b48d8c533cad02898436135c22b7fb3df4301c7ea317a->enter($__internal_da9e9ee5cbedbbb2da4b48d8c533cad02898436135c22b7fb3df4301c7ea317a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da9e9ee5cbedbbb2da4b48d8c533cad02898436135c22b7fb3df4301c7ea317a->leave($__internal_da9e9ee5cbedbbb2da4b48d8c533cad02898436135c22b7fb3df4301c7ea317a_prof);

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
