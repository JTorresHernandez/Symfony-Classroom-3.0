<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fd14af311dd7534beb8c415706b4cbe747a9447c97a2cd30d7597a971854e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_9b799161d99b0d732900ffbaa3fed95784a8d4615db3960b95827164e5d69e9c = $this->env->getExtension("native_profiler");
        $__internal_9b799161d99b0d732900ffbaa3fed95784a8d4615db3960b95827164e5d69e9c->enter($__internal_9b799161d99b0d732900ffbaa3fed95784a8d4615db3960b95827164e5d69e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b799161d99b0d732900ffbaa3fed95784a8d4615db3960b95827164e5d69e9c->leave($__internal_9b799161d99b0d732900ffbaa3fed95784a8d4615db3960b95827164e5d69e9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4da79a29a600dd2c75fb3c92f77095ac693b5346bc6d71ed6d1fc5366f7eb6ee = $this->env->getExtension("native_profiler");
        $__internal_4da79a29a600dd2c75fb3c92f77095ac693b5346bc6d71ed6d1fc5366f7eb6ee->enter($__internal_4da79a29a600dd2c75fb3c92f77095ac693b5346bc6d71ed6d1fc5366f7eb6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4da79a29a600dd2c75fb3c92f77095ac693b5346bc6d71ed6d1fc5366f7eb6ee->leave($__internal_4da79a29a600dd2c75fb3c92f77095ac693b5346bc6d71ed6d1fc5366f7eb6ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
