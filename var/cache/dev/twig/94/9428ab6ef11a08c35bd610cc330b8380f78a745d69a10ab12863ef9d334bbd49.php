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
        $__internal_0c4918c22566e7e3f956f694f03ac390bf06e8d9cff52df503a13758dc4c52c7 = $this->env->getExtension("native_profiler");
        $__internal_0c4918c22566e7e3f956f694f03ac390bf06e8d9cff52df503a13758dc4c52c7->enter($__internal_0c4918c22566e7e3f956f694f03ac390bf06e8d9cff52df503a13758dc4c52c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c4918c22566e7e3f956f694f03ac390bf06e8d9cff52df503a13758dc4c52c7->leave($__internal_0c4918c22566e7e3f956f694f03ac390bf06e8d9cff52df503a13758dc4c52c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f147114571802f78a4a158e5b32e99eba1a3a1d81da84c4aebd4d2aaec76b33 = $this->env->getExtension("native_profiler");
        $__internal_2f147114571802f78a4a158e5b32e99eba1a3a1d81da84c4aebd4d2aaec76b33->enter($__internal_2f147114571802f78a4a158e5b32e99eba1a3a1d81da84c4aebd4d2aaec76b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f147114571802f78a4a158e5b32e99eba1a3a1d81da84c4aebd4d2aaec76b33->leave($__internal_2f147114571802f78a4a158e5b32e99eba1a3a1d81da84c4aebd4d2aaec76b33_prof);

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
