<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_04c2c131a5abbf59c98ad8f6124a20700662f44d8469cd01c604e03644c148ef extends Twig_Template
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
        $__internal_ba5cfc1248f5fa4bc430285e11c18f4e07f10d91df3769403b135b1ecf183ce9 = $this->env->getExtension("native_profiler");
        $__internal_ba5cfc1248f5fa4bc430285e11c18f4e07f10d91df3769403b135b1ecf183ce9->enter($__internal_ba5cfc1248f5fa4bc430285e11c18f4e07f10d91df3769403b135b1ecf183ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5cfc1248f5fa4bc430285e11c18f4e07f10d91df3769403b135b1ecf183ce9->leave($__internal_ba5cfc1248f5fa4bc430285e11c18f4e07f10d91df3769403b135b1ecf183ce9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a75591c121e1fad9b5f5edf33faff4586e374879db7b2728cd723271f6474fe = $this->env->getExtension("native_profiler");
        $__internal_3a75591c121e1fad9b5f5edf33faff4586e374879db7b2728cd723271f6474fe->enter($__internal_3a75591c121e1fad9b5f5edf33faff4586e374879db7b2728cd723271f6474fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3a75591c121e1fad9b5f5edf33faff4586e374879db7b2728cd723271f6474fe->leave($__internal_3a75591c121e1fad9b5f5edf33faff4586e374879db7b2728cd723271f6474fe_prof);

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
