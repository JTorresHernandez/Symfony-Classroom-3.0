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
        $__internal_1b761d56c685d3c411e91236e231c1307b8e18b807d4a972d86747a2ad59ca58 = $this->env->getExtension("native_profiler");
        $__internal_1b761d56c685d3c411e91236e231c1307b8e18b807d4a972d86747a2ad59ca58->enter($__internal_1b761d56c685d3c411e91236e231c1307b8e18b807d4a972d86747a2ad59ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1b761d56c685d3c411e91236e231c1307b8e18b807d4a972d86747a2ad59ca58->leave($__internal_1b761d56c685d3c411e91236e231c1307b8e18b807d4a972d86747a2ad59ca58_prof);

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
