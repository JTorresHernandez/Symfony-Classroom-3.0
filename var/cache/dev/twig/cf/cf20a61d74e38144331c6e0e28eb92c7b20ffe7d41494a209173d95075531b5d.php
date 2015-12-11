<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_510679f54e1f5bdf60664532d1c2758cd03c06410efd2c0b01755575231a3896 extends Twig_Template
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
        $__internal_1ad10637d678e3fc842cef82cbd53432104f9140440d21ef031003948b370a8c = $this->env->getExtension("native_profiler");
        $__internal_1ad10637d678e3fc842cef82cbd53432104f9140440d21ef031003948b370a8c->enter($__internal_1ad10637d678e3fc842cef82cbd53432104f9140440d21ef031003948b370a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1ad10637d678e3fc842cef82cbd53432104f9140440d21ef031003948b370a8c->leave($__internal_1ad10637d678e3fc842cef82cbd53432104f9140440d21ef031003948b370a8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
