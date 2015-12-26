<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d4a36322318a21fd6a136c0af6ae7c0002069ecbd28a8f77842337c48abbc46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fce98a80c61b2abe902c6e4c6392967b845be97b0dcdae10fcfeb70d92b6048c = $this->env->getExtension("native_profiler");
        $__internal_fce98a80c61b2abe902c6e4c6392967b845be97b0dcdae10fcfeb70d92b6048c->enter($__internal_fce98a80c61b2abe902c6e4c6392967b845be97b0dcdae10fcfeb70d92b6048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce98a80c61b2abe902c6e4c6392967b845be97b0dcdae10fcfeb70d92b6048c->leave($__internal_fce98a80c61b2abe902c6e4c6392967b845be97b0dcdae10fcfeb70d92b6048c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a3f62f4327ee7c7574d99e70d28c51e6cbf6ea0239103ea63cd9fc7a93cb01b = $this->env->getExtension("native_profiler");
        $__internal_9a3f62f4327ee7c7574d99e70d28c51e6cbf6ea0239103ea63cd9fc7a93cb01b->enter($__internal_9a3f62f4327ee7c7574d99e70d28c51e6cbf6ea0239103ea63cd9fc7a93cb01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_9a3f62f4327ee7c7574d99e70d28c51e6cbf6ea0239103ea63cd9fc7a93cb01b->leave($__internal_9a3f62f4327ee7c7574d99e70d28c51e6cbf6ea0239103ea63cd9fc7a93cb01b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
