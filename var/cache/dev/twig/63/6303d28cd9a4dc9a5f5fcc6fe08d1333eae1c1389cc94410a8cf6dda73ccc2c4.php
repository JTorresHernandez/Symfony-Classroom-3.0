<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_d79c253f3c23f3719d363df481de735049819d769676ff09f7b650ccfdb6c857 extends Twig_Template
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
        $__internal_9d0824a55cb6d8f7d9dfb7591b81275394c522182d5147169a75ad6964b6b578 = $this->env->getExtension("native_profiler");
        $__internal_9d0824a55cb6d8f7d9dfb7591b81275394c522182d5147169a75ad6964b6b578->enter($__internal_9d0824a55cb6d8f7d9dfb7591b81275394c522182d5147169a75ad6964b6b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0824a55cb6d8f7d9dfb7591b81275394c522182d5147169a75ad6964b6b578->leave($__internal_9d0824a55cb6d8f7d9dfb7591b81275394c522182d5147169a75ad6964b6b578_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f91f2f63cf8a6baf8df94674431253ca521ac2204dcb2a17b839c544228981a3 = $this->env->getExtension("native_profiler");
        $__internal_f91f2f63cf8a6baf8df94674431253ca521ac2204dcb2a17b839c544228981a3->enter($__internal_f91f2f63cf8a6baf8df94674431253ca521ac2204dcb2a17b839c544228981a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f91f2f63cf8a6baf8df94674431253ca521ac2204dcb2a17b839c544228981a3->leave($__internal_f91f2f63cf8a6baf8df94674431253ca521ac2204dcb2a17b839c544228981a3_prof);

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
