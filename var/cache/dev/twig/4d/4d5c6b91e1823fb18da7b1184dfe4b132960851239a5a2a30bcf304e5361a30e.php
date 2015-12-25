<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_01a06b1f391374784694c3d57c4c0bc35bf6be94705496cf3203c19218032022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ce2da45a34bdf4930eed463d3d5b60836728843ace2b8508807d9deac1f80f1c = $this->env->getExtension("native_profiler");
        $__internal_ce2da45a34bdf4930eed463d3d5b60836728843ace2b8508807d9deac1f80f1c->enter($__internal_ce2da45a34bdf4930eed463d3d5b60836728843ace2b8508807d9deac1f80f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce2da45a34bdf4930eed463d3d5b60836728843ace2b8508807d9deac1f80f1c->leave($__internal_ce2da45a34bdf4930eed463d3d5b60836728843ace2b8508807d9deac1f80f1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df7bad349011ef7fe104f999b277825b7b04a738d9e0a91eca41e6f2e05d06eb = $this->env->getExtension("native_profiler");
        $__internal_df7bad349011ef7fe104f999b277825b7b04a738d9e0a91eca41e6f2e05d06eb->enter($__internal_df7bad349011ef7fe104f999b277825b7b04a738d9e0a91eca41e6f2e05d06eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_df7bad349011ef7fe104f999b277825b7b04a738d9e0a91eca41e6f2e05d06eb->leave($__internal_df7bad349011ef7fe104f999b277825b7b04a738d9e0a91eca41e6f2e05d06eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
