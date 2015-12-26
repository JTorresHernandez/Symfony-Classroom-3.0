<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_907762b36a5860467c4f7731bc3547b3d4ee548fe8d655e72131a2784f3b3b76 extends Twig_Template
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
        $__internal_1bfdd571bdefb03f0fc5f2c750067e4274e1af27a3489299a7f8e990c25c7f05 = $this->env->getExtension("native_profiler");
        $__internal_1bfdd571bdefb03f0fc5f2c750067e4274e1af27a3489299a7f8e990c25c7f05->enter($__internal_1bfdd571bdefb03f0fc5f2c750067e4274e1af27a3489299a7f8e990c25c7f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1bfdd571bdefb03f0fc5f2c750067e4274e1af27a3489299a7f8e990c25c7f05->leave($__internal_1bfdd571bdefb03f0fc5f2c750067e4274e1af27a3489299a7f8e990c25c7f05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
