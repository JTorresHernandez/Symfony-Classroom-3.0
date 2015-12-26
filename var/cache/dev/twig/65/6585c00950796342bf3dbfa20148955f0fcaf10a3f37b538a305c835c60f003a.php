<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_063ac1124370a3832275364d7c03cf1ca6bd50aae3054e8e2aaa76dcb237e10e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_dead729f005c191985026e7c0dfd8b9b3edceb6b377af13ed7ade801715e8533 = $this->env->getExtension("native_profiler");
        $__internal_dead729f005c191985026e7c0dfd8b9b3edceb6b377af13ed7ade801715e8533->enter($__internal_dead729f005c191985026e7c0dfd8b9b3edceb6b377af13ed7ade801715e8533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dead729f005c191985026e7c0dfd8b9b3edceb6b377af13ed7ade801715e8533->leave($__internal_dead729f005c191985026e7c0dfd8b9b3edceb6b377af13ed7ade801715e8533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f5173000b0292c4128395bced9d1038ac68d2e054595adc3f299599a0c52b25 = $this->env->getExtension("native_profiler");
        $__internal_3f5173000b0292c4128395bced9d1038ac68d2e054595adc3f299599a0c52b25->enter($__internal_3f5173000b0292c4128395bced9d1038ac68d2e054595adc3f299599a0c52b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3f5173000b0292c4128395bced9d1038ac68d2e054595adc3f299599a0c52b25->leave($__internal_3f5173000b0292c4128395bced9d1038ac68d2e054595adc3f299599a0c52b25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
