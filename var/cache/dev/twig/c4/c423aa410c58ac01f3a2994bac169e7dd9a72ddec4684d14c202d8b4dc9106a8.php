<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_73248035e0d0f8eba29f66e3fc16131ee32320e187e249f816f7e795d9c13a01 extends Twig_Template
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
        $__internal_cfd31aaa261f4b0ba520bf07367e5ecba8c34c158a7f5bc0dbc9c2d02ca0889e = $this->env->getExtension("native_profiler");
        $__internal_cfd31aaa261f4b0ba520bf07367e5ecba8c34c158a7f5bc0dbc9c2d02ca0889e->enter($__internal_cfd31aaa261f4b0ba520bf07367e5ecba8c34c158a7f5bc0dbc9c2d02ca0889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_cfd31aaa261f4b0ba520bf07367e5ecba8c34c158a7f5bc0dbc9c2d02ca0889e->leave($__internal_cfd31aaa261f4b0ba520bf07367e5ecba8c34c158a7f5bc0dbc9c2d02ca0889e_prof);

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
