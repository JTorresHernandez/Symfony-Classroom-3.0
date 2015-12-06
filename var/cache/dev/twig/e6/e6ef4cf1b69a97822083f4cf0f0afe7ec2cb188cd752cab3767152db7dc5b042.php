<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bbc573819b1d1824a53586a3f01a662d870d2e7a9fb31eb73158d89a38f43fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f68040d13e0a9498c08049636ed10992bea86c004503304fb25447b19658bd97 = $this->env->getExtension("native_profiler");
        $__internal_f68040d13e0a9498c08049636ed10992bea86c004503304fb25447b19658bd97->enter($__internal_f68040d13e0a9498c08049636ed10992bea86c004503304fb25447b19658bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68040d13e0a9498c08049636ed10992bea86c004503304fb25447b19658bd97->leave($__internal_f68040d13e0a9498c08049636ed10992bea86c004503304fb25447b19658bd97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38cbada877a0c8178381c14bc842f87fd565f06bb86101fde50749e89fb343b1 = $this->env->getExtension("native_profiler");
        $__internal_38cbada877a0c8178381c14bc842f87fd565f06bb86101fde50749e89fb343b1->enter($__internal_38cbada877a0c8178381c14bc842f87fd565f06bb86101fde50749e89fb343b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_38cbada877a0c8178381c14bc842f87fd565f06bb86101fde50749e89fb343b1->leave($__internal_38cbada877a0c8178381c14bc842f87fd565f06bb86101fde50749e89fb343b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
