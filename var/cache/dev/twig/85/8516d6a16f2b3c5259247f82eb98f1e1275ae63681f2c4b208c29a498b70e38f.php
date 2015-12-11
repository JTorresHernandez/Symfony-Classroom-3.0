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
        $__internal_c345a6dfff525f00c0cc82023b2251b277be83194c5fc6d3d6e593f1eb072533 = $this->env->getExtension("native_profiler");
        $__internal_c345a6dfff525f00c0cc82023b2251b277be83194c5fc6d3d6e593f1eb072533->enter($__internal_c345a6dfff525f00c0cc82023b2251b277be83194c5fc6d3d6e593f1eb072533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c345a6dfff525f00c0cc82023b2251b277be83194c5fc6d3d6e593f1eb072533->leave($__internal_c345a6dfff525f00c0cc82023b2251b277be83194c5fc6d3d6e593f1eb072533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c41969e760fd2a5f9c14f9aa6bd1840c3162b58d593bb360f6c4302b7e9a2d24 = $this->env->getExtension("native_profiler");
        $__internal_c41969e760fd2a5f9c14f9aa6bd1840c3162b58d593bb360f6c4302b7e9a2d24->enter($__internal_c41969e760fd2a5f9c14f9aa6bd1840c3162b58d593bb360f6c4302b7e9a2d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c41969e760fd2a5f9c14f9aa6bd1840c3162b58d593bb360f6c4302b7e9a2d24->leave($__internal_c41969e760fd2a5f9c14f9aa6bd1840c3162b58d593bb360f6c4302b7e9a2d24_prof);

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
