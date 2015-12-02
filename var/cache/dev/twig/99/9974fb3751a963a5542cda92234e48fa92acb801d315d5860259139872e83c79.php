<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7019a194f0dbd58573d402dfb8a2872674dd9c1edbfe7362379182036fef8070 extends Twig_Template
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
        $__internal_c34ecbd752a50bfbd7ee6e39874d06f1c3eb7c8925363357df4a01ed3a9ec3cf = $this->env->getExtension("native_profiler");
        $__internal_c34ecbd752a50bfbd7ee6e39874d06f1c3eb7c8925363357df4a01ed3a9ec3cf->enter($__internal_c34ecbd752a50bfbd7ee6e39874d06f1c3eb7c8925363357df4a01ed3a9ec3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c34ecbd752a50bfbd7ee6e39874d06f1c3eb7c8925363357df4a01ed3a9ec3cf->leave($__internal_c34ecbd752a50bfbd7ee6e39874d06f1c3eb7c8925363357df4a01ed3a9ec3cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
