<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e33d0c40dba539088b826860f22f199081fe4b57736421784ab30019e18bb01 extends Twig_Template
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
        $__internal_02c0ea726f6230029ffc636d6d2ccb7962012cd85dc89d7bcc3bac95dd49a31d = $this->env->getExtension("native_profiler");
        $__internal_02c0ea726f6230029ffc636d6d2ccb7962012cd85dc89d7bcc3bac95dd49a31d->enter($__internal_02c0ea726f6230029ffc636d6d2ccb7962012cd85dc89d7bcc3bac95dd49a31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c0ea726f6230029ffc636d6d2ccb7962012cd85dc89d7bcc3bac95dd49a31d->leave($__internal_02c0ea726f6230029ffc636d6d2ccb7962012cd85dc89d7bcc3bac95dd49a31d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7af156244adc694eb15e27205994dda7c9fefb5cc4cf222132bf8bc89918a48c = $this->env->getExtension("native_profiler");
        $__internal_7af156244adc694eb15e27205994dda7c9fefb5cc4cf222132bf8bc89918a48c->enter($__internal_7af156244adc694eb15e27205994dda7c9fefb5cc4cf222132bf8bc89918a48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_7af156244adc694eb15e27205994dda7c9fefb5cc4cf222132bf8bc89918a48c->leave($__internal_7af156244adc694eb15e27205994dda7c9fefb5cc4cf222132bf8bc89918a48c_prof);

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
