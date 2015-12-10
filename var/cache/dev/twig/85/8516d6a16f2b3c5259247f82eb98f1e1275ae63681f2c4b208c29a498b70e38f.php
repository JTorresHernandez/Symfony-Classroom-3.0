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
        $__internal_dbbae6d0b637c21a670ea312010c629d09f5361011e9d3471c93bfb2b83fa875 = $this->env->getExtension("native_profiler");
        $__internal_dbbae6d0b637c21a670ea312010c629d09f5361011e9d3471c93bfb2b83fa875->enter($__internal_dbbae6d0b637c21a670ea312010c629d09f5361011e9d3471c93bfb2b83fa875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbae6d0b637c21a670ea312010c629d09f5361011e9d3471c93bfb2b83fa875->leave($__internal_dbbae6d0b637c21a670ea312010c629d09f5361011e9d3471c93bfb2b83fa875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dc83822f3fe9e2823ebbc30e7021665bb6996a7527fa4525d51c649e664c3d6 = $this->env->getExtension("native_profiler");
        $__internal_5dc83822f3fe9e2823ebbc30e7021665bb6996a7527fa4525d51c649e664c3d6->enter($__internal_5dc83822f3fe9e2823ebbc30e7021665bb6996a7527fa4525d51c649e664c3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5dc83822f3fe9e2823ebbc30e7021665bb6996a7527fa4525d51c649e664c3d6->leave($__internal_5dc83822f3fe9e2823ebbc30e7021665bb6996a7527fa4525d51c649e664c3d6_prof);

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
