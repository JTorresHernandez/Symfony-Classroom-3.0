<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_76cc65410ed72fef177d30378854b7c6ba294a9ca4eb5806e7257d9ffc7958ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_7e11ed804a81787063e3f2edc6e4ff1c6948c3b9b358f9fe853fca6c8d72b0b6 = $this->env->getExtension("native_profiler");
        $__internal_7e11ed804a81787063e3f2edc6e4ff1c6948c3b9b358f9fe853fca6c8d72b0b6->enter($__internal_7e11ed804a81787063e3f2edc6e4ff1c6948c3b9b358f9fe853fca6c8d72b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e11ed804a81787063e3f2edc6e4ff1c6948c3b9b358f9fe853fca6c8d72b0b6->leave($__internal_7e11ed804a81787063e3f2edc6e4ff1c6948c3b9b358f9fe853fca6c8d72b0b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33a08f12b90129b277b20d0fb4d2a9bb6b1362c336e71f5837bc178b3cd134d5 = $this->env->getExtension("native_profiler");
        $__internal_33a08f12b90129b277b20d0fb4d2a9bb6b1362c336e71f5837bc178b3cd134d5->enter($__internal_33a08f12b90129b277b20d0fb4d2a9bb6b1362c336e71f5837bc178b3cd134d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_33a08f12b90129b277b20d0fb4d2a9bb6b1362c336e71f5837bc178b3cd134d5->leave($__internal_33a08f12b90129b277b20d0fb4d2a9bb6b1362c336e71f5837bc178b3cd134d5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
