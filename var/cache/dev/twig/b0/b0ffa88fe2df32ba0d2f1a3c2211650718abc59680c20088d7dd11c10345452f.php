<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_07a54bdb80be2d45f3b021141834ee448b4440e6b3b357b74a893d2c71939c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_277658f7eaeaad22593936b37216e7ff4359ffc9c9558a7ec25552f2b4075718 = $this->env->getExtension("native_profiler");
        $__internal_277658f7eaeaad22593936b37216e7ff4359ffc9c9558a7ec25552f2b4075718->enter($__internal_277658f7eaeaad22593936b37216e7ff4359ffc9c9558a7ec25552f2b4075718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277658f7eaeaad22593936b37216e7ff4359ffc9c9558a7ec25552f2b4075718->leave($__internal_277658f7eaeaad22593936b37216e7ff4359ffc9c9558a7ec25552f2b4075718_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91b00df1caa3b64867aaa1bb92e3e3851edaa98867e9864c9c93ff9610cba10e = $this->env->getExtension("native_profiler");
        $__internal_91b00df1caa3b64867aaa1bb92e3e3851edaa98867e9864c9c93ff9610cba10e->enter($__internal_91b00df1caa3b64867aaa1bb92e3e3851edaa98867e9864c9c93ff9610cba10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_91b00df1caa3b64867aaa1bb92e3e3851edaa98867e9864c9c93ff9610cba10e->leave($__internal_91b00df1caa3b64867aaa1bb92e3e3851edaa98867e9864c9c93ff9610cba10e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
