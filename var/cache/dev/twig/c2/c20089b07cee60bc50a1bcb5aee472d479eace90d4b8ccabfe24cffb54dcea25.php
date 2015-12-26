<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_edf6e47e74d63aec3115c421d1b47c7948abed5f69f32017545dfb68292c05fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_0429103b59cafda6284c7f047b0b6c4d47e8781d88fcfae3384f411d1c50b1ae = $this->env->getExtension("native_profiler");
        $__internal_0429103b59cafda6284c7f047b0b6c4d47e8781d88fcfae3384f411d1c50b1ae->enter($__internal_0429103b59cafda6284c7f047b0b6c4d47e8781d88fcfae3384f411d1c50b1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0429103b59cafda6284c7f047b0b6c4d47e8781d88fcfae3384f411d1c50b1ae->leave($__internal_0429103b59cafda6284c7f047b0b6c4d47e8781d88fcfae3384f411d1c50b1ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fa1a9f2c16a308e5b9e627bd911d4489d61bfc9902d152db47a55b7868964c4 = $this->env->getExtension("native_profiler");
        $__internal_9fa1a9f2c16a308e5b9e627bd911d4489d61bfc9902d152db47a55b7868964c4->enter($__internal_9fa1a9f2c16a308e5b9e627bd911d4489d61bfc9902d152db47a55b7868964c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_9fa1a9f2c16a308e5b9e627bd911d4489d61bfc9902d152db47a55b7868964c4->leave($__internal_9fa1a9f2c16a308e5b9e627bd911d4489d61bfc9902d152db47a55b7868964c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
