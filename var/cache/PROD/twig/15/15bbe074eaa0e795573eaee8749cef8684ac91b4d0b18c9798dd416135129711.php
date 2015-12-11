<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d3fb0806a50ebdf9e368c83d6bdd57cd08125c6c944b21d5fd1dbc2aa8082932 extends Twig_Template
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
        $__internal_13ada4cd2d6c5dbc4dfdb44cfa3c556be5fcf7d22b398bd7318bbdf3a6c59c0e = $this->env->getExtension("native_profiler");
        $__internal_13ada4cd2d6c5dbc4dfdb44cfa3c556be5fcf7d22b398bd7318bbdf3a6c59c0e->enter($__internal_13ada4cd2d6c5dbc4dfdb44cfa3c556be5fcf7d22b398bd7318bbdf3a6c59c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_13ada4cd2d6c5dbc4dfdb44cfa3c556be5fcf7d22b398bd7318bbdf3a6c59c0e->leave($__internal_13ada4cd2d6c5dbc4dfdb44cfa3c556be5fcf7d22b398bd7318bbdf3a6c59c0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
