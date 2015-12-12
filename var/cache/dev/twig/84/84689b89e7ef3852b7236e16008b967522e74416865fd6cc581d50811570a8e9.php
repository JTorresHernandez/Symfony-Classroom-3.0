<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fc2e4357f2da33b690c0c3a6a74a2bce4d156c5b36891f3930b6d7dfadce11e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_240aa7d8402dcaca03fa7f37bd3a350a9c54b1d1017bbb026352d8122fac2b98 = $this->env->getExtension("native_profiler");
        $__internal_240aa7d8402dcaca03fa7f37bd3a350a9c54b1d1017bbb026352d8122fac2b98->enter($__internal_240aa7d8402dcaca03fa7f37bd3a350a9c54b1d1017bbb026352d8122fac2b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240aa7d8402dcaca03fa7f37bd3a350a9c54b1d1017bbb026352d8122fac2b98->leave($__internal_240aa7d8402dcaca03fa7f37bd3a350a9c54b1d1017bbb026352d8122fac2b98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db3cf6126179333c3b023e77a35bebf61ebd4c7e820a6715aef73d9507abfd7a = $this->env->getExtension("native_profiler");
        $__internal_db3cf6126179333c3b023e77a35bebf61ebd4c7e820a6715aef73d9507abfd7a->enter($__internal_db3cf6126179333c3b023e77a35bebf61ebd4c7e820a6715aef73d9507abfd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_db3cf6126179333c3b023e77a35bebf61ebd4c7e820a6715aef73d9507abfd7a->leave($__internal_db3cf6126179333c3b023e77a35bebf61ebd4c7e820a6715aef73d9507abfd7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
