<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_5c40ed6cda8be52942f926f317ccfd73f504eea525e04433a851c9f0260873a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4e7c664c26af21d763b0049c2a8077660fb33c30cfdcba5eeeff56bbff3fdc29 = $this->env->getExtension("native_profiler");
        $__internal_4e7c664c26af21d763b0049c2a8077660fb33c30cfdcba5eeeff56bbff3fdc29->enter($__internal_4e7c664c26af21d763b0049c2a8077660fb33c30cfdcba5eeeff56bbff3fdc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7c664c26af21d763b0049c2a8077660fb33c30cfdcba5eeeff56bbff3fdc29->leave($__internal_4e7c664c26af21d763b0049c2a8077660fb33c30cfdcba5eeeff56bbff3fdc29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c381cc3280b7cbb24871955366a847c361af42fef195839003840cdf3b86cb9 = $this->env->getExtension("native_profiler");
        $__internal_4c381cc3280b7cbb24871955366a847c361af42fef195839003840cdf3b86cb9->enter($__internal_4c381cc3280b7cbb24871955366a847c361af42fef195839003840cdf3b86cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4c381cc3280b7cbb24871955366a847c361af42fef195839003840cdf3b86cb9->leave($__internal_4c381cc3280b7cbb24871955366a847c361af42fef195839003840cdf3b86cb9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
