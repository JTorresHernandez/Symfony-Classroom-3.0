<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_787b6203844a1398ecc18cf8e231565dfbb2fa2b9a2590840434c35d4fce9a36 extends Twig_Template
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
        $__internal_7aef1dca4ecd78968354ab70ef70f57ac9e0ef3540979bb4be81674ab5ef2f01 = $this->env->getExtension("native_profiler");
        $__internal_7aef1dca4ecd78968354ab70ef70f57ac9e0ef3540979bb4be81674ab5ef2f01->enter($__internal_7aef1dca4ecd78968354ab70ef70f57ac9e0ef3540979bb4be81674ab5ef2f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7aef1dca4ecd78968354ab70ef70f57ac9e0ef3540979bb4be81674ab5ef2f01->leave($__internal_7aef1dca4ecd78968354ab70ef70f57ac9e0ef3540979bb4be81674ab5ef2f01_prof);

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
