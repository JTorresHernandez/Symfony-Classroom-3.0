<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_fca8d85324ff400692f8bcc215480626379e877f505f0116c71fde0b7ef5fcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_48001bd49d317590e6d0837137bd023c9360b30bc6187376376a110a580e6741 = $this->env->getExtension("native_profiler");
        $__internal_48001bd49d317590e6d0837137bd023c9360b30bc6187376376a110a580e6741->enter($__internal_48001bd49d317590e6d0837137bd023c9360b30bc6187376376a110a580e6741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48001bd49d317590e6d0837137bd023c9360b30bc6187376376a110a580e6741->leave($__internal_48001bd49d317590e6d0837137bd023c9360b30bc6187376376a110a580e6741_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2f3d2c3e3c96e3e9437ce11a6e163018bca8be1c4210323237a61e554391631 = $this->env->getExtension("native_profiler");
        $__internal_e2f3d2c3e3c96e3e9437ce11a6e163018bca8be1c4210323237a61e554391631->enter($__internal_e2f3d2c3e3c96e3e9437ce11a6e163018bca8be1c4210323237a61e554391631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e2f3d2c3e3c96e3e9437ce11a6e163018bca8be1c4210323237a61e554391631->leave($__internal_e2f3d2c3e3c96e3e9437ce11a6e163018bca8be1c4210323237a61e554391631_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
