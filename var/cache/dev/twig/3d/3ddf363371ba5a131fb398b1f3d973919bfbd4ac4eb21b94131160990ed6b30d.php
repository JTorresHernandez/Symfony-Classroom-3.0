<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c80e7da820ba130943c3645ef899f24cf5f5f5d40d46cb49f2426e5429bb8536 extends Twig_Template
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
        $__internal_850b6fe3e6f7bf36ad4e9ceabe156f97e00bf8fcdba3f8e6aac005ed0c1365b9 = $this->env->getExtension("native_profiler");
        $__internal_850b6fe3e6f7bf36ad4e9ceabe156f97e00bf8fcdba3f8e6aac005ed0c1365b9->enter($__internal_850b6fe3e6f7bf36ad4e9ceabe156f97e00bf8fcdba3f8e6aac005ed0c1365b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_850b6fe3e6f7bf36ad4e9ceabe156f97e00bf8fcdba3f8e6aac005ed0c1365b9->leave($__internal_850b6fe3e6f7bf36ad4e9ceabe156f97e00bf8fcdba3f8e6aac005ed0c1365b9_prof);

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
