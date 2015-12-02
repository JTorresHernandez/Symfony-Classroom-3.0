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
        $__internal_fe6c3e09cd13f480a91be86d877c588b3355165a57092814d99f81a84691d55c = $this->env->getExtension("native_profiler");
        $__internal_fe6c3e09cd13f480a91be86d877c588b3355165a57092814d99f81a84691d55c->enter($__internal_fe6c3e09cd13f480a91be86d877c588b3355165a57092814d99f81a84691d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fe6c3e09cd13f480a91be86d877c588b3355165a57092814d99f81a84691d55c->leave($__internal_fe6c3e09cd13f480a91be86d877c588b3355165a57092814d99f81a84691d55c_prof);

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
