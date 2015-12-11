<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f51688b7fa14b2af2c15403b3977c727458c372ed5505bb7cfd08a198e766e39 extends Twig_Template
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
        $__internal_9c97ca94d1071ea6b506b71ffc2498be88421ad7bae665758e32fd77e6f65128 = $this->env->getExtension("native_profiler");
        $__internal_9c97ca94d1071ea6b506b71ffc2498be88421ad7bae665758e32fd77e6f65128->enter($__internal_9c97ca94d1071ea6b506b71ffc2498be88421ad7bae665758e32fd77e6f65128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9c97ca94d1071ea6b506b71ffc2498be88421ad7bae665758e32fd77e6f65128->leave($__internal_9c97ca94d1071ea6b506b71ffc2498be88421ad7bae665758e32fd77e6f65128_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
