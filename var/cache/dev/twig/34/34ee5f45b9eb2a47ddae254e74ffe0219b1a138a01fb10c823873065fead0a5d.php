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
        $__internal_4e4d9086507f05d7c2225a8637082c9e52700413ce828f6ed0f10ef1040d84a0 = $this->env->getExtension("native_profiler");
        $__internal_4e4d9086507f05d7c2225a8637082c9e52700413ce828f6ed0f10ef1040d84a0->enter($__internal_4e4d9086507f05d7c2225a8637082c9e52700413ce828f6ed0f10ef1040d84a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_4e4d9086507f05d7c2225a8637082c9e52700413ce828f6ed0f10ef1040d84a0->leave($__internal_4e4d9086507f05d7c2225a8637082c9e52700413ce828f6ed0f10ef1040d84a0_prof);

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
