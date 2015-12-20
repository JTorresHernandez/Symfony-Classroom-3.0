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
        $__internal_fde691e21f0834fe4b47b8f4c6da61c0b3544acce7f254938696a854e3976e56 = $this->env->getExtension("native_profiler");
        $__internal_fde691e21f0834fe4b47b8f4c6da61c0b3544acce7f254938696a854e3976e56->enter($__internal_fde691e21f0834fe4b47b8f4c6da61c0b3544acce7f254938696a854e3976e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde691e21f0834fe4b47b8f4c6da61c0b3544acce7f254938696a854e3976e56->leave($__internal_fde691e21f0834fe4b47b8f4c6da61c0b3544acce7f254938696a854e3976e56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9695b488b6b522b750f4f1cc07ae698ef529abdf22d5f0a28c7ce1efe8d692a0 = $this->env->getExtension("native_profiler");
        $__internal_9695b488b6b522b750f4f1cc07ae698ef529abdf22d5f0a28c7ce1efe8d692a0->enter($__internal_9695b488b6b522b750f4f1cc07ae698ef529abdf22d5f0a28c7ce1efe8d692a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_9695b488b6b522b750f4f1cc07ae698ef529abdf22d5f0a28c7ce1efe8d692a0->leave($__internal_9695b488b6b522b750f4f1cc07ae698ef529abdf22d5f0a28c7ce1efe8d692a0_prof);

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
