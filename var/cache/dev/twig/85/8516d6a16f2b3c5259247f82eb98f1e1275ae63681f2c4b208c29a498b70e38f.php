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
        $__internal_740b820c6b79ec89d9bce7f7c57adeabca13b819a7726acd6633f7124babc1ef = $this->env->getExtension("native_profiler");
        $__internal_740b820c6b79ec89d9bce7f7c57adeabca13b819a7726acd6633f7124babc1ef->enter($__internal_740b820c6b79ec89d9bce7f7c57adeabca13b819a7726acd6633f7124babc1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740b820c6b79ec89d9bce7f7c57adeabca13b819a7726acd6633f7124babc1ef->leave($__internal_740b820c6b79ec89d9bce7f7c57adeabca13b819a7726acd6633f7124babc1ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d826b48e45ed913d8f2e616a684a2ba6940d9227687e49bd55f7f72b3825fca = $this->env->getExtension("native_profiler");
        $__internal_6d826b48e45ed913d8f2e616a684a2ba6940d9227687e49bd55f7f72b3825fca->enter($__internal_6d826b48e45ed913d8f2e616a684a2ba6940d9227687e49bd55f7f72b3825fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6d826b48e45ed913d8f2e616a684a2ba6940d9227687e49bd55f7f72b3825fca->leave($__internal_6d826b48e45ed913d8f2e616a684a2ba6940d9227687e49bd55f7f72b3825fca_prof);

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
