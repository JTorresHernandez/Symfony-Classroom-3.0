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
        $__internal_8f8559f9dc85b91c6d0bdb57730a45502d7801df6b8780f15bcfce33efc215e6 = $this->env->getExtension("native_profiler");
        $__internal_8f8559f9dc85b91c6d0bdb57730a45502d7801df6b8780f15bcfce33efc215e6->enter($__internal_8f8559f9dc85b91c6d0bdb57730a45502d7801df6b8780f15bcfce33efc215e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8f8559f9dc85b91c6d0bdb57730a45502d7801df6b8780f15bcfce33efc215e6->leave($__internal_8f8559f9dc85b91c6d0bdb57730a45502d7801df6b8780f15bcfce33efc215e6_prof);

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
