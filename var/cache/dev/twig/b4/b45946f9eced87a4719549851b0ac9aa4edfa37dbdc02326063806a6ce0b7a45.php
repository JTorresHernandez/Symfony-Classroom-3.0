<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4367bd90c20cd38c311d390deccb55664f5dbe25e5ef5cc9888cdb940f9dcc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9182823acdeb98447341d73d2d1d38d07ae6a06ab34a3d4a224c58e45f525547 = $this->env->getExtension("native_profiler");
        $__internal_9182823acdeb98447341d73d2d1d38d07ae6a06ab34a3d4a224c58e45f525547->enter($__internal_9182823acdeb98447341d73d2d1d38d07ae6a06ab34a3d4a224c58e45f525547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9182823acdeb98447341d73d2d1d38d07ae6a06ab34a3d4a224c58e45f525547->leave($__internal_9182823acdeb98447341d73d2d1d38d07ae6a06ab34a3d4a224c58e45f525547_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a30c89936d162a03266225333c975e38008b7f353a20fbca6aaeaf76281520b3 = $this->env->getExtension("native_profiler");
        $__internal_a30c89936d162a03266225333c975e38008b7f353a20fbca6aaeaf76281520b3->enter($__internal_a30c89936d162a03266225333c975e38008b7f353a20fbca6aaeaf76281520b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a30c89936d162a03266225333c975e38008b7f353a20fbca6aaeaf76281520b3->leave($__internal_a30c89936d162a03266225333c975e38008b7f353a20fbca6aaeaf76281520b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
