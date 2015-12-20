<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_120b568faa1c0a220aaf92790edd788a739980ff2ccd861616ac06bb6e9fe397 extends Twig_Template
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
        $__internal_51f0c47b823beb826b3619e3298426d9727c2a8220ae7cc609b7e3b9a3d96b8a = $this->env->getExtension("native_profiler");
        $__internal_51f0c47b823beb826b3619e3298426d9727c2a8220ae7cc609b7e3b9a3d96b8a->enter($__internal_51f0c47b823beb826b3619e3298426d9727c2a8220ae7cc609b7e3b9a3d96b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_51f0c47b823beb826b3619e3298426d9727c2a8220ae7cc609b7e3b9a3d96b8a->leave($__internal_51f0c47b823beb826b3619e3298426d9727c2a8220ae7cc609b7e3b9a3d96b8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
