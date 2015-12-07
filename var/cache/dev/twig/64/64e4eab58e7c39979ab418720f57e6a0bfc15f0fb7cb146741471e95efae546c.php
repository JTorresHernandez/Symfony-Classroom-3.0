<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0a80cbaee5c5b8305bc57fc74cfae58722e59987c837bb2e4422dc7d98801648 extends Twig_Template
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
        $__internal_fd5592e3d65a00c688c86a7f49cb4e5457645f75680e4cc01b60dbdb9537f784 = $this->env->getExtension("native_profiler");
        $__internal_fd5592e3d65a00c688c86a7f49cb4e5457645f75680e4cc01b60dbdb9537f784->enter($__internal_fd5592e3d65a00c688c86a7f49cb4e5457645f75680e4cc01b60dbdb9537f784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_fd5592e3d65a00c688c86a7f49cb4e5457645f75680e4cc01b60dbdb9537f784->leave($__internal_fd5592e3d65a00c688c86a7f49cb4e5457645f75680e4cc01b60dbdb9537f784_prof);

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
