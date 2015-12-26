<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_21f5d1bf3ba5031bb062be5e54371127246ee0813caddef7bb1a6af44ad4e5f3 extends Twig_Template
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
        $__internal_9955dbb6af821cc3bc2921889f3a5b6938a6093edc0102914faa7eb6dbb1c334 = $this->env->getExtension("native_profiler");
        $__internal_9955dbb6af821cc3bc2921889f3a5b6938a6093edc0102914faa7eb6dbb1c334->enter($__internal_9955dbb6af821cc3bc2921889f3a5b6938a6093edc0102914faa7eb6dbb1c334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9955dbb6af821cc3bc2921889f3a5b6938a6093edc0102914faa7eb6dbb1c334->leave($__internal_9955dbb6af821cc3bc2921889f3a5b6938a6093edc0102914faa7eb6dbb1c334_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9268884ce045d5d99177c009e735f2eed356af5577dfe9a17a7485f3a83446f6 = $this->env->getExtension("native_profiler");
        $__internal_9268884ce045d5d99177c009e735f2eed356af5577dfe9a17a7485f3a83446f6->enter($__internal_9268884ce045d5d99177c009e735f2eed356af5577dfe9a17a7485f3a83446f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9268884ce045d5d99177c009e735f2eed356af5577dfe9a17a7485f3a83446f6->leave($__internal_9268884ce045d5d99177c009e735f2eed356af5577dfe9a17a7485f3a83446f6_prof);

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
