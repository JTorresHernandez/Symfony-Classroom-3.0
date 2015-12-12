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
        $__internal_2ed684feeb48a1350ca99e2f42e930951842a2a7141a3223f8abeb2b12e04115 = $this->env->getExtension("native_profiler");
        $__internal_2ed684feeb48a1350ca99e2f42e930951842a2a7141a3223f8abeb2b12e04115->enter($__internal_2ed684feeb48a1350ca99e2f42e930951842a2a7141a3223f8abeb2b12e04115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed684feeb48a1350ca99e2f42e930951842a2a7141a3223f8abeb2b12e04115->leave($__internal_2ed684feeb48a1350ca99e2f42e930951842a2a7141a3223f8abeb2b12e04115_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_359b7513cf5d2e66a90cb11b39c3ef43d07a35fcdd5e1312fb7decdca17a180c = $this->env->getExtension("native_profiler");
        $__internal_359b7513cf5d2e66a90cb11b39c3ef43d07a35fcdd5e1312fb7decdca17a180c->enter($__internal_359b7513cf5d2e66a90cb11b39c3ef43d07a35fcdd5e1312fb7decdca17a180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_359b7513cf5d2e66a90cb11b39c3ef43d07a35fcdd5e1312fb7decdca17a180c->leave($__internal_359b7513cf5d2e66a90cb11b39c3ef43d07a35fcdd5e1312fb7decdca17a180c_prof);

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
