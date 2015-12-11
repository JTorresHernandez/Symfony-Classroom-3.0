<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9c061d3f47a956fe85c4277675bb3c4fcbb8589b7cf57d2879f5d2be991a805c extends Twig_Template
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
        $__internal_e956111e6ffb87e34920c545be0cbd9298d4c83053380790a31e00d143c964bd = $this->env->getExtension("native_profiler");
        $__internal_e956111e6ffb87e34920c545be0cbd9298d4c83053380790a31e00d143c964bd->enter($__internal_e956111e6ffb87e34920c545be0cbd9298d4c83053380790a31e00d143c964bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e956111e6ffb87e34920c545be0cbd9298d4c83053380790a31e00d143c964bd->leave($__internal_e956111e6ffb87e34920c545be0cbd9298d4c83053380790a31e00d143c964bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
