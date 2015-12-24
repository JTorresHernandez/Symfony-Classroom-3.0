<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_01a06b1f391374784694c3d57c4c0bc35bf6be94705496cf3203c19218032022 extends Twig_Template
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
        $__internal_fc1cf22990eb7f29e1e078dcde14f75be35d9981f6621e56602c53ecfbfa9014 = $this->env->getExtension("native_profiler");
        $__internal_fc1cf22990eb7f29e1e078dcde14f75be35d9981f6621e56602c53ecfbfa9014->enter($__internal_fc1cf22990eb7f29e1e078dcde14f75be35d9981f6621e56602c53ecfbfa9014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc1cf22990eb7f29e1e078dcde14f75be35d9981f6621e56602c53ecfbfa9014->leave($__internal_fc1cf22990eb7f29e1e078dcde14f75be35d9981f6621e56602c53ecfbfa9014_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_904ec90ec30a835e47f16613dade7d494877ddbd1aac3ce609a4be5bf03094ff = $this->env->getExtension("native_profiler");
        $__internal_904ec90ec30a835e47f16613dade7d494877ddbd1aac3ce609a4be5bf03094ff->enter($__internal_904ec90ec30a835e47f16613dade7d494877ddbd1aac3ce609a4be5bf03094ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_904ec90ec30a835e47f16613dade7d494877ddbd1aac3ce609a4be5bf03094ff->leave($__internal_904ec90ec30a835e47f16613dade7d494877ddbd1aac3ce609a4be5bf03094ff_prof);

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
