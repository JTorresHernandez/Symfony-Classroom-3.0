<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_e4c3e52fa87db7347ce62a25ce06b30cfa1b8deb2edd8f872a33dcdafbf8bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9ddd534a88ea92f407b1ba69aa33f874f439daba6bbbde520b0fd667bb89c1fc = $this->env->getExtension("native_profiler");
        $__internal_9ddd534a88ea92f407b1ba69aa33f874f439daba6bbbde520b0fd667bb89c1fc->enter($__internal_9ddd534a88ea92f407b1ba69aa33f874f439daba6bbbde520b0fd667bb89c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddd534a88ea92f407b1ba69aa33f874f439daba6bbbde520b0fd667bb89c1fc->leave($__internal_9ddd534a88ea92f407b1ba69aa33f874f439daba6bbbde520b0fd667bb89c1fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c34376d90435150db565a784b3dc93360cb3c6cc108c822afa28ac5e9d85b9b = $this->env->getExtension("native_profiler");
        $__internal_9c34376d90435150db565a784b3dc93360cb3c6cc108c822afa28ac5e9d85b9b->enter($__internal_9c34376d90435150db565a784b3dc93360cb3c6cc108c822afa28ac5e9d85b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9c34376d90435150db565a784b3dc93360cb3c6cc108c822afa28ac5e9d85b9b->leave($__internal_9c34376d90435150db565a784b3dc93360cb3c6cc108c822afa28ac5e9d85b9b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
