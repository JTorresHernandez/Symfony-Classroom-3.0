<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_01495536b0f4688ef3f40b30d69a85d53685af654c9821cecdf34d9be9d1513f extends Twig_Template
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
        $__internal_61c2bf0b247a748c4616357a54b989bcd10e4d82e7384855f582897b85677cf0 = $this->env->getExtension("native_profiler");
        $__internal_61c2bf0b247a748c4616357a54b989bcd10e4d82e7384855f582897b85677cf0->enter($__internal_61c2bf0b247a748c4616357a54b989bcd10e4d82e7384855f582897b85677cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_61c2bf0b247a748c4616357a54b989bcd10e4d82e7384855f582897b85677cf0->leave($__internal_61c2bf0b247a748c4616357a54b989bcd10e4d82e7384855f582897b85677cf0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
