<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8f20365a5c8ba28c9023e8b4fbb53afe90df6e39def4a4ab583b95f9884bb45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6cfdd2c606ed40ae0c234f40ed7855ee87331c4bcd9abb59e70995a7f05dfb34 = $this->env->getExtension("native_profiler");
        $__internal_6cfdd2c606ed40ae0c234f40ed7855ee87331c4bcd9abb59e70995a7f05dfb34->enter($__internal_6cfdd2c606ed40ae0c234f40ed7855ee87331c4bcd9abb59e70995a7f05dfb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfdd2c606ed40ae0c234f40ed7855ee87331c4bcd9abb59e70995a7f05dfb34->leave($__internal_6cfdd2c606ed40ae0c234f40ed7855ee87331c4bcd9abb59e70995a7f05dfb34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_287f87eb5388f9d3c3e4cf556def777eb4037e421b35de023218b267bd39cea6 = $this->env->getExtension("native_profiler");
        $__internal_287f87eb5388f9d3c3e4cf556def777eb4037e421b35de023218b267bd39cea6->enter($__internal_287f87eb5388f9d3c3e4cf556def777eb4037e421b35de023218b267bd39cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_287f87eb5388f9d3c3e4cf556def777eb4037e421b35de023218b267bd39cea6->leave($__internal_287f87eb5388f9d3c3e4cf556def777eb4037e421b35de023218b267bd39cea6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
