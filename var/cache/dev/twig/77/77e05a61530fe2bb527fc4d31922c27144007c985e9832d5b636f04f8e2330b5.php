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
        $__internal_d952ec4f16754a83a07616ff29862f954df99b30d1bad38b32970e52f18be2ff = $this->env->getExtension("native_profiler");
        $__internal_d952ec4f16754a83a07616ff29862f954df99b30d1bad38b32970e52f18be2ff->enter($__internal_d952ec4f16754a83a07616ff29862f954df99b30d1bad38b32970e52f18be2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d952ec4f16754a83a07616ff29862f954df99b30d1bad38b32970e52f18be2ff->leave($__internal_d952ec4f16754a83a07616ff29862f954df99b30d1bad38b32970e52f18be2ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2a8edd14a8a3053eb13d9c65e1de281b5a352c3016607f6e28b0982d6f52894 = $this->env->getExtension("native_profiler");
        $__internal_f2a8edd14a8a3053eb13d9c65e1de281b5a352c3016607f6e28b0982d6f52894->enter($__internal_f2a8edd14a8a3053eb13d9c65e1de281b5a352c3016607f6e28b0982d6f52894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f2a8edd14a8a3053eb13d9c65e1de281b5a352c3016607f6e28b0982d6f52894->leave($__internal_f2a8edd14a8a3053eb13d9c65e1de281b5a352c3016607f6e28b0982d6f52894_prof);

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
