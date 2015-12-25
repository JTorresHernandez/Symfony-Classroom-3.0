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
        $__internal_0c2827ecd1185246a210b9bb5e994492c47a188539333680b5d4d13e1ff16f48 = $this->env->getExtension("native_profiler");
        $__internal_0c2827ecd1185246a210b9bb5e994492c47a188539333680b5d4d13e1ff16f48->enter($__internal_0c2827ecd1185246a210b9bb5e994492c47a188539333680b5d4d13e1ff16f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2827ecd1185246a210b9bb5e994492c47a188539333680b5d4d13e1ff16f48->leave($__internal_0c2827ecd1185246a210b9bb5e994492c47a188539333680b5d4d13e1ff16f48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_274d184b61ada314dad6b639ed247dfd73cf3717dcaf40baeb8eaf8d1d024295 = $this->env->getExtension("native_profiler");
        $__internal_274d184b61ada314dad6b639ed247dfd73cf3717dcaf40baeb8eaf8d1d024295->enter($__internal_274d184b61ada314dad6b639ed247dfd73cf3717dcaf40baeb8eaf8d1d024295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_274d184b61ada314dad6b639ed247dfd73cf3717dcaf40baeb8eaf8d1d024295->leave($__internal_274d184b61ada314dad6b639ed247dfd73cf3717dcaf40baeb8eaf8d1d024295_prof);

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
