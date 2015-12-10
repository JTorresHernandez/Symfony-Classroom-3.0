<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_efe377e7bbe0db56ce5d706f90f232131762ea5ef283bafd46f8b782e866c1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1672464d4e907a7ab89f48d8ee809bd534f58fa344ea46683756ec72653ae685 = $this->env->getExtension("native_profiler");
        $__internal_1672464d4e907a7ab89f48d8ee809bd534f58fa344ea46683756ec72653ae685->enter($__internal_1672464d4e907a7ab89f48d8ee809bd534f58fa344ea46683756ec72653ae685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1672464d4e907a7ab89f48d8ee809bd534f58fa344ea46683756ec72653ae685->leave($__internal_1672464d4e907a7ab89f48d8ee809bd534f58fa344ea46683756ec72653ae685_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7538db293cdef2fb6b538a1eae3484ea98b882cc1ccd6849d9132133124595f = $this->env->getExtension("native_profiler");
        $__internal_d7538db293cdef2fb6b538a1eae3484ea98b882cc1ccd6849d9132133124595f->enter($__internal_d7538db293cdef2fb6b538a1eae3484ea98b882cc1ccd6849d9132133124595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d7538db293cdef2fb6b538a1eae3484ea98b882cc1ccd6849d9132133124595f->leave($__internal_d7538db293cdef2fb6b538a1eae3484ea98b882cc1ccd6849d9132133124595f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
