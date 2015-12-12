<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9ac1c8b3336c429d47127b295991c6eb47f6ee0a5333327314fc5d89a6fb8cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_840fd627da94662314db7a6a77b402cb1eee5cf77356230e247e61cc3edc7a2e = $this->env->getExtension("native_profiler");
        $__internal_840fd627da94662314db7a6a77b402cb1eee5cf77356230e247e61cc3edc7a2e->enter($__internal_840fd627da94662314db7a6a77b402cb1eee5cf77356230e247e61cc3edc7a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840fd627da94662314db7a6a77b402cb1eee5cf77356230e247e61cc3edc7a2e->leave($__internal_840fd627da94662314db7a6a77b402cb1eee5cf77356230e247e61cc3edc7a2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c88d6e2c193b7c6cdeaacc9b80f1c0e080e65864375b6697119f3af70a9988b5 = $this->env->getExtension("native_profiler");
        $__internal_c88d6e2c193b7c6cdeaacc9b80f1c0e080e65864375b6697119f3af70a9988b5->enter($__internal_c88d6e2c193b7c6cdeaacc9b80f1c0e080e65864375b6697119f3af70a9988b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c88d6e2c193b7c6cdeaacc9b80f1c0e080e65864375b6697119f3af70a9988b5->leave($__internal_c88d6e2c193b7c6cdeaacc9b80f1c0e080e65864375b6697119f3af70a9988b5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
