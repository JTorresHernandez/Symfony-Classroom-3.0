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
        $__internal_59ba7a2f774598692d8ffa7f5bb3079790556ae6f5b73e67a5fc8af4711bc824 = $this->env->getExtension("native_profiler");
        $__internal_59ba7a2f774598692d8ffa7f5bb3079790556ae6f5b73e67a5fc8af4711bc824->enter($__internal_59ba7a2f774598692d8ffa7f5bb3079790556ae6f5b73e67a5fc8af4711bc824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ba7a2f774598692d8ffa7f5bb3079790556ae6f5b73e67a5fc8af4711bc824->leave($__internal_59ba7a2f774598692d8ffa7f5bb3079790556ae6f5b73e67a5fc8af4711bc824_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e332db136e95bce57fd966b26f9fe73fa6fe07fc9b6c4a17197384fbeaa9f03 = $this->env->getExtension("native_profiler");
        $__internal_4e332db136e95bce57fd966b26f9fe73fa6fe07fc9b6c4a17197384fbeaa9f03->enter($__internal_4e332db136e95bce57fd966b26f9fe73fa6fe07fc9b6c4a17197384fbeaa9f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4e332db136e95bce57fd966b26f9fe73fa6fe07fc9b6c4a17197384fbeaa9f03->leave($__internal_4e332db136e95bce57fd966b26f9fe73fa6fe07fc9b6c4a17197384fbeaa9f03_prof);

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
