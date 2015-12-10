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
        $__internal_6644c7e3470ed4736fe982d0fec4ca559e2c7dc4ffdbffd2c6551e1626b9a0f7 = $this->env->getExtension("native_profiler");
        $__internal_6644c7e3470ed4736fe982d0fec4ca559e2c7dc4ffdbffd2c6551e1626b9a0f7->enter($__internal_6644c7e3470ed4736fe982d0fec4ca559e2c7dc4ffdbffd2c6551e1626b9a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6644c7e3470ed4736fe982d0fec4ca559e2c7dc4ffdbffd2c6551e1626b9a0f7->leave($__internal_6644c7e3470ed4736fe982d0fec4ca559e2c7dc4ffdbffd2c6551e1626b9a0f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04d1f84652cb364e4c954a47e544a04422fc39df10b952027d35a9a7a667b3da = $this->env->getExtension("native_profiler");
        $__internal_04d1f84652cb364e4c954a47e544a04422fc39df10b952027d35a9a7a667b3da->enter($__internal_04d1f84652cb364e4c954a47e544a04422fc39df10b952027d35a9a7a667b3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_04d1f84652cb364e4c954a47e544a04422fc39df10b952027d35a9a7a667b3da->leave($__internal_04d1f84652cb364e4c954a47e544a04422fc39df10b952027d35a9a7a667b3da_prof);

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
