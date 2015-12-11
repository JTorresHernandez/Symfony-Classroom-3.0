<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_018a88e1d03e228c414ec7a94de1d32988b79b8bcbc0a1f4773e5fc3f8dff8ea extends Twig_Template
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
        $__internal_2d4d481fc8e579a7c6102f50948933debbbfb11ef21b15df6bd05d28062263b9 = $this->env->getExtension("native_profiler");
        $__internal_2d4d481fc8e579a7c6102f50948933debbbfb11ef21b15df6bd05d28062263b9->enter($__internal_2d4d481fc8e579a7c6102f50948933debbbfb11ef21b15df6bd05d28062263b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d4d481fc8e579a7c6102f50948933debbbfb11ef21b15df6bd05d28062263b9->leave($__internal_2d4d481fc8e579a7c6102f50948933debbbfb11ef21b15df6bd05d28062263b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db5cec239e79607e8589fc34a507d087743999c128fa05a6ce0ad315e352b62e = $this->env->getExtension("native_profiler");
        $__internal_db5cec239e79607e8589fc34a507d087743999c128fa05a6ce0ad315e352b62e->enter($__internal_db5cec239e79607e8589fc34a507d087743999c128fa05a6ce0ad315e352b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_db5cec239e79607e8589fc34a507d087743999c128fa05a6ce0ad315e352b62e->leave($__internal_db5cec239e79607e8589fc34a507d087743999c128fa05a6ce0ad315e352b62e_prof);

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
