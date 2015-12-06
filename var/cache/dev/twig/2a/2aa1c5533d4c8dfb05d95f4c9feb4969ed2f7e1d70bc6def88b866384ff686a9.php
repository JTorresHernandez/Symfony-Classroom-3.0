<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e653beadf82025b32f8556c30f65cf1e9322412423cdff2136cb621ee26052a0 extends Twig_Template
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
        $__internal_6d3312568805b2272378360d9af6a6a3a18d196ecf5e6ba9b662c0690a01f6d8 = $this->env->getExtension("native_profiler");
        $__internal_6d3312568805b2272378360d9af6a6a3a18d196ecf5e6ba9b662c0690a01f6d8->enter($__internal_6d3312568805b2272378360d9af6a6a3a18d196ecf5e6ba9b662c0690a01f6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d3312568805b2272378360d9af6a6a3a18d196ecf5e6ba9b662c0690a01f6d8->leave($__internal_6d3312568805b2272378360d9af6a6a3a18d196ecf5e6ba9b662c0690a01f6d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c23c4e1fc05361858dd2957161d35b3b21f8404e6cd3c3daa132e71e0322835 = $this->env->getExtension("native_profiler");
        $__internal_0c23c4e1fc05361858dd2957161d35b3b21f8404e6cd3c3daa132e71e0322835->enter($__internal_0c23c4e1fc05361858dd2957161d35b3b21f8404e6cd3c3daa132e71e0322835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0c23c4e1fc05361858dd2957161d35b3b21f8404e6cd3c3daa132e71e0322835->leave($__internal_0c23c4e1fc05361858dd2957161d35b3b21f8404e6cd3c3daa132e71e0322835_prof);

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
