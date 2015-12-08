<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_cddb69022df630217ce89f9c23b96d93bbbd2a3ae010da7d49071983f8b51ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_9731fdca5e60589f46a0535d4e1f07ffcfc7e3182e320ba56f655d354361608c = $this->env->getExtension("native_profiler");
        $__internal_9731fdca5e60589f46a0535d4e1f07ffcfc7e3182e320ba56f655d354361608c->enter($__internal_9731fdca5e60589f46a0535d4e1f07ffcfc7e3182e320ba56f655d354361608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9731fdca5e60589f46a0535d4e1f07ffcfc7e3182e320ba56f655d354361608c->leave($__internal_9731fdca5e60589f46a0535d4e1f07ffcfc7e3182e320ba56f655d354361608c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78fe8653751040dabb2d02b9eba940e204a7a99cb978da2554044b8cf62b8383 = $this->env->getExtension("native_profiler");
        $__internal_78fe8653751040dabb2d02b9eba940e204a7a99cb978da2554044b8cf62b8383->enter($__internal_78fe8653751040dabb2d02b9eba940e204a7a99cb978da2554044b8cf62b8383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_78fe8653751040dabb2d02b9eba940e204a7a99cb978da2554044b8cf62b8383->leave($__internal_78fe8653751040dabb2d02b9eba940e204a7a99cb978da2554044b8cf62b8383_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
