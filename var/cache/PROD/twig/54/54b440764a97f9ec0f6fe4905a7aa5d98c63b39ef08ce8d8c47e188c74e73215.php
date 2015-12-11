<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_4e109ea7ad2ca3a2e1947dbb0c1a728f22f4c01ff13615ba8844e461a26e3e86 extends Twig_Template
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
        $__internal_1e2c5b84f4522c7412c20d9eb89104806eca5f6eb472b6e6663ab6e4d80cdc90 = $this->env->getExtension("native_profiler");
        $__internal_1e2c5b84f4522c7412c20d9eb89104806eca5f6eb472b6e6663ab6e4d80cdc90->enter($__internal_1e2c5b84f4522c7412c20d9eb89104806eca5f6eb472b6e6663ab6e4d80cdc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2c5b84f4522c7412c20d9eb89104806eca5f6eb472b6e6663ab6e4d80cdc90->leave($__internal_1e2c5b84f4522c7412c20d9eb89104806eca5f6eb472b6e6663ab6e4d80cdc90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_537fc1039e234cf8ab84df1c9c6ac9bd3b454c417e0778e451f8a3cd751eeaf4 = $this->env->getExtension("native_profiler");
        $__internal_537fc1039e234cf8ab84df1c9c6ac9bd3b454c417e0778e451f8a3cd751eeaf4->enter($__internal_537fc1039e234cf8ab84df1c9c6ac9bd3b454c417e0778e451f8a3cd751eeaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_537fc1039e234cf8ab84df1c9c6ac9bd3b454c417e0778e451f8a3cd751eeaf4->leave($__internal_537fc1039e234cf8ab84df1c9c6ac9bd3b454c417e0778e451f8a3cd751eeaf4_prof);

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
