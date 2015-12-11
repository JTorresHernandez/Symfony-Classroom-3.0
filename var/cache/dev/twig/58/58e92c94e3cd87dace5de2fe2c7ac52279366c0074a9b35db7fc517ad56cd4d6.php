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
        $__internal_734a840a176b052d49d8f87e3d46611f93b27ccd9d637fe98b92b0c596a50783 = $this->env->getExtension("native_profiler");
        $__internal_734a840a176b052d49d8f87e3d46611f93b27ccd9d637fe98b92b0c596a50783->enter($__internal_734a840a176b052d49d8f87e3d46611f93b27ccd9d637fe98b92b0c596a50783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734a840a176b052d49d8f87e3d46611f93b27ccd9d637fe98b92b0c596a50783->leave($__internal_734a840a176b052d49d8f87e3d46611f93b27ccd9d637fe98b92b0c596a50783_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a329b76290c122b61fc110384bab10852d1eda19ab74f6289f036f2ad7a5fcec = $this->env->getExtension("native_profiler");
        $__internal_a329b76290c122b61fc110384bab10852d1eda19ab74f6289f036f2ad7a5fcec->enter($__internal_a329b76290c122b61fc110384bab10852d1eda19ab74f6289f036f2ad7a5fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a329b76290c122b61fc110384bab10852d1eda19ab74f6289f036f2ad7a5fcec->leave($__internal_a329b76290c122b61fc110384bab10852d1eda19ab74f6289f036f2ad7a5fcec_prof);

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
