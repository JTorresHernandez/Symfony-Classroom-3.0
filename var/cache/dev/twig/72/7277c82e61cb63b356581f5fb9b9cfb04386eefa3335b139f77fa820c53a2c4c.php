<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_e2460532937fb8355e5d4fc5dd3ba4f892d8625648956741b8a89813e4f8ce98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_19b7b997e89467db191a4dad535c48e6aa9914134f2e79a0fe916ca3adfe5516 = $this->env->getExtension("native_profiler");
        $__internal_19b7b997e89467db191a4dad535c48e6aa9914134f2e79a0fe916ca3adfe5516->enter($__internal_19b7b997e89467db191a4dad535c48e6aa9914134f2e79a0fe916ca3adfe5516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b7b997e89467db191a4dad535c48e6aa9914134f2e79a0fe916ca3adfe5516->leave($__internal_19b7b997e89467db191a4dad535c48e6aa9914134f2e79a0fe916ca3adfe5516_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c5d7e84a6913d419f8b91e05aaced9757de5aa017d5b7075893f26b7b01e4f5 = $this->env->getExtension("native_profiler");
        $__internal_2c5d7e84a6913d419f8b91e05aaced9757de5aa017d5b7075893f26b7b01e4f5->enter($__internal_2c5d7e84a6913d419f8b91e05aaced9757de5aa017d5b7075893f26b7b01e4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2c5d7e84a6913d419f8b91e05aaced9757de5aa017d5b7075893f26b7b01e4f5->leave($__internal_2c5d7e84a6913d419f8b91e05aaced9757de5aa017d5b7075893f26b7b01e4f5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
