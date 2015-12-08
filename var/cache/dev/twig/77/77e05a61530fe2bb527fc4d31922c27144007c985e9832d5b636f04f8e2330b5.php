<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3322a17322d9b37e954455b7d43aa0919e7a9671b8d7d2a7866d814cdc58cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_39ebab56d1e4b5ce2176b668c2156eb0135f6e2ff4dce2ae01dff5112cfe52e3 = $this->env->getExtension("native_profiler");
        $__internal_39ebab56d1e4b5ce2176b668c2156eb0135f6e2ff4dce2ae01dff5112cfe52e3->enter($__internal_39ebab56d1e4b5ce2176b668c2156eb0135f6e2ff4dce2ae01dff5112cfe52e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ebab56d1e4b5ce2176b668c2156eb0135f6e2ff4dce2ae01dff5112cfe52e3->leave($__internal_39ebab56d1e4b5ce2176b668c2156eb0135f6e2ff4dce2ae01dff5112cfe52e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eda5f2db707d9bbc4b68f5a058a003221dc43ea7ea985f76a2175064c93b516c = $this->env->getExtension("native_profiler");
        $__internal_eda5f2db707d9bbc4b68f5a058a003221dc43ea7ea985f76a2175064c93b516c->enter($__internal_eda5f2db707d9bbc4b68f5a058a003221dc43ea7ea985f76a2175064c93b516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_eda5f2db707d9bbc4b68f5a058a003221dc43ea7ea985f76a2175064c93b516c->leave($__internal_eda5f2db707d9bbc4b68f5a058a003221dc43ea7ea985f76a2175064c93b516c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
