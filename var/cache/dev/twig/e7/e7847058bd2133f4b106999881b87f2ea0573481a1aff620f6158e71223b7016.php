<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5bac78f30311d7c4e3fe088b91ce72b83ca09331af3f3f9e73160ceb1aac9d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e54ef3d2602e0c0259c5f37938eb7767cb70e9cead00047610971796d4f9ffc9 = $this->env->getExtension("native_profiler");
        $__internal_e54ef3d2602e0c0259c5f37938eb7767cb70e9cead00047610971796d4f9ffc9->enter($__internal_e54ef3d2602e0c0259c5f37938eb7767cb70e9cead00047610971796d4f9ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54ef3d2602e0c0259c5f37938eb7767cb70e9cead00047610971796d4f9ffc9->leave($__internal_e54ef3d2602e0c0259c5f37938eb7767cb70e9cead00047610971796d4f9ffc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_059a496ee3c33d1cf7579350d46e351a06a1fe74018f22501ad2246d284eb465 = $this->env->getExtension("native_profiler");
        $__internal_059a496ee3c33d1cf7579350d46e351a06a1fe74018f22501ad2246d284eb465->enter($__internal_059a496ee3c33d1cf7579350d46e351a06a1fe74018f22501ad2246d284eb465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_059a496ee3c33d1cf7579350d46e351a06a1fe74018f22501ad2246d284eb465->leave($__internal_059a496ee3c33d1cf7579350d46e351a06a1fe74018f22501ad2246d284eb465_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
