<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9c781432a7688a695c3ad2f62a7bdfed798e5a372b44b2bd67f40628744d5a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_02d8f143f77d8a6f956dbaf2c378ca8a0ddf00a4ebbdd90b8012adb419f0c418 = $this->env->getExtension("native_profiler");
        $__internal_02d8f143f77d8a6f956dbaf2c378ca8a0ddf00a4ebbdd90b8012adb419f0c418->enter($__internal_02d8f143f77d8a6f956dbaf2c378ca8a0ddf00a4ebbdd90b8012adb419f0c418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02d8f143f77d8a6f956dbaf2c378ca8a0ddf00a4ebbdd90b8012adb419f0c418->leave($__internal_02d8f143f77d8a6f956dbaf2c378ca8a0ddf00a4ebbdd90b8012adb419f0c418_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_550ceedd61c4dc5fbcf0234c991ac35bdc825fd776c41fd05123637e143e7dcf = $this->env->getExtension("native_profiler");
        $__internal_550ceedd61c4dc5fbcf0234c991ac35bdc825fd776c41fd05123637e143e7dcf->enter($__internal_550ceedd61c4dc5fbcf0234c991ac35bdc825fd776c41fd05123637e143e7dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_550ceedd61c4dc5fbcf0234c991ac35bdc825fd776c41fd05123637e143e7dcf->leave($__internal_550ceedd61c4dc5fbcf0234c991ac35bdc825fd776c41fd05123637e143e7dcf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
