<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_afc853581dfcd9fb58079b059f560bc0f6b92b2b7d3eed2154d5d9fb27573961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d398c5fe4e088ba81dba0ecf1b939afdb20831f1aa99f3274e455fb369e67bb = $this->env->getExtension("native_profiler");
        $__internal_4d398c5fe4e088ba81dba0ecf1b939afdb20831f1aa99f3274e455fb369e67bb->enter($__internal_4d398c5fe4e088ba81dba0ecf1b939afdb20831f1aa99f3274e455fb369e67bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d398c5fe4e088ba81dba0ecf1b939afdb20831f1aa99f3274e455fb369e67bb->leave($__internal_4d398c5fe4e088ba81dba0ecf1b939afdb20831f1aa99f3274e455fb369e67bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0b5acc0230f870b8a0690b08464eaae221366c3894a2573fe333f3955f1becb = $this->env->getExtension("native_profiler");
        $__internal_e0b5acc0230f870b8a0690b08464eaae221366c3894a2573fe333f3955f1becb->enter($__internal_e0b5acc0230f870b8a0690b08464eaae221366c3894a2573fe333f3955f1becb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e0b5acc0230f870b8a0690b08464eaae221366c3894a2573fe333f3955f1becb->leave($__internal_e0b5acc0230f870b8a0690b08464eaae221366c3894a2573fe333f3955f1becb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
