<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_29876b240291e0a5cdb2addf008e3cef7b21aa79a7a8bd0839f99f4738e1e1ef extends Twig_Template
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
        $__internal_bb1f7e822797ce2330d54be2aedd7502ce69e68b9ceedf10c6a5d4c606be48b1 = $this->env->getExtension("native_profiler");
        $__internal_bb1f7e822797ce2330d54be2aedd7502ce69e68b9ceedf10c6a5d4c606be48b1->enter($__internal_bb1f7e822797ce2330d54be2aedd7502ce69e68b9ceedf10c6a5d4c606be48b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1f7e822797ce2330d54be2aedd7502ce69e68b9ceedf10c6a5d4c606be48b1->leave($__internal_bb1f7e822797ce2330d54be2aedd7502ce69e68b9ceedf10c6a5d4c606be48b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6620db9db4d9103a0061f20a5656e56206782f77fe17ff08b252e5da3377f00d = $this->env->getExtension("native_profiler");
        $__internal_6620db9db4d9103a0061f20a5656e56206782f77fe17ff08b252e5da3377f00d->enter($__internal_6620db9db4d9103a0061f20a5656e56206782f77fe17ff08b252e5da3377f00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6620db9db4d9103a0061f20a5656e56206782f77fe17ff08b252e5da3377f00d->leave($__internal_6620db9db4d9103a0061f20a5656e56206782f77fe17ff08b252e5da3377f00d_prof);

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
