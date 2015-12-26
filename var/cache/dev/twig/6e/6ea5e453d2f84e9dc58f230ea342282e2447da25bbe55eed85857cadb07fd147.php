<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_d57883c3a0fe644e743610b81c8b73f9e86d1769a33a631aa755ca49a6296bef extends Twig_Template
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
        $__internal_d769bf3a15df1007e2454167a49d38fd1465565750eb481ca137fbb4d5b1f2a3 = $this->env->getExtension("native_profiler");
        $__internal_d769bf3a15df1007e2454167a49d38fd1465565750eb481ca137fbb4d5b1f2a3->enter($__internal_d769bf3a15df1007e2454167a49d38fd1465565750eb481ca137fbb4d5b1f2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d769bf3a15df1007e2454167a49d38fd1465565750eb481ca137fbb4d5b1f2a3->leave($__internal_d769bf3a15df1007e2454167a49d38fd1465565750eb481ca137fbb4d5b1f2a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3daccd5bfb30a03a15d2ec900fe45984a586348518dad74c03196f59ace6378c = $this->env->getExtension("native_profiler");
        $__internal_3daccd5bfb30a03a15d2ec900fe45984a586348518dad74c03196f59ace6378c->enter($__internal_3daccd5bfb30a03a15d2ec900fe45984a586348518dad74c03196f59ace6378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3daccd5bfb30a03a15d2ec900fe45984a586348518dad74c03196f59ace6378c->leave($__internal_3daccd5bfb30a03a15d2ec900fe45984a586348518dad74c03196f59ace6378c_prof);

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
