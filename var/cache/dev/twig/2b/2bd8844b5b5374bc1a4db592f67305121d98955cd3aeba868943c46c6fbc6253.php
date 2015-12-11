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
        $__internal_2c81b71a3cc425a0484deee8dc8bd2dd26949fa33dadf8486b2187a1b4003f3d = $this->env->getExtension("native_profiler");
        $__internal_2c81b71a3cc425a0484deee8dc8bd2dd26949fa33dadf8486b2187a1b4003f3d->enter($__internal_2c81b71a3cc425a0484deee8dc8bd2dd26949fa33dadf8486b2187a1b4003f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c81b71a3cc425a0484deee8dc8bd2dd26949fa33dadf8486b2187a1b4003f3d->leave($__internal_2c81b71a3cc425a0484deee8dc8bd2dd26949fa33dadf8486b2187a1b4003f3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20c6021d97dd4a068b4e119aa5caa69372d8c0fea5c1bb2174b5481fa1a4ada8 = $this->env->getExtension("native_profiler");
        $__internal_20c6021d97dd4a068b4e119aa5caa69372d8c0fea5c1bb2174b5481fa1a4ada8->enter($__internal_20c6021d97dd4a068b4e119aa5caa69372d8c0fea5c1bb2174b5481fa1a4ada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_20c6021d97dd4a068b4e119aa5caa69372d8c0fea5c1bb2174b5481fa1a4ada8->leave($__internal_20c6021d97dd4a068b4e119aa5caa69372d8c0fea5c1bb2174b5481fa1a4ada8_prof);

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
