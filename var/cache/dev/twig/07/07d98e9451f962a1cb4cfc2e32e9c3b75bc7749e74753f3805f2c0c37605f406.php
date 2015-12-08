<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_fca8d85324ff400692f8bcc215480626379e877f505f0116c71fde0b7ef5fcc0 extends Twig_Template
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
        $__internal_9afdef11920b473e9c74ac7a61f9090659ff62c3a2442ce01deaa0b007780fd3 = $this->env->getExtension("native_profiler");
        $__internal_9afdef11920b473e9c74ac7a61f9090659ff62c3a2442ce01deaa0b007780fd3->enter($__internal_9afdef11920b473e9c74ac7a61f9090659ff62c3a2442ce01deaa0b007780fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9afdef11920b473e9c74ac7a61f9090659ff62c3a2442ce01deaa0b007780fd3->leave($__internal_9afdef11920b473e9c74ac7a61f9090659ff62c3a2442ce01deaa0b007780fd3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edb0e533fc84a6ede622b6367833bfb473005cbf80990b7425cca28fb2e333df = $this->env->getExtension("native_profiler");
        $__internal_edb0e533fc84a6ede622b6367833bfb473005cbf80990b7425cca28fb2e333df->enter($__internal_edb0e533fc84a6ede622b6367833bfb473005cbf80990b7425cca28fb2e333df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_edb0e533fc84a6ede622b6367833bfb473005cbf80990b7425cca28fb2e333df->leave($__internal_edb0e533fc84a6ede622b6367833bfb473005cbf80990b7425cca28fb2e333df_prof);

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
