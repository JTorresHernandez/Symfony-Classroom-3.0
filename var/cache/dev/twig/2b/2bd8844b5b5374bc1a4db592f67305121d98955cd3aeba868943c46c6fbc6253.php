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
        $__internal_4f7b64e83be2d162cf9cd642df561c60f0151f235456e9d47a62944329c9152f = $this->env->getExtension("native_profiler");
        $__internal_4f7b64e83be2d162cf9cd642df561c60f0151f235456e9d47a62944329c9152f->enter($__internal_4f7b64e83be2d162cf9cd642df561c60f0151f235456e9d47a62944329c9152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7b64e83be2d162cf9cd642df561c60f0151f235456e9d47a62944329c9152f->leave($__internal_4f7b64e83be2d162cf9cd642df561c60f0151f235456e9d47a62944329c9152f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0738fd65de71cd083504136fa51ad7ea7025020bd1b09385c72fb3c971b0a4a8 = $this->env->getExtension("native_profiler");
        $__internal_0738fd65de71cd083504136fa51ad7ea7025020bd1b09385c72fb3c971b0a4a8->enter($__internal_0738fd65de71cd083504136fa51ad7ea7025020bd1b09385c72fb3c971b0a4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0738fd65de71cd083504136fa51ad7ea7025020bd1b09385c72fb3c971b0a4a8->leave($__internal_0738fd65de71cd083504136fa51ad7ea7025020bd1b09385c72fb3c971b0a4a8_prof);

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
