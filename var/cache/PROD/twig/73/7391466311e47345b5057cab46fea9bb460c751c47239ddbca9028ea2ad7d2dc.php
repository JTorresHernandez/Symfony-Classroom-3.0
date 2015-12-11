<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_92bd1ffc05f70b33aab3f60abe45b4d0b6f9fcf320474dd8bbfa25ec2c22a371 extends Twig_Template
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
        $__internal_cf3e91b984a8a007752ccb4791047ed7ecfab6c1ed418a5fc747882127f905b1 = $this->env->getExtension("native_profiler");
        $__internal_cf3e91b984a8a007752ccb4791047ed7ecfab6c1ed418a5fc747882127f905b1->enter($__internal_cf3e91b984a8a007752ccb4791047ed7ecfab6c1ed418a5fc747882127f905b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3e91b984a8a007752ccb4791047ed7ecfab6c1ed418a5fc747882127f905b1->leave($__internal_cf3e91b984a8a007752ccb4791047ed7ecfab6c1ed418a5fc747882127f905b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e87ebca252721d11b73e2089fbea99572158cde21676c5580fd8eab08db3e2a7 = $this->env->getExtension("native_profiler");
        $__internal_e87ebca252721d11b73e2089fbea99572158cde21676c5580fd8eab08db3e2a7->enter($__internal_e87ebca252721d11b73e2089fbea99572158cde21676c5580fd8eab08db3e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e87ebca252721d11b73e2089fbea99572158cde21676c5580fd8eab08db3e2a7->leave($__internal_e87ebca252721d11b73e2089fbea99572158cde21676c5580fd8eab08db3e2a7_prof);

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
