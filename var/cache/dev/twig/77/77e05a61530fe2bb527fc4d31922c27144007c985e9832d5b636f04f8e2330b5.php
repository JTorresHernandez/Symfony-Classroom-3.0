<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3322a17322d9b37e954455b7d43aa0919e7a9671b8d7d2a7866d814cdc58cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_9c3d40f56d758266c72e17cfbae7a93a71159ad8f051fa1106423c27063ee459 = $this->env->getExtension("native_profiler");
        $__internal_9c3d40f56d758266c72e17cfbae7a93a71159ad8f051fa1106423c27063ee459->enter($__internal_9c3d40f56d758266c72e17cfbae7a93a71159ad8f051fa1106423c27063ee459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3d40f56d758266c72e17cfbae7a93a71159ad8f051fa1106423c27063ee459->leave($__internal_9c3d40f56d758266c72e17cfbae7a93a71159ad8f051fa1106423c27063ee459_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e50c502d6f4f281fae41dac3a567537ea8eab4719c1c2d3e95d0b9bdb4e3c257 = $this->env->getExtension("native_profiler");
        $__internal_e50c502d6f4f281fae41dac3a567537ea8eab4719c1c2d3e95d0b9bdb4e3c257->enter($__internal_e50c502d6f4f281fae41dac3a567537ea8eab4719c1c2d3e95d0b9bdb4e3c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e50c502d6f4f281fae41dac3a567537ea8eab4719c1c2d3e95d0b9bdb4e3c257->leave($__internal_e50c502d6f4f281fae41dac3a567537ea8eab4719c1c2d3e95d0b9bdb4e3c257_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
