<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fd65bc2ff40e07307c443e0b633da1dcc7d5448d77125cc31da67dac8d4ed84f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1777140eb7eff0445205f50aba5b20b6288755551000a6b99bc46766f9b5d63e = $this->env->getExtension("native_profiler");
        $__internal_1777140eb7eff0445205f50aba5b20b6288755551000a6b99bc46766f9b5d63e->enter($__internal_1777140eb7eff0445205f50aba5b20b6288755551000a6b99bc46766f9b5d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1777140eb7eff0445205f50aba5b20b6288755551000a6b99bc46766f9b5d63e->leave($__internal_1777140eb7eff0445205f50aba5b20b6288755551000a6b99bc46766f9b5d63e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a49c13e9934ac9bab8e60cce0570311e0f28985ce1455e5daa5c3336a0c84c3 = $this->env->getExtension("native_profiler");
        $__internal_6a49c13e9934ac9bab8e60cce0570311e0f28985ce1455e5daa5c3336a0c84c3->enter($__internal_6a49c13e9934ac9bab8e60cce0570311e0f28985ce1455e5daa5c3336a0c84c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6a49c13e9934ac9bab8e60cce0570311e0f28985ce1455e5daa5c3336a0c84c3->leave($__internal_6a49c13e9934ac9bab8e60cce0570311e0f28985ce1455e5daa5c3336a0c84c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
