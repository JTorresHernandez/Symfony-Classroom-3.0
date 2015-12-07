<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0038cd17f05e0303f5747f09e6ed8dcee9fd8a09557fe761fc8600776cfb91ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a29c58df405f3f7c63142fce28e6de52a8fe9562fd952ed88dbe920f48ae0f80 = $this->env->getExtension("native_profiler");
        $__internal_a29c58df405f3f7c63142fce28e6de52a8fe9562fd952ed88dbe920f48ae0f80->enter($__internal_a29c58df405f3f7c63142fce28e6de52a8fe9562fd952ed88dbe920f48ae0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29c58df405f3f7c63142fce28e6de52a8fe9562fd952ed88dbe920f48ae0f80->leave($__internal_a29c58df405f3f7c63142fce28e6de52a8fe9562fd952ed88dbe920f48ae0f80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64ece68d4b1be91e97bf35331227ecf648fd93409cfa63985a995e5db90b0ad2 = $this->env->getExtension("native_profiler");
        $__internal_64ece68d4b1be91e97bf35331227ecf648fd93409cfa63985a995e5db90b0ad2->enter($__internal_64ece68d4b1be91e97bf35331227ecf648fd93409cfa63985a995e5db90b0ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_64ece68d4b1be91e97bf35331227ecf648fd93409cfa63985a995e5db90b0ad2->leave($__internal_64ece68d4b1be91e97bf35331227ecf648fd93409cfa63985a995e5db90b0ad2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
