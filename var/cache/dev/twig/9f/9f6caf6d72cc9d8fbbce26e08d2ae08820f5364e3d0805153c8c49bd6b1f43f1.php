<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b26d616c91b49f53be175150a0c56d42ba2557a408c0a503c515b62add43e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0547ac343cc1b28141db9d55f5d6d05da6c79fdb2e1df330483b26f8e7c90ff3 = $this->env->getExtension("native_profiler");
        $__internal_0547ac343cc1b28141db9d55f5d6d05da6c79fdb2e1df330483b26f8e7c90ff3->enter($__internal_0547ac343cc1b28141db9d55f5d6d05da6c79fdb2e1df330483b26f8e7c90ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0547ac343cc1b28141db9d55f5d6d05da6c79fdb2e1df330483b26f8e7c90ff3->leave($__internal_0547ac343cc1b28141db9d55f5d6d05da6c79fdb2e1df330483b26f8e7c90ff3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b724309ddc41475e7c5ef59e7ce143372c781625577af2476f575ff8daf2ee9 = $this->env->getExtension("native_profiler");
        $__internal_4b724309ddc41475e7c5ef59e7ce143372c781625577af2476f575ff8daf2ee9->enter($__internal_4b724309ddc41475e7c5ef59e7ce143372c781625577af2476f575ff8daf2ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4b724309ddc41475e7c5ef59e7ce143372c781625577af2476f575ff8daf2ee9->leave($__internal_4b724309ddc41475e7c5ef59e7ce143372c781625577af2476f575ff8daf2ee9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
