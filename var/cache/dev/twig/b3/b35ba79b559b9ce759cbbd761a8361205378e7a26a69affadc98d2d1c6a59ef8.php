<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_459f03f82daf09b38bfff92df5b85c34fffca9020178dc6c44bcd5ea635f0ad9 = $this->env->getExtension("native_profiler");
        $__internal_459f03f82daf09b38bfff92df5b85c34fffca9020178dc6c44bcd5ea635f0ad9->enter($__internal_459f03f82daf09b38bfff92df5b85c34fffca9020178dc6c44bcd5ea635f0ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459f03f82daf09b38bfff92df5b85c34fffca9020178dc6c44bcd5ea635f0ad9->leave($__internal_459f03f82daf09b38bfff92df5b85c34fffca9020178dc6c44bcd5ea635f0ad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_516a9e5256171d44c178ff6cc3c405c8e1606dfd0fe97c0e9a5a9393c3cb6f0d = $this->env->getExtension("native_profiler");
        $__internal_516a9e5256171d44c178ff6cc3c405c8e1606dfd0fe97c0e9a5a9393c3cb6f0d->enter($__internal_516a9e5256171d44c178ff6cc3c405c8e1606dfd0fe97c0e9a5a9393c3cb6f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_516a9e5256171d44c178ff6cc3c405c8e1606dfd0fe97c0e9a5a9393c3cb6f0d->leave($__internal_516a9e5256171d44c178ff6cc3c405c8e1606dfd0fe97c0e9a5a9393c3cb6f0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
