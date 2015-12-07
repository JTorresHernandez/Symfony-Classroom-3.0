<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a0db4571eb258549f9da89c494a8a967f9775a81aeb9cbc30e5c6f8e65eb3607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8acad25d767ac933ba6aa2ed49135550c1a883d10eb1984a5c07abf758c28533 = $this->env->getExtension("native_profiler");
        $__internal_8acad25d767ac933ba6aa2ed49135550c1a883d10eb1984a5c07abf758c28533->enter($__internal_8acad25d767ac933ba6aa2ed49135550c1a883d10eb1984a5c07abf758c28533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8acad25d767ac933ba6aa2ed49135550c1a883d10eb1984a5c07abf758c28533->leave($__internal_8acad25d767ac933ba6aa2ed49135550c1a883d10eb1984a5c07abf758c28533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_657fb4d5c66a08ae34e5848c9a9128970cf5a22ebd6dba4b79d4bdc317f1111c = $this->env->getExtension("native_profiler");
        $__internal_657fb4d5c66a08ae34e5848c9a9128970cf5a22ebd6dba4b79d4bdc317f1111c->enter($__internal_657fb4d5c66a08ae34e5848c9a9128970cf5a22ebd6dba4b79d4bdc317f1111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_657fb4d5c66a08ae34e5848c9a9128970cf5a22ebd6dba4b79d4bdc317f1111c->leave($__internal_657fb4d5c66a08ae34e5848c9a9128970cf5a22ebd6dba4b79d4bdc317f1111c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
