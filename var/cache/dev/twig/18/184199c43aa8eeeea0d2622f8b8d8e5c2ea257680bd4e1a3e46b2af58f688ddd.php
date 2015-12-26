<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b030f4af1bb944d42f07ab66430c670485cce90d72543737c6f06f272c893865 extends Twig_Template
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
        $__internal_ce3e0bd4392ae7a843750ec94b7a90509cdf4fc8940dc562f23c4d1efb302daf = $this->env->getExtension("native_profiler");
        $__internal_ce3e0bd4392ae7a843750ec94b7a90509cdf4fc8940dc562f23c4d1efb302daf->enter($__internal_ce3e0bd4392ae7a843750ec94b7a90509cdf4fc8940dc562f23c4d1efb302daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ce3e0bd4392ae7a843750ec94b7a90509cdf4fc8940dc562f23c4d1efb302daf->leave($__internal_ce3e0bd4392ae7a843750ec94b7a90509cdf4fc8940dc562f23c4d1efb302daf_prof);

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
