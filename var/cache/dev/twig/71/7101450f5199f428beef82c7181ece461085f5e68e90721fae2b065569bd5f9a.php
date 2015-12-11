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
        $__internal_c6bb63c38fd955c722355d712656fb2d6dbe85ced3ee085470e011e6a06dfbe9 = $this->env->getExtension("native_profiler");
        $__internal_c6bb63c38fd955c722355d712656fb2d6dbe85ced3ee085470e011e6a06dfbe9->enter($__internal_c6bb63c38fd955c722355d712656fb2d6dbe85ced3ee085470e011e6a06dfbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6bb63c38fd955c722355d712656fb2d6dbe85ced3ee085470e011e6a06dfbe9->leave($__internal_c6bb63c38fd955c722355d712656fb2d6dbe85ced3ee085470e011e6a06dfbe9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3961a3d434caeff5ddde96f94f33dcdf80191af91c032995786dab98c74e48bf = $this->env->getExtension("native_profiler");
        $__internal_3961a3d434caeff5ddde96f94f33dcdf80191af91c032995786dab98c74e48bf->enter($__internal_3961a3d434caeff5ddde96f94f33dcdf80191af91c032995786dab98c74e48bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3961a3d434caeff5ddde96f94f33dcdf80191af91c032995786dab98c74e48bf->leave($__internal_3961a3d434caeff5ddde96f94f33dcdf80191af91c032995786dab98c74e48bf_prof);

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
