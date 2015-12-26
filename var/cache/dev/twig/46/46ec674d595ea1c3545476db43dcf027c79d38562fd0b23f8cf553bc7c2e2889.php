<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_ff3098955af7d4743f7fbcf40d9e4968e1431f08b24a81e286cf04dd02249448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_53b947d822427281e8faf1fc638f8caad1e85c342b3b45105d70f7ed51f1116e = $this->env->getExtension("native_profiler");
        $__internal_53b947d822427281e8faf1fc638f8caad1e85c342b3b45105d70f7ed51f1116e->enter($__internal_53b947d822427281e8faf1fc638f8caad1e85c342b3b45105d70f7ed51f1116e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b947d822427281e8faf1fc638f8caad1e85c342b3b45105d70f7ed51f1116e->leave($__internal_53b947d822427281e8faf1fc638f8caad1e85c342b3b45105d70f7ed51f1116e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a558ade0f9fb47751277b1ddee9fa843ff567b88a0a5954bda302e8bff207ce = $this->env->getExtension("native_profiler");
        $__internal_6a558ade0f9fb47751277b1ddee9fa843ff567b88a0a5954bda302e8bff207ce->enter($__internal_6a558ade0f9fb47751277b1ddee9fa843ff567b88a0a5954bda302e8bff207ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6a558ade0f9fb47751277b1ddee9fa843ff567b88a0a5954bda302e8bff207ce->leave($__internal_6a558ade0f9fb47751277b1ddee9fa843ff567b88a0a5954bda302e8bff207ce_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
