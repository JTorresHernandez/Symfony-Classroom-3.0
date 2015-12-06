<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_799f9b38a8ed32863d6fdbdd98d8922ea4f3728caaf24e4874c39ae0f871f660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ee134a19ea2fa756e02abd924a9dd43136759bf33b55dba7b855df1fbe2a34d5 = $this->env->getExtension("native_profiler");
        $__internal_ee134a19ea2fa756e02abd924a9dd43136759bf33b55dba7b855df1fbe2a34d5->enter($__internal_ee134a19ea2fa756e02abd924a9dd43136759bf33b55dba7b855df1fbe2a34d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee134a19ea2fa756e02abd924a9dd43136759bf33b55dba7b855df1fbe2a34d5->leave($__internal_ee134a19ea2fa756e02abd924a9dd43136759bf33b55dba7b855df1fbe2a34d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d26f99c304878bb2e922e80fc4fb6a92c63d0fdb024d078b0af7ab277650ba59 = $this->env->getExtension("native_profiler");
        $__internal_d26f99c304878bb2e922e80fc4fb6a92c63d0fdb024d078b0af7ab277650ba59->enter($__internal_d26f99c304878bb2e922e80fc4fb6a92c63d0fdb024d078b0af7ab277650ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d26f99c304878bb2e922e80fc4fb6a92c63d0fdb024d078b0af7ab277650ba59->leave($__internal_d26f99c304878bb2e922e80fc4fb6a92c63d0fdb024d078b0af7ab277650ba59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
