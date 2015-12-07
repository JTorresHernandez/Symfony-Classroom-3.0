<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d79c253f3c23f3719d363df481de735049819d769676ff09f7b650ccfdb6c857 extends Twig_Template
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
        $__internal_797274f27b73b49068e57a8051eb1bc25f6f2ac8ae72351611ec68d8b9a8948a = $this->env->getExtension("native_profiler");
        $__internal_797274f27b73b49068e57a8051eb1bc25f6f2ac8ae72351611ec68d8b9a8948a->enter($__internal_797274f27b73b49068e57a8051eb1bc25f6f2ac8ae72351611ec68d8b9a8948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797274f27b73b49068e57a8051eb1bc25f6f2ac8ae72351611ec68d8b9a8948a->leave($__internal_797274f27b73b49068e57a8051eb1bc25f6f2ac8ae72351611ec68d8b9a8948a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27f95e4a080e79b1e85deff66a55d210e336c59de79838c658f7bb390d5982f4 = $this->env->getExtension("native_profiler");
        $__internal_27f95e4a080e79b1e85deff66a55d210e336c59de79838c658f7bb390d5982f4->enter($__internal_27f95e4a080e79b1e85deff66a55d210e336c59de79838c658f7bb390d5982f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_27f95e4a080e79b1e85deff66a55d210e336c59de79838c658f7bb390d5982f4->leave($__internal_27f95e4a080e79b1e85deff66a55d210e336c59de79838c658f7bb390d5982f4_prof);

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
