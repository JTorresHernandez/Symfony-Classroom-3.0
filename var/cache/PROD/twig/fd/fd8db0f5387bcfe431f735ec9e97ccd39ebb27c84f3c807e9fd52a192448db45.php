<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3ef0be54ddbac3a5347e97845d7e822e0db9f0a4b30b118d586b10106620d26b extends Twig_Template
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
        $__internal_c700556a1eccfbf61123db10971e617898f21c56dffbbc20f0a3540a1cdbe4df = $this->env->getExtension("native_profiler");
        $__internal_c700556a1eccfbf61123db10971e617898f21c56dffbbc20f0a3540a1cdbe4df->enter($__internal_c700556a1eccfbf61123db10971e617898f21c56dffbbc20f0a3540a1cdbe4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c700556a1eccfbf61123db10971e617898f21c56dffbbc20f0a3540a1cdbe4df->leave($__internal_c700556a1eccfbf61123db10971e617898f21c56dffbbc20f0a3540a1cdbe4df_prof);

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
