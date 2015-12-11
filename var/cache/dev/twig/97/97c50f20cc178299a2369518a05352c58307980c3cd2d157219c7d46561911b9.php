<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e33d0c40dba539088b826860f22f199081fe4b57736421784ab30019e18bb01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_7c01aed3a222da2af27f32230d7f022fc0f58b26d000aef61f86663c1e77b2d1 = $this->env->getExtension("native_profiler");
        $__internal_7c01aed3a222da2af27f32230d7f022fc0f58b26d000aef61f86663c1e77b2d1->enter($__internal_7c01aed3a222da2af27f32230d7f022fc0f58b26d000aef61f86663c1e77b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c01aed3a222da2af27f32230d7f022fc0f58b26d000aef61f86663c1e77b2d1->leave($__internal_7c01aed3a222da2af27f32230d7f022fc0f58b26d000aef61f86663c1e77b2d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e8c66f6dd1914bd92ff0af54b6a342646c2c5018e5ec495c35091d13c65ac41 = $this->env->getExtension("native_profiler");
        $__internal_9e8c66f6dd1914bd92ff0af54b6a342646c2c5018e5ec495c35091d13c65ac41->enter($__internal_9e8c66f6dd1914bd92ff0af54b6a342646c2c5018e5ec495c35091d13c65ac41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9e8c66f6dd1914bd92ff0af54b6a342646c2c5018e5ec495c35091d13c65ac41->leave($__internal_9e8c66f6dd1914bd92ff0af54b6a342646c2c5018e5ec495c35091d13c65ac41_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
