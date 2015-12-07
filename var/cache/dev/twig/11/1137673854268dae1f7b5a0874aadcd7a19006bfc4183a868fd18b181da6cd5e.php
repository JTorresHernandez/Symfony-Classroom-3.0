<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_125aa3a0e5f754306ad043737a95b0b7b5a6ecb9a75290da57f4622985430373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_53e1989ea6c976485819fdc5b7589d77590e5940db2f5bf3283b8138a81ce090 = $this->env->getExtension("native_profiler");
        $__internal_53e1989ea6c976485819fdc5b7589d77590e5940db2f5bf3283b8138a81ce090->enter($__internal_53e1989ea6c976485819fdc5b7589d77590e5940db2f5bf3283b8138a81ce090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e1989ea6c976485819fdc5b7589d77590e5940db2f5bf3283b8138a81ce090->leave($__internal_53e1989ea6c976485819fdc5b7589d77590e5940db2f5bf3283b8138a81ce090_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36d7557c9ffac2a54901620776006911f62767eead1a893fee84ce89ab2f7f69 = $this->env->getExtension("native_profiler");
        $__internal_36d7557c9ffac2a54901620776006911f62767eead1a893fee84ce89ab2f7f69->enter($__internal_36d7557c9ffac2a54901620776006911f62767eead1a893fee84ce89ab2f7f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_36d7557c9ffac2a54901620776006911f62767eead1a893fee84ce89ab2f7f69->leave($__internal_36d7557c9ffac2a54901620776006911f62767eead1a893fee84ce89ab2f7f69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
