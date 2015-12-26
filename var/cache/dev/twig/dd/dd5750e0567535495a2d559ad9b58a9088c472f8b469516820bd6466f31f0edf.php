<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_de731c58b7082e1533f25684989f1c3130deada42f471ba8d77fb4b548649d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_5f6198b0a12b81ff3516b669af3c91df8f4eb22edd72f3a4b780fac03c819226 = $this->env->getExtension("native_profiler");
        $__internal_5f6198b0a12b81ff3516b669af3c91df8f4eb22edd72f3a4b780fac03c819226->enter($__internal_5f6198b0a12b81ff3516b669af3c91df8f4eb22edd72f3a4b780fac03c819226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6198b0a12b81ff3516b669af3c91df8f4eb22edd72f3a4b780fac03c819226->leave($__internal_5f6198b0a12b81ff3516b669af3c91df8f4eb22edd72f3a4b780fac03c819226_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_694a3f5a61196204c903d2235c9e6d53241c2c6769f699f4ee75493de3b557b8 = $this->env->getExtension("native_profiler");
        $__internal_694a3f5a61196204c903d2235c9e6d53241c2c6769f699f4ee75493de3b557b8->enter($__internal_694a3f5a61196204c903d2235c9e6d53241c2c6769f699f4ee75493de3b557b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_694a3f5a61196204c903d2235c9e6d53241c2c6769f699f4ee75493de3b557b8->leave($__internal_694a3f5a61196204c903d2235c9e6d53241c2c6769f699f4ee75493de3b557b8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
