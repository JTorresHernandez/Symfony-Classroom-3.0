<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_45029ea09f804275ea4efc0d068ba04b6c6ca1facff28369e756486fc7a5b781 extends Twig_Template
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
        $__internal_db5aaeb13e0d28c9d86b3da4f73b1df5a62f7a22d34801c30c734813a42936c1 = $this->env->getExtension("native_profiler");
        $__internal_db5aaeb13e0d28c9d86b3da4f73b1df5a62f7a22d34801c30c734813a42936c1->enter($__internal_db5aaeb13e0d28c9d86b3da4f73b1df5a62f7a22d34801c30c734813a42936c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_db5aaeb13e0d28c9d86b3da4f73b1df5a62f7a22d34801c30c734813a42936c1->leave($__internal_db5aaeb13e0d28c9d86b3da4f73b1df5a62f7a22d34801c30c734813a42936c1_prof);

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