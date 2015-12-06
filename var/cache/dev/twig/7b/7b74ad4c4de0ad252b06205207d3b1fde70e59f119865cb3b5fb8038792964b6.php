<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a15cc81b82c9c162f6e4fe68314d3592138846ac46514314cd83b93319522dcf extends Twig_Template
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
        $__internal_be401e7994431c24659d1872b04be49dd75bb1c303b35f89a08fb0572f89466c = $this->env->getExtension("native_profiler");
        $__internal_be401e7994431c24659d1872b04be49dd75bb1c303b35f89a08fb0572f89466c->enter($__internal_be401e7994431c24659d1872b04be49dd75bb1c303b35f89a08fb0572f89466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be401e7994431c24659d1872b04be49dd75bb1c303b35f89a08fb0572f89466c->leave($__internal_be401e7994431c24659d1872b04be49dd75bb1c303b35f89a08fb0572f89466c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d51f1c59ea1038e610c7e37791afa7478b5934dcb92491d7248f49d558ddec9 = $this->env->getExtension("native_profiler");
        $__internal_1d51f1c59ea1038e610c7e37791afa7478b5934dcb92491d7248f49d558ddec9->enter($__internal_1d51f1c59ea1038e610c7e37791afa7478b5934dcb92491d7248f49d558ddec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1d51f1c59ea1038e610c7e37791afa7478b5934dcb92491d7248f49d558ddec9->leave($__internal_1d51f1c59ea1038e610c7e37791afa7478b5934dcb92491d7248f49d558ddec9_prof);

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
