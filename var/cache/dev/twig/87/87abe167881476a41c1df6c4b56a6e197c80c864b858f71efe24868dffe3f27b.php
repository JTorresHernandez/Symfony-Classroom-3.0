<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_ee6c01ea43d615eb4c80828c31ec32de00396d06a855c955f6c3681132469f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_31ffa5bd9b428511c7d91c4bde17e421a6e146838c95f4740b796c022e9165b5 = $this->env->getExtension("native_profiler");
        $__internal_31ffa5bd9b428511c7d91c4bde17e421a6e146838c95f4740b796c022e9165b5->enter($__internal_31ffa5bd9b428511c7d91c4bde17e421a6e146838c95f4740b796c022e9165b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ffa5bd9b428511c7d91c4bde17e421a6e146838c95f4740b796c022e9165b5->leave($__internal_31ffa5bd9b428511c7d91c4bde17e421a6e146838c95f4740b796c022e9165b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2325afdf054e89a1774ef12fadbe5b45198e765faac2f17dbff36e388178ce4e = $this->env->getExtension("native_profiler");
        $__internal_2325afdf054e89a1774ef12fadbe5b45198e765faac2f17dbff36e388178ce4e->enter($__internal_2325afdf054e89a1774ef12fadbe5b45198e765faac2f17dbff36e388178ce4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2325afdf054e89a1774ef12fadbe5b45198e765faac2f17dbff36e388178ce4e->leave($__internal_2325afdf054e89a1774ef12fadbe5b45198e765faac2f17dbff36e388178ce4e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
