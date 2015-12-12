<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_efe377e7bbe0db56ce5d706f90f232131762ea5ef283bafd46f8b782e866c1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9a123247f7e31e9da259db567d12293818b53fc56e824d8761a6cea843894b21 = $this->env->getExtension("native_profiler");
        $__internal_9a123247f7e31e9da259db567d12293818b53fc56e824d8761a6cea843894b21->enter($__internal_9a123247f7e31e9da259db567d12293818b53fc56e824d8761a6cea843894b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a123247f7e31e9da259db567d12293818b53fc56e824d8761a6cea843894b21->leave($__internal_9a123247f7e31e9da259db567d12293818b53fc56e824d8761a6cea843894b21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_157eb03e7f7d892baacd129609ee49393ab59d398465ecc24d10d3c47f3814d3 = $this->env->getExtension("native_profiler");
        $__internal_157eb03e7f7d892baacd129609ee49393ab59d398465ecc24d10d3c47f3814d3->enter($__internal_157eb03e7f7d892baacd129609ee49393ab59d398465ecc24d10d3c47f3814d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_157eb03e7f7d892baacd129609ee49393ab59d398465ecc24d10d3c47f3814d3->leave($__internal_157eb03e7f7d892baacd129609ee49393ab59d398465ecc24d10d3c47f3814d3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
