<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e04b3b0ad0aa56a2e1421c9da605f497d0c3defc1debc8595c724746d9900166 extends Twig_Template
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
        $__internal_04753f64a013e25c469ce4b9294f874b44fbde434bc84c5a995aff51986a5a73 = $this->env->getExtension("native_profiler");
        $__internal_04753f64a013e25c469ce4b9294f874b44fbde434bc84c5a995aff51986a5a73->enter($__internal_04753f64a013e25c469ce4b9294f874b44fbde434bc84c5a995aff51986a5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04753f64a013e25c469ce4b9294f874b44fbde434bc84c5a995aff51986a5a73->leave($__internal_04753f64a013e25c469ce4b9294f874b44fbde434bc84c5a995aff51986a5a73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c139a18971845b96174265aa653ea140c9e24f13867a0630f758c35b0e1f0eb2 = $this->env->getExtension("native_profiler");
        $__internal_c139a18971845b96174265aa653ea140c9e24f13867a0630f758c35b0e1f0eb2->enter($__internal_c139a18971845b96174265aa653ea140c9e24f13867a0630f758c35b0e1f0eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c139a18971845b96174265aa653ea140c9e24f13867a0630f758c35b0e1f0eb2->leave($__internal_c139a18971845b96174265aa653ea140c9e24f13867a0630f758c35b0e1f0eb2_prof);

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
