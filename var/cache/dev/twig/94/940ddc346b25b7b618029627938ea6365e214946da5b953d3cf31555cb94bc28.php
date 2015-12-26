<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_86e3db46e16810663148806fbf958317f7208c098fa67db480fd2e75ffbf6aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_5023b5b13f4b4eb525e62c51a4e79c572ddb831d1f149f31ddb395238db8cf4b = $this->env->getExtension("native_profiler");
        $__internal_5023b5b13f4b4eb525e62c51a4e79c572ddb831d1f149f31ddb395238db8cf4b->enter($__internal_5023b5b13f4b4eb525e62c51a4e79c572ddb831d1f149f31ddb395238db8cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5023b5b13f4b4eb525e62c51a4e79c572ddb831d1f149f31ddb395238db8cf4b->leave($__internal_5023b5b13f4b4eb525e62c51a4e79c572ddb831d1f149f31ddb395238db8cf4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15cccad59d8b7666f1fc616b3ddc336e4d5146332fa17194776ca2bd0f5004b8 = $this->env->getExtension("native_profiler");
        $__internal_15cccad59d8b7666f1fc616b3ddc336e4d5146332fa17194776ca2bd0f5004b8->enter($__internal_15cccad59d8b7666f1fc616b3ddc336e4d5146332fa17194776ca2bd0f5004b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_15cccad59d8b7666f1fc616b3ddc336e4d5146332fa17194776ca2bd0f5004b8->leave($__internal_15cccad59d8b7666f1fc616b3ddc336e4d5146332fa17194776ca2bd0f5004b8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
