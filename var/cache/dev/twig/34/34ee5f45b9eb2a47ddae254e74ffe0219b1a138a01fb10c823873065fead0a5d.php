<?php

/* :comment:show-form.html.twig */
class __TwigTemplate_89247c24ea62d54de8fb29f1111042c76d97a1c482d5bf6c6a2f5a68244ec066 extends Twig_Template
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
        $__internal_5feae2083e18daab7ce5f1ef16d0fdbd6aa35f9339b1d953f9b85b60fe45fc5d = $this->env->getExtension("native_profiler");
        $__internal_5feae2083e18daab7ce5f1ef16d0fdbd6aa35f9339b1d953f9b85b60fe45fc5d->enter($__internal_5feae2083e18daab7ce5f1ef16d0fdbd6aa35f9339b1d953f9b85b60fe45fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_5feae2083e18daab7ce5f1ef16d0fdbd6aa35f9339b1d953f9b85b60fe45fc5d->leave($__internal_5feae2083e18daab7ce5f1ef16d0fdbd6aa35f9339b1d953f9b85b60fe45fc5d_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form.html.twig";
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
/* {{ form(form) }}*/
