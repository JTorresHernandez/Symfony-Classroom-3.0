<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_da02c1e86299d5505c79e34288e3b6385a51ee9b1e745167399367bcf924f00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_4dff1a5a4e9af6994777bf09d0b1697e7ddccea4b4f3a5a234dc28fa5f3d167c = $this->env->getExtension("native_profiler");
        $__internal_4dff1a5a4e9af6994777bf09d0b1697e7ddccea4b4f3a5a234dc28fa5f3d167c->enter($__internal_4dff1a5a4e9af6994777bf09d0b1697e7ddccea4b4f3a5a234dc28fa5f3d167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dff1a5a4e9af6994777bf09d0b1697e7ddccea4b4f3a5a234dc28fa5f3d167c->leave($__internal_4dff1a5a4e9af6994777bf09d0b1697e7ddccea4b4f3a5a234dc28fa5f3d167c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e041fbdac1bf356b8c6979d8d878d0d36b79b459f7d1bf59af598131a35aa368 = $this->env->getExtension("native_profiler");
        $__internal_e041fbdac1bf356b8c6979d8d878d0d36b79b459f7d1bf59af598131a35aa368->enter($__internal_e041fbdac1bf356b8c6979d8d878d0d36b79b459f7d1bf59af598131a35aa368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e041fbdac1bf356b8c6979d8d878d0d36b79b459f7d1bf59af598131a35aa368->leave($__internal_e041fbdac1bf356b8c6979d8d878d0d36b79b459f7d1bf59af598131a35aa368_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
