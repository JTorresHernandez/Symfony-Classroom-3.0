<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_98d7419cc986617ba80337628921ddbd5383ed568112d8a4defee8129f0ff8d4 extends Twig_Template
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
        $__internal_b09badd04c5b6a72e0e22720c6fe07b66265131baf32827515435498b5796c3d = $this->env->getExtension("native_profiler");
        $__internal_b09badd04c5b6a72e0e22720c6fe07b66265131baf32827515435498b5796c3d->enter($__internal_b09badd04c5b6a72e0e22720c6fe07b66265131baf32827515435498b5796c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09badd04c5b6a72e0e22720c6fe07b66265131baf32827515435498b5796c3d->leave($__internal_b09badd04c5b6a72e0e22720c6fe07b66265131baf32827515435498b5796c3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b22d9c5c81ff2dee9154d56babb068aae63c263bc4e9ee3f52f49ff65f663a3 = $this->env->getExtension("native_profiler");
        $__internal_3b22d9c5c81ff2dee9154d56babb068aae63c263bc4e9ee3f52f49ff65f663a3->enter($__internal_3b22d9c5c81ff2dee9154d56babb068aae63c263bc4e9ee3f52f49ff65f663a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3b22d9c5c81ff2dee9154d56babb068aae63c263bc4e9ee3f52f49ff65f663a3->leave($__internal_3b22d9c5c81ff2dee9154d56babb068aae63c263bc4e9ee3f52f49ff65f663a3_prof);

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
