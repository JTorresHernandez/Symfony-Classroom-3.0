<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_572930e300a869c106b6d52aba549aff96ff598df733183b7dc8289befebce0b extends Twig_Template
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
        $__internal_54b254acf848481e3dfd2e3bc471f4a4747ff1cddb846556d877f06e05bf96ee = $this->env->getExtension("native_profiler");
        $__internal_54b254acf848481e3dfd2e3bc471f4a4747ff1cddb846556d877f06e05bf96ee->enter($__internal_54b254acf848481e3dfd2e3bc471f4a4747ff1cddb846556d877f06e05bf96ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_54b254acf848481e3dfd2e3bc471f4a4747ff1cddb846556d877f06e05bf96ee->leave($__internal_54b254acf848481e3dfd2e3bc471f4a4747ff1cddb846556d877f06e05bf96ee_prof);

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