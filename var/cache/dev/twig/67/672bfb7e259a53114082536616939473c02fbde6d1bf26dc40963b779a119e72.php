<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_abad6b9f6b211fa379c36ac15575c4498d8b2ba2578c2fdfbab94e7698b0afb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8b61883edf88a3ee8ab9e75f95e43ba5e63f2c71525b2341dd5024afff6414f9 = $this->env->getExtension("native_profiler");
        $__internal_8b61883edf88a3ee8ab9e75f95e43ba5e63f2c71525b2341dd5024afff6414f9->enter($__internal_8b61883edf88a3ee8ab9e75f95e43ba5e63f2c71525b2341dd5024afff6414f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b61883edf88a3ee8ab9e75f95e43ba5e63f2c71525b2341dd5024afff6414f9->leave($__internal_8b61883edf88a3ee8ab9e75f95e43ba5e63f2c71525b2341dd5024afff6414f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4f58b88c7407d0cf54465253b052e752e3e34fff3b6bce6792b4e323f98282a = $this->env->getExtension("native_profiler");
        $__internal_a4f58b88c7407d0cf54465253b052e752e3e34fff3b6bce6792b4e323f98282a->enter($__internal_a4f58b88c7407d0cf54465253b052e752e3e34fff3b6bce6792b4e323f98282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a4f58b88c7407d0cf54465253b052e752e3e34fff3b6bce6792b4e323f98282a->leave($__internal_a4f58b88c7407d0cf54465253b052e752e3e34fff3b6bce6792b4e323f98282a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
