<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0e90b4ee93ebcabd13709b63d592de3b10a16d3a949a85df1e6f425066670cff extends Twig_Template
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
        $__internal_2fb6b09607aa5b5b9d92f0616c96dd7db4d87e2b42276c3479cf852cf0fe974d = $this->env->getExtension("native_profiler");
        $__internal_2fb6b09607aa5b5b9d92f0616c96dd7db4d87e2b42276c3479cf852cf0fe974d->enter($__internal_2fb6b09607aa5b5b9d92f0616c96dd7db4d87e2b42276c3479cf852cf0fe974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2fb6b09607aa5b5b9d92f0616c96dd7db4d87e2b42276c3479cf852cf0fe974d->leave($__internal_2fb6b09607aa5b5b9d92f0616c96dd7db4d87e2b42276c3479cf852cf0fe974d_prof);

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
