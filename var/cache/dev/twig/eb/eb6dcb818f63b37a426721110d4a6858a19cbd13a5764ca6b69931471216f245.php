<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_1fd14af311dd7534beb8c415706b4cbe747a9447c97a2cd30d7597a971854e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d5dee4b32f9b6f644b23e40d60567f1c7040ec7f861b4f78ae7c21d758d62850 = $this->env->getExtension("native_profiler");
        $__internal_d5dee4b32f9b6f644b23e40d60567f1c7040ec7f861b4f78ae7c21d758d62850->enter($__internal_d5dee4b32f9b6f644b23e40d60567f1c7040ec7f861b4f78ae7c21d758d62850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5dee4b32f9b6f644b23e40d60567f1c7040ec7f861b4f78ae7c21d758d62850->leave($__internal_d5dee4b32f9b6f644b23e40d60567f1c7040ec7f861b4f78ae7c21d758d62850_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c12acde3c86c376321fd9f2caa566730e39b2ef09c03f8cd684456deae194d0 = $this->env->getExtension("native_profiler");
        $__internal_6c12acde3c86c376321fd9f2caa566730e39b2ef09c03f8cd684456deae194d0->enter($__internal_6c12acde3c86c376321fd9f2caa566730e39b2ef09c03f8cd684456deae194d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6c12acde3c86c376321fd9f2caa566730e39b2ef09c03f8cd684456deae194d0->leave($__internal_6c12acde3c86c376321fd9f2caa566730e39b2ef09c03f8cd684456deae194d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
