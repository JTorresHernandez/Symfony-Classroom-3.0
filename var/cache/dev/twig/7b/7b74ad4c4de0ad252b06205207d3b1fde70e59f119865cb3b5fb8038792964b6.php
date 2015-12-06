<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a15cc81b82c9c162f6e4fe68314d3592138846ac46514314cd83b93319522dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5887abafb2db490092e84a4a5d9a53a1ae7b1bdbd67f34f5b08b9a6ecc8f8e6b = $this->env->getExtension("native_profiler");
        $__internal_5887abafb2db490092e84a4a5d9a53a1ae7b1bdbd67f34f5b08b9a6ecc8f8e6b->enter($__internal_5887abafb2db490092e84a4a5d9a53a1ae7b1bdbd67f34f5b08b9a6ecc8f8e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5887abafb2db490092e84a4a5d9a53a1ae7b1bdbd67f34f5b08b9a6ecc8f8e6b->leave($__internal_5887abafb2db490092e84a4a5d9a53a1ae7b1bdbd67f34f5b08b9a6ecc8f8e6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_872393a1df56c0034a56a3ca76b13dcb3c5db1e04fe5c1fee075612f792bbc1d = $this->env->getExtension("native_profiler");
        $__internal_872393a1df56c0034a56a3ca76b13dcb3c5db1e04fe5c1fee075612f792bbc1d->enter($__internal_872393a1df56c0034a56a3ca76b13dcb3c5db1e04fe5c1fee075612f792bbc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_872393a1df56c0034a56a3ca76b13dcb3c5db1e04fe5c1fee075612f792bbc1d->leave($__internal_872393a1df56c0034a56a3ca76b13dcb3c5db1e04fe5c1fee075612f792bbc1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
