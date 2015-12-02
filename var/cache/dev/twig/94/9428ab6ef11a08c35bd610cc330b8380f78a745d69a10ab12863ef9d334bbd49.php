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
        $__internal_e3a357b48f00c57fb10b9509ae11aa711e9f998dff4b2cc2b5bb847cd3fb0127 = $this->env->getExtension("native_profiler");
        $__internal_e3a357b48f00c57fb10b9509ae11aa711e9f998dff4b2cc2b5bb847cd3fb0127->enter($__internal_e3a357b48f00c57fb10b9509ae11aa711e9f998dff4b2cc2b5bb847cd3fb0127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e3a357b48f00c57fb10b9509ae11aa711e9f998dff4b2cc2b5bb847cd3fb0127->leave($__internal_e3a357b48f00c57fb10b9509ae11aa711e9f998dff4b2cc2b5bb847cd3fb0127_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_15e1e4cb23b561158289323c57df74cca417781fd85e84913fc9d7991e42ca71 = $this->env->getExtension("native_profiler");
        $__internal_15e1e4cb23b561158289323c57df74cca417781fd85e84913fc9d7991e42ca71->enter($__internal_15e1e4cb23b561158289323c57df74cca417781fd85e84913fc9d7991e42ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15e1e4cb23b561158289323c57df74cca417781fd85e84913fc9d7991e42ca71->leave($__internal_15e1e4cb23b561158289323c57df74cca417781fd85e84913fc9d7991e42ca71_prof);

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
