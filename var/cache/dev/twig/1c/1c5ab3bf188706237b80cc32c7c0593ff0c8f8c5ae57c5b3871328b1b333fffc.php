<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2082557c6773e9a9f804de2df946be451e688079fd2ec4f65b966329b922d5b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c3e5958cd1bea90fc5b773eca5709ed47e3d9cb9afaefc4e7e2bec855d955897 = $this->env->getExtension("native_profiler");
        $__internal_c3e5958cd1bea90fc5b773eca5709ed47e3d9cb9afaefc4e7e2bec855d955897->enter($__internal_c3e5958cd1bea90fc5b773eca5709ed47e3d9cb9afaefc4e7e2bec855d955897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e5958cd1bea90fc5b773eca5709ed47e3d9cb9afaefc4e7e2bec855d955897->leave($__internal_c3e5958cd1bea90fc5b773eca5709ed47e3d9cb9afaefc4e7e2bec855d955897_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_456763a9d68bf250d23f6ed9d1ae500758a68003b2df355057d3c8d831069a3d = $this->env->getExtension("native_profiler");
        $__internal_456763a9d68bf250d23f6ed9d1ae500758a68003b2df355057d3c8d831069a3d->enter($__internal_456763a9d68bf250d23f6ed9d1ae500758a68003b2df355057d3c8d831069a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_456763a9d68bf250d23f6ed9d1ae500758a68003b2df355057d3c8d831069a3d->leave($__internal_456763a9d68bf250d23f6ed9d1ae500758a68003b2df355057d3c8d831069a3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
