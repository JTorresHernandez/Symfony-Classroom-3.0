<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_dbb8d8717a5f53771d1cc24e4da4d3e671feb6b29a3c6f0f229e0ed8cf0904a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_95e26682e39b807301ed14f09bcc066a58864d8da632b351d183b55dcb27d265 = $this->env->getExtension("native_profiler");
        $__internal_95e26682e39b807301ed14f09bcc066a58864d8da632b351d183b55dcb27d265->enter($__internal_95e26682e39b807301ed14f09bcc066a58864d8da632b351d183b55dcb27d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e26682e39b807301ed14f09bcc066a58864d8da632b351d183b55dcb27d265->leave($__internal_95e26682e39b807301ed14f09bcc066a58864d8da632b351d183b55dcb27d265_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8927d1ed0123d8b41f9368d0f871da2777d611415cedd2334b6bf2d31a1f423c = $this->env->getExtension("native_profiler");
        $__internal_8927d1ed0123d8b41f9368d0f871da2777d611415cedd2334b6bf2d31a1f423c->enter($__internal_8927d1ed0123d8b41f9368d0f871da2777d611415cedd2334b6bf2d31a1f423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8927d1ed0123d8b41f9368d0f871da2777d611415cedd2334b6bf2d31a1f423c->leave($__internal_8927d1ed0123d8b41f9368d0f871da2777d611415cedd2334b6bf2d31a1f423c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
