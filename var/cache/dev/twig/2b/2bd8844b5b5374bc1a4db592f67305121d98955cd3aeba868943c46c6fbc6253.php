<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_be1aafc60b13d6a479813600509f58ea55b00cb63c7b4a435824ffceb3603a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_7d1ccd9d6904a6244caf2de3ea09bad78992ad110867a043708a98e1e9a65cb9 = $this->env->getExtension("native_profiler");
        $__internal_7d1ccd9d6904a6244caf2de3ea09bad78992ad110867a043708a98e1e9a65cb9->enter($__internal_7d1ccd9d6904a6244caf2de3ea09bad78992ad110867a043708a98e1e9a65cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1ccd9d6904a6244caf2de3ea09bad78992ad110867a043708a98e1e9a65cb9->leave($__internal_7d1ccd9d6904a6244caf2de3ea09bad78992ad110867a043708a98e1e9a65cb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b77d80cc63d6f215839c1c6c2bbf41c1917a7549aeb771d6fe7eada9e3551e32 = $this->env->getExtension("native_profiler");
        $__internal_b77d80cc63d6f215839c1c6c2bbf41c1917a7549aeb771d6fe7eada9e3551e32->enter($__internal_b77d80cc63d6f215839c1c6c2bbf41c1917a7549aeb771d6fe7eada9e3551e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b77d80cc63d6f215839c1c6c2bbf41c1917a7549aeb771d6fe7eada9e3551e32->leave($__internal_b77d80cc63d6f215839c1c6c2bbf41c1917a7549aeb771d6fe7eada9e3551e32_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
