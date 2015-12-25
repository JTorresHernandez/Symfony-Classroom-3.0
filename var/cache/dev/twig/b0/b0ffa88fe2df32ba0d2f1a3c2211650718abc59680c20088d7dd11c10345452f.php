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
        $__internal_1496204be3db9638ea35e4df036cd0201591335dd97de92992e411ea45e05454 = $this->env->getExtension("native_profiler");
        $__internal_1496204be3db9638ea35e4df036cd0201591335dd97de92992e411ea45e05454->enter($__internal_1496204be3db9638ea35e4df036cd0201591335dd97de92992e411ea45e05454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1496204be3db9638ea35e4df036cd0201591335dd97de92992e411ea45e05454->leave($__internal_1496204be3db9638ea35e4df036cd0201591335dd97de92992e411ea45e05454_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7c34f32422bc67f7f43d33dfebb609cf817d5a20e061ef0711a9338f1e3874f = $this->env->getExtension("native_profiler");
        $__internal_a7c34f32422bc67f7f43d33dfebb609cf817d5a20e061ef0711a9338f1e3874f->enter($__internal_a7c34f32422bc67f7f43d33dfebb609cf817d5a20e061ef0711a9338f1e3874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a7c34f32422bc67f7f43d33dfebb609cf817d5a20e061ef0711a9338f1e3874f->leave($__internal_a7c34f32422bc67f7f43d33dfebb609cf817d5a20e061ef0711a9338f1e3874f_prof);

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
