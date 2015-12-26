<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_de731c58b7082e1533f25684989f1c3130deada42f471ba8d77fb4b548649d13 extends Twig_Template
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
        $__internal_df74a7f200d56ea8d63e12bc807cc9b4118b268d15bb2b5964d2bcf267ff1c1c = $this->env->getExtension("native_profiler");
        $__internal_df74a7f200d56ea8d63e12bc807cc9b4118b268d15bb2b5964d2bcf267ff1c1c->enter($__internal_df74a7f200d56ea8d63e12bc807cc9b4118b268d15bb2b5964d2bcf267ff1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df74a7f200d56ea8d63e12bc807cc9b4118b268d15bb2b5964d2bcf267ff1c1c->leave($__internal_df74a7f200d56ea8d63e12bc807cc9b4118b268d15bb2b5964d2bcf267ff1c1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6fd1259d29466d38d39790c77deee40e00b2966b60db4a07c73d375e12d2ef0 = $this->env->getExtension("native_profiler");
        $__internal_a6fd1259d29466d38d39790c77deee40e00b2966b60db4a07c73d375e12d2ef0->enter($__internal_a6fd1259d29466d38d39790c77deee40e00b2966b60db4a07c73d375e12d2ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a6fd1259d29466d38d39790c77deee40e00b2966b60db4a07c73d375e12d2ef0->leave($__internal_a6fd1259d29466d38d39790c77deee40e00b2966b60db4a07c73d375e12d2ef0_prof);

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
