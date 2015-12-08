<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_08ea6270cf702ea15196eba3b6d1d939a5db3f70d667ee4d6b25f426d3c02141 extends Twig_Template
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
        $__internal_b9d15f81cde856aa3acc51f18b03b6c6a30d8a88c25e10e5569c8257dd131507 = $this->env->getExtension("native_profiler");
        $__internal_b9d15f81cde856aa3acc51f18b03b6c6a30d8a88c25e10e5569c8257dd131507->enter($__internal_b9d15f81cde856aa3acc51f18b03b6c6a30d8a88c25e10e5569c8257dd131507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d15f81cde856aa3acc51f18b03b6c6a30d8a88c25e10e5569c8257dd131507->leave($__internal_b9d15f81cde856aa3acc51f18b03b6c6a30d8a88c25e10e5569c8257dd131507_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b70a0cdd5c71d631fffe89ced7647002591c911a6e02f3072838bcf07af729e = $this->env->getExtension("native_profiler");
        $__internal_3b70a0cdd5c71d631fffe89ced7647002591c911a6e02f3072838bcf07af729e->enter($__internal_3b70a0cdd5c71d631fffe89ced7647002591c911a6e02f3072838bcf07af729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3b70a0cdd5c71d631fffe89ced7647002591c911a6e02f3072838bcf07af729e->leave($__internal_3b70a0cdd5c71d631fffe89ced7647002591c911a6e02f3072838bcf07af729e_prof);

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
