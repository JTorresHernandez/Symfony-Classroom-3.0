<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_47bfccb15b624bd56960102802e6544b55a61ffc6baf5a54407ac4357a1e9028 extends Twig_Template
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
        $__internal_5d567dcb2fb5c2e616684c34635ad5105acf9c017a314568f1c85efbb3aa2613 = $this->env->getExtension("native_profiler");
        $__internal_5d567dcb2fb5c2e616684c34635ad5105acf9c017a314568f1c85efbb3aa2613->enter($__internal_5d567dcb2fb5c2e616684c34635ad5105acf9c017a314568f1c85efbb3aa2613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d567dcb2fb5c2e616684c34635ad5105acf9c017a314568f1c85efbb3aa2613->leave($__internal_5d567dcb2fb5c2e616684c34635ad5105acf9c017a314568f1c85efbb3aa2613_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9128f537b339937f3a18956cfa6915839fb5e8d918e5608bb8ac2672a590858 = $this->env->getExtension("native_profiler");
        $__internal_f9128f537b339937f3a18956cfa6915839fb5e8d918e5608bb8ac2672a590858->enter($__internal_f9128f537b339937f3a18956cfa6915839fb5e8d918e5608bb8ac2672a590858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f9128f537b339937f3a18956cfa6915839fb5e8d918e5608bb8ac2672a590858->leave($__internal_f9128f537b339937f3a18956cfa6915839fb5e8d918e5608bb8ac2672a590858_prof);

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
