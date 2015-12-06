<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd5ec6d27d1066beef227dbda9afa7902de45ee5991ece7ec3a03ddcbc97de61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f24bd2e2e79b4a4e1fb31d7acbfe6e9d59b59ca89ea5f9af879dae094ac7ec68 = $this->env->getExtension("native_profiler");
        $__internal_f24bd2e2e79b4a4e1fb31d7acbfe6e9d59b59ca89ea5f9af879dae094ac7ec68->enter($__internal_f24bd2e2e79b4a4e1fb31d7acbfe6e9d59b59ca89ea5f9af879dae094ac7ec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24bd2e2e79b4a4e1fb31d7acbfe6e9d59b59ca89ea5f9af879dae094ac7ec68->leave($__internal_f24bd2e2e79b4a4e1fb31d7acbfe6e9d59b59ca89ea5f9af879dae094ac7ec68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a879bc7f626acae90b7832a66b120bbc6853d35ac49ae95289a26e42cb4d1227 = $this->env->getExtension("native_profiler");
        $__internal_a879bc7f626acae90b7832a66b120bbc6853d35ac49ae95289a26e42cb4d1227->enter($__internal_a879bc7f626acae90b7832a66b120bbc6853d35ac49ae95289a26e42cb4d1227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a879bc7f626acae90b7832a66b120bbc6853d35ac49ae95289a26e42cb4d1227->leave($__internal_a879bc7f626acae90b7832a66b120bbc6853d35ac49ae95289a26e42cb4d1227_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
