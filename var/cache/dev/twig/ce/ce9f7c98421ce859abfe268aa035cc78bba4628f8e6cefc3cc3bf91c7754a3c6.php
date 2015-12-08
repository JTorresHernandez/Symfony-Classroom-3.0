<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_70943241f8fac559eb9706986f3fa87b33c4b70519af059a9c928d74cb5e2716 extends Twig_Template
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
        $__internal_0528f24f6eb1fc89efc263a11c0f18dd8fafefcc53d3677781920d6b56c2fb75 = $this->env->getExtension("native_profiler");
        $__internal_0528f24f6eb1fc89efc263a11c0f18dd8fafefcc53d3677781920d6b56c2fb75->enter($__internal_0528f24f6eb1fc89efc263a11c0f18dd8fafefcc53d3677781920d6b56c2fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0528f24f6eb1fc89efc263a11c0f18dd8fafefcc53d3677781920d6b56c2fb75->leave($__internal_0528f24f6eb1fc89efc263a11c0f18dd8fafefcc53d3677781920d6b56c2fb75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbab9115c515455a470b8510467695d7f7e38261275d9fafaa4343dd79e8cb67 = $this->env->getExtension("native_profiler");
        $__internal_dbab9115c515455a470b8510467695d7f7e38261275d9fafaa4343dd79e8cb67->enter($__internal_dbab9115c515455a470b8510467695d7f7e38261275d9fafaa4343dd79e8cb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_dbab9115c515455a470b8510467695d7f7e38261275d9fafaa4343dd79e8cb67->leave($__internal_dbab9115c515455a470b8510467695d7f7e38261275d9fafaa4343dd79e8cb67_prof);

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
