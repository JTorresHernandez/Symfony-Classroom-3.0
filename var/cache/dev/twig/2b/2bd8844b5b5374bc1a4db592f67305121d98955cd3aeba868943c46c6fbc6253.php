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
        $__internal_bec84e6ab60a660f24da9af00afd569d435bfe22b06e70e32de327fa41d042c0 = $this->env->getExtension("native_profiler");
        $__internal_bec84e6ab60a660f24da9af00afd569d435bfe22b06e70e32de327fa41d042c0->enter($__internal_bec84e6ab60a660f24da9af00afd569d435bfe22b06e70e32de327fa41d042c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec84e6ab60a660f24da9af00afd569d435bfe22b06e70e32de327fa41d042c0->leave($__internal_bec84e6ab60a660f24da9af00afd569d435bfe22b06e70e32de327fa41d042c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87fe23cb5c744dba21caeb5b89a20ce7e52bf9f3abcbf7900931a93393327b3e = $this->env->getExtension("native_profiler");
        $__internal_87fe23cb5c744dba21caeb5b89a20ce7e52bf9f3abcbf7900931a93393327b3e->enter($__internal_87fe23cb5c744dba21caeb5b89a20ce7e52bf9f3abcbf7900931a93393327b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_87fe23cb5c744dba21caeb5b89a20ce7e52bf9f3abcbf7900931a93393327b3e->leave($__internal_87fe23cb5c744dba21caeb5b89a20ce7e52bf9f3abcbf7900931a93393327b3e_prof);

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
