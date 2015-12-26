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
        $__internal_af4b41aef335266dc7bc02a084d17d63718e937b946df6d76c8c007acc71e479 = $this->env->getExtension("native_profiler");
        $__internal_af4b41aef335266dc7bc02a084d17d63718e937b946df6d76c8c007acc71e479->enter($__internal_af4b41aef335266dc7bc02a084d17d63718e937b946df6d76c8c007acc71e479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_af4b41aef335266dc7bc02a084d17d63718e937b946df6d76c8c007acc71e479->leave($__internal_af4b41aef335266dc7bc02a084d17d63718e937b946df6d76c8c007acc71e479_prof);

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
