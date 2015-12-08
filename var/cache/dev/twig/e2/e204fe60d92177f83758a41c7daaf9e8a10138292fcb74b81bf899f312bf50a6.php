<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_26dd77250e443f2911ab0c9820b23cf0f1c94d7cd62f7e50940ba77346a3b8cd = $this->env->getExtension("native_profiler");
        $__internal_26dd77250e443f2911ab0c9820b23cf0f1c94d7cd62f7e50940ba77346a3b8cd->enter($__internal_26dd77250e443f2911ab0c9820b23cf0f1c94d7cd62f7e50940ba77346a3b8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26dd77250e443f2911ab0c9820b23cf0f1c94d7cd62f7e50940ba77346a3b8cd->leave($__internal_26dd77250e443f2911ab0c9820b23cf0f1c94d7cd62f7e50940ba77346a3b8cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c74369d0d0cd70108525ade29098fcaca0ce488018247b03add00b59917660ef = $this->env->getExtension("native_profiler");
        $__internal_c74369d0d0cd70108525ade29098fcaca0ce488018247b03add00b59917660ef->enter($__internal_c74369d0d0cd70108525ade29098fcaca0ce488018247b03add00b59917660ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c74369d0d0cd70108525ade29098fcaca0ce488018247b03add00b59917660ef->leave($__internal_c74369d0d0cd70108525ade29098fcaca0ce488018247b03add00b59917660ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
