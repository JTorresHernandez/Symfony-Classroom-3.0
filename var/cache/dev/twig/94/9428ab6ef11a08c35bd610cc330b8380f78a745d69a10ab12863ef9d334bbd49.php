<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f139b87e921408fe782d94dbd5de90bef9d7047f2e51beaa69e6912d2ba852be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f74c841858081b4ed322dc00ad44bd5925249912956d92a163b169ffa62873d6 = $this->env->getExtension("native_profiler");
        $__internal_f74c841858081b4ed322dc00ad44bd5925249912956d92a163b169ffa62873d6->enter($__internal_f74c841858081b4ed322dc00ad44bd5925249912956d92a163b169ffa62873d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f74c841858081b4ed322dc00ad44bd5925249912956d92a163b169ffa62873d6->leave($__internal_f74c841858081b4ed322dc00ad44bd5925249912956d92a163b169ffa62873d6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75eb0c6ea4dc62929360ebb94636ed81becf7dec5956ed2c39af43a4bf880a93 = $this->env->getExtension("native_profiler");
        $__internal_75eb0c6ea4dc62929360ebb94636ed81becf7dec5956ed2c39af43a4bf880a93->enter($__internal_75eb0c6ea4dc62929360ebb94636ed81becf7dec5956ed2c39af43a4bf880a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_75eb0c6ea4dc62929360ebb94636ed81becf7dec5956ed2c39af43a4bf880a93->leave($__internal_75eb0c6ea4dc62929360ebb94636ed81becf7dec5956ed2c39af43a4bf880a93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
