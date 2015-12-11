<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9ac1c8b3336c429d47127b295991c6eb47f6ee0a5333327314fc5d89a6fb8cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0e8031cdce34f4ce88c211166c1593360453c8667a625ba9cf5b0edaaebb799e = $this->env->getExtension("native_profiler");
        $__internal_0e8031cdce34f4ce88c211166c1593360453c8667a625ba9cf5b0edaaebb799e->enter($__internal_0e8031cdce34f4ce88c211166c1593360453c8667a625ba9cf5b0edaaebb799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8031cdce34f4ce88c211166c1593360453c8667a625ba9cf5b0edaaebb799e->leave($__internal_0e8031cdce34f4ce88c211166c1593360453c8667a625ba9cf5b0edaaebb799e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b753dc368b180aadc23c4aa260ddb905933fefd0999ac1e41c96f2bd029e0b20 = $this->env->getExtension("native_profiler");
        $__internal_b753dc368b180aadc23c4aa260ddb905933fefd0999ac1e41c96f2bd029e0b20->enter($__internal_b753dc368b180aadc23c4aa260ddb905933fefd0999ac1e41c96f2bd029e0b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b753dc368b180aadc23c4aa260ddb905933fefd0999ac1e41c96f2bd029e0b20->leave($__internal_b753dc368b180aadc23c4aa260ddb905933fefd0999ac1e41c96f2bd029e0b20_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
