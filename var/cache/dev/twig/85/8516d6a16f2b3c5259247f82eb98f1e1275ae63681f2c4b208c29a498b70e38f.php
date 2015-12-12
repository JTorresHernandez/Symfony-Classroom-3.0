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
        $__internal_2a2441a1269231c60ad972be955ca3d16d6f51c7a983110658c83b2054eee7da = $this->env->getExtension("native_profiler");
        $__internal_2a2441a1269231c60ad972be955ca3d16d6f51c7a983110658c83b2054eee7da->enter($__internal_2a2441a1269231c60ad972be955ca3d16d6f51c7a983110658c83b2054eee7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a2441a1269231c60ad972be955ca3d16d6f51c7a983110658c83b2054eee7da->leave($__internal_2a2441a1269231c60ad972be955ca3d16d6f51c7a983110658c83b2054eee7da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fa1f6e3b7c2cd3f01daafd144fab2e3ff69d83b5c6b30a54f4b919e96c78f95 = $this->env->getExtension("native_profiler");
        $__internal_2fa1f6e3b7c2cd3f01daafd144fab2e3ff69d83b5c6b30a54f4b919e96c78f95->enter($__internal_2fa1f6e3b7c2cd3f01daafd144fab2e3ff69d83b5c6b30a54f4b919e96c78f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_2fa1f6e3b7c2cd3f01daafd144fab2e3ff69d83b5c6b30a54f4b919e96c78f95->leave($__internal_2fa1f6e3b7c2cd3f01daafd144fab2e3ff69d83b5c6b30a54f4b919e96c78f95_prof);

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
