<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_5e5dee62fc22f835484d0c5408d75dc3bee4b104dedd4234c08f40c65639ddc6 extends Twig_Template
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
        $__internal_02746d30f096a43415d6f506f0af051087d2463e877c8df14e78ee281cfa375a = $this->env->getExtension("native_profiler");
        $__internal_02746d30f096a43415d6f506f0af051087d2463e877c8df14e78ee281cfa375a->enter($__internal_02746d30f096a43415d6f506f0af051087d2463e877c8df14e78ee281cfa375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02746d30f096a43415d6f506f0af051087d2463e877c8df14e78ee281cfa375a->leave($__internal_02746d30f096a43415d6f506f0af051087d2463e877c8df14e78ee281cfa375a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d001f7e2b1c0ebcc06e50c0b1e9e9922e62a3aa8a5f6b8ad57d2f1aced328678 = $this->env->getExtension("native_profiler");
        $__internal_d001f7e2b1c0ebcc06e50c0b1e9e9922e62a3aa8a5f6b8ad57d2f1aced328678->enter($__internal_d001f7e2b1c0ebcc06e50c0b1e9e9922e62a3aa8a5f6b8ad57d2f1aced328678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d001f7e2b1c0ebcc06e50c0b1e9e9922e62a3aa8a5f6b8ad57d2f1aced328678->leave($__internal_d001f7e2b1c0ebcc06e50c0b1e9e9922e62a3aa8a5f6b8ad57d2f1aced328678_prof);

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
