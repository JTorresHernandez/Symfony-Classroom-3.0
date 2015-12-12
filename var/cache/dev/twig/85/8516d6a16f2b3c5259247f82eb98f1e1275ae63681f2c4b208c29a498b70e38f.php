<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8f20365a5c8ba28c9023e8b4fbb53afe90df6e39def4a4ab583b95f9884bb45b extends Twig_Template
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
        $__internal_cb68dd160c19ace4aecabcb9844d91b34eb0e0a9928990786c461c650d2ed2bb = $this->env->getExtension("native_profiler");
        $__internal_cb68dd160c19ace4aecabcb9844d91b34eb0e0a9928990786c461c650d2ed2bb->enter($__internal_cb68dd160c19ace4aecabcb9844d91b34eb0e0a9928990786c461c650d2ed2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb68dd160c19ace4aecabcb9844d91b34eb0e0a9928990786c461c650d2ed2bb->leave($__internal_cb68dd160c19ace4aecabcb9844d91b34eb0e0a9928990786c461c650d2ed2bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac2d3764501433645bbfbba2dd447eea785c97baad22cd4d673fd9837d911718 = $this->env->getExtension("native_profiler");
        $__internal_ac2d3764501433645bbfbba2dd447eea785c97baad22cd4d673fd9837d911718->enter($__internal_ac2d3764501433645bbfbba2dd447eea785c97baad22cd4d673fd9837d911718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ac2d3764501433645bbfbba2dd447eea785c97baad22cd4d673fd9837d911718->leave($__internal_ac2d3764501433645bbfbba2dd447eea785c97baad22cd4d673fd9837d911718_prof);

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
