<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f72a1db97b30483a721d393a0198761a2c59d3ef25693b765956823c8e5eeed extends Twig_Template
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
        $__internal_86b349e110dc3d4897c7179a33fee8dd04720c159371c0d9d04bf89e96deb8c9 = $this->env->getExtension("native_profiler");
        $__internal_86b349e110dc3d4897c7179a33fee8dd04720c159371c0d9d04bf89e96deb8c9->enter($__internal_86b349e110dc3d4897c7179a33fee8dd04720c159371c0d9d04bf89e96deb8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_86b349e110dc3d4897c7179a33fee8dd04720c159371c0d9d04bf89e96deb8c9->leave($__internal_86b349e110dc3d4897c7179a33fee8dd04720c159371c0d9d04bf89e96deb8c9_prof);

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
