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
        $__internal_fb3d9ed319572d46351f37773bd5726e679597ffaef149eb83cdaea938d4958f = $this->env->getExtension("native_profiler");
        $__internal_fb3d9ed319572d46351f37773bd5726e679597ffaef149eb83cdaea938d4958f->enter($__internal_fb3d9ed319572d46351f37773bd5726e679597ffaef149eb83cdaea938d4958f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3d9ed319572d46351f37773bd5726e679597ffaef149eb83cdaea938d4958f->leave($__internal_fb3d9ed319572d46351f37773bd5726e679597ffaef149eb83cdaea938d4958f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bba6f1a39ed38b913ead6fadbe125c5c51de6f125ff0667dbab3fedecab92a4 = $this->env->getExtension("native_profiler");
        $__internal_6bba6f1a39ed38b913ead6fadbe125c5c51de6f125ff0667dbab3fedecab92a4->enter($__internal_6bba6f1a39ed38b913ead6fadbe125c5c51de6f125ff0667dbab3fedecab92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6bba6f1a39ed38b913ead6fadbe125c5c51de6f125ff0667dbab3fedecab92a4->leave($__internal_6bba6f1a39ed38b913ead6fadbe125c5c51de6f125ff0667dbab3fedecab92a4_prof);

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
