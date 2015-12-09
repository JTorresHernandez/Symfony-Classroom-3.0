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
        $__internal_e32ea5c2042a22cc51b53e485ae3b4a3437d193d2af95dffb0e92dd96c11e2c5 = $this->env->getExtension("native_profiler");
        $__internal_e32ea5c2042a22cc51b53e485ae3b4a3437d193d2af95dffb0e92dd96c11e2c5->enter($__internal_e32ea5c2042a22cc51b53e485ae3b4a3437d193d2af95dffb0e92dd96c11e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e32ea5c2042a22cc51b53e485ae3b4a3437d193d2af95dffb0e92dd96c11e2c5->leave($__internal_e32ea5c2042a22cc51b53e485ae3b4a3437d193d2af95dffb0e92dd96c11e2c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_465e4bf10f461ec14caa68fd798c1f6bc1d8fd8699a51a6c3cc2fec5ffe0f199 = $this->env->getExtension("native_profiler");
        $__internal_465e4bf10f461ec14caa68fd798c1f6bc1d8fd8699a51a6c3cc2fec5ffe0f199->enter($__internal_465e4bf10f461ec14caa68fd798c1f6bc1d8fd8699a51a6c3cc2fec5ffe0f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_465e4bf10f461ec14caa68fd798c1f6bc1d8fd8699a51a6c3cc2fec5ffe0f199->leave($__internal_465e4bf10f461ec14caa68fd798c1f6bc1d8fd8699a51a6c3cc2fec5ffe0f199_prof);

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
