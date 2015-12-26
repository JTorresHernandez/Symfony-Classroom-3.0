<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_a4b5abbfb662ab1a59b8d9ef22495ba03a3ae08064ee00a9557d5f65a85a26b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_78b7fad62cf8e9c21d426a56861c8655a27114e8f6a208baa3f258210e8f4715 = $this->env->getExtension("native_profiler");
        $__internal_78b7fad62cf8e9c21d426a56861c8655a27114e8f6a208baa3f258210e8f4715->enter($__internal_78b7fad62cf8e9c21d426a56861c8655a27114e8f6a208baa3f258210e8f4715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b7fad62cf8e9c21d426a56861c8655a27114e8f6a208baa3f258210e8f4715->leave($__internal_78b7fad62cf8e9c21d426a56861c8655a27114e8f6a208baa3f258210e8f4715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4c423d952443aefe087c6bb2382de19169793df5e1a38746b325487565ec462 = $this->env->getExtension("native_profiler");
        $__internal_b4c423d952443aefe087c6bb2382de19169793df5e1a38746b325487565ec462->enter($__internal_b4c423d952443aefe087c6bb2382de19169793df5e1a38746b325487565ec462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b4c423d952443aefe087c6bb2382de19169793df5e1a38746b325487565ec462->leave($__internal_b4c423d952443aefe087c6bb2382de19169793df5e1a38746b325487565ec462_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
