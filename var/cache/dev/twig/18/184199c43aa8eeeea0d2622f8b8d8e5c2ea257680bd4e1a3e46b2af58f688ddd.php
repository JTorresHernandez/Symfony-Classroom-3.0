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
        $__internal_1af9a9a908ba4511b9fc31561f94917b499bc93736372103fd0aa2e8fae4c3d4 = $this->env->getExtension("native_profiler");
        $__internal_1af9a9a908ba4511b9fc31561f94917b499bc93736372103fd0aa2e8fae4c3d4->enter($__internal_1af9a9a908ba4511b9fc31561f94917b499bc93736372103fd0aa2e8fae4c3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_1af9a9a908ba4511b9fc31561f94917b499bc93736372103fd0aa2e8fae4c3d4->leave($__internal_1af9a9a908ba4511b9fc31561f94917b499bc93736372103fd0aa2e8fae4c3d4_prof);

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
