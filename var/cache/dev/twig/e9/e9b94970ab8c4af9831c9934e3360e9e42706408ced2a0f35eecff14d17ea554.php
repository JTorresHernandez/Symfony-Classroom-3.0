<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_f769c239f2f4d71770e6603b757ec9a594d2627b41b63729c48838b50b0ac9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4312d9e414632fe43e17865fb3255589ef6598bbeb6210645bcb6f43c22c0d61 = $this->env->getExtension("native_profiler");
        $__internal_4312d9e414632fe43e17865fb3255589ef6598bbeb6210645bcb6f43c22c0d61->enter($__internal_4312d9e414632fe43e17865fb3255589ef6598bbeb6210645bcb6f43c22c0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4312d9e414632fe43e17865fb3255589ef6598bbeb6210645bcb6f43c22c0d61->leave($__internal_4312d9e414632fe43e17865fb3255589ef6598bbeb6210645bcb6f43c22c0d61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7977a750ec41e387cc5554258a4f4e131787e23e2ec8e42025fb115fd2f246a6 = $this->env->getExtension("native_profiler");
        $__internal_7977a750ec41e387cc5554258a4f4e131787e23e2ec8e42025fb115fd2f246a6->enter($__internal_7977a750ec41e387cc5554258a4f4e131787e23e2ec8e42025fb115fd2f246a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7977a750ec41e387cc5554258a4f4e131787e23e2ec8e42025fb115fd2f246a6->leave($__internal_7977a750ec41e387cc5554258a4f4e131787e23e2ec8e42025fb115fd2f246a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
