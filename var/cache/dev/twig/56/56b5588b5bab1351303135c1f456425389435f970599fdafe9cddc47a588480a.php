<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1aa1bbf5a36ae8c31c074edd70e7331031de94122a94f6544eebbc4936e67de0 extends Twig_Template
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
        $__internal_b9a1f60b120fa240225c0163fddc4448951e0e831cf490a5c38034166890febd = $this->env->getExtension("native_profiler");
        $__internal_b9a1f60b120fa240225c0163fddc4448951e0e831cf490a5c38034166890febd->enter($__internal_b9a1f60b120fa240225c0163fddc4448951e0e831cf490a5c38034166890febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_b9a1f60b120fa240225c0163fddc4448951e0e831cf490a5c38034166890febd->leave($__internal_b9a1f60b120fa240225c0163fddc4448951e0e831cf490a5c38034166890febd_prof);

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
