<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_76cc65410ed72fef177d30378854b7c6ba294a9ca4eb5806e7257d9ffc7958ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6476b0a8c68c02c3ebebdbc2df00a4193054d007045af3c173e82b0a28bd606d = $this->env->getExtension("native_profiler");
        $__internal_6476b0a8c68c02c3ebebdbc2df00a4193054d007045af3c173e82b0a28bd606d->enter($__internal_6476b0a8c68c02c3ebebdbc2df00a4193054d007045af3c173e82b0a28bd606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6476b0a8c68c02c3ebebdbc2df00a4193054d007045af3c173e82b0a28bd606d->leave($__internal_6476b0a8c68c02c3ebebdbc2df00a4193054d007045af3c173e82b0a28bd606d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75f3372dda7c0e3d1ab078e3b64d1f3714b59f57a3527ce7ebe1f3ef8dcf0c28 = $this->env->getExtension("native_profiler");
        $__internal_75f3372dda7c0e3d1ab078e3b64d1f3714b59f57a3527ce7ebe1f3ef8dcf0c28->enter($__internal_75f3372dda7c0e3d1ab078e3b64d1f3714b59f57a3527ce7ebe1f3ef8dcf0c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_75f3372dda7c0e3d1ab078e3b64d1f3714b59f57a3527ce7ebe1f3ef8dcf0c28->leave($__internal_75f3372dda7c0e3d1ab078e3b64d1f3714b59f57a3527ce7ebe1f3ef8dcf0c28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
