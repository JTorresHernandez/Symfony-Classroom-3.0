<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_70943241f8fac559eb9706986f3fa87b33c4b70519af059a9c928d74cb5e2716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_ef5c7225256248f471a0dd048c3108d42f22c0017c36410b31b7860c526e708c = $this->env->getExtension("native_profiler");
        $__internal_ef5c7225256248f471a0dd048c3108d42f22c0017c36410b31b7860c526e708c->enter($__internal_ef5c7225256248f471a0dd048c3108d42f22c0017c36410b31b7860c526e708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5c7225256248f471a0dd048c3108d42f22c0017c36410b31b7860c526e708c->leave($__internal_ef5c7225256248f471a0dd048c3108d42f22c0017c36410b31b7860c526e708c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f0ef680e0a1ed5a2f04f408159a59c30e3e4aa7f7e5d0b516a4db92a0900ec9 = $this->env->getExtension("native_profiler");
        $__internal_4f0ef680e0a1ed5a2f04f408159a59c30e3e4aa7f7e5d0b516a4db92a0900ec9->enter($__internal_4f0ef680e0a1ed5a2f04f408159a59c30e3e4aa7f7e5d0b516a4db92a0900ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4f0ef680e0a1ed5a2f04f408159a59c30e3e4aa7f7e5d0b516a4db92a0900ec9->leave($__internal_4f0ef680e0a1ed5a2f04f408159a59c30e3e4aa7f7e5d0b516a4db92a0900ec9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
