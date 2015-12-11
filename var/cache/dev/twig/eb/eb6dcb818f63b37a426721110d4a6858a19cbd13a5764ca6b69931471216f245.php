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
        $__internal_52524b3c2f7bf6d87311a7570145227cd8b3cba38a9b9bd6de646e57ee742c27 = $this->env->getExtension("native_profiler");
        $__internal_52524b3c2f7bf6d87311a7570145227cd8b3cba38a9b9bd6de646e57ee742c27->enter($__internal_52524b3c2f7bf6d87311a7570145227cd8b3cba38a9b9bd6de646e57ee742c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52524b3c2f7bf6d87311a7570145227cd8b3cba38a9b9bd6de646e57ee742c27->leave($__internal_52524b3c2f7bf6d87311a7570145227cd8b3cba38a9b9bd6de646e57ee742c27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_575162d7fc4875b3a888b3d0531af7663666e310cc8462fc4b234675fc251688 = $this->env->getExtension("native_profiler");
        $__internal_575162d7fc4875b3a888b3d0531af7663666e310cc8462fc4b234675fc251688->enter($__internal_575162d7fc4875b3a888b3d0531af7663666e310cc8462fc4b234675fc251688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_575162d7fc4875b3a888b3d0531af7663666e310cc8462fc4b234675fc251688->leave($__internal_575162d7fc4875b3a888b3d0531af7663666e310cc8462fc4b234675fc251688_prof);

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
