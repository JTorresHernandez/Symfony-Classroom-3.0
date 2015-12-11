<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_28debd6bd3066dd643d755ef529b11f20a594e2e9510157b7a9c11dfd0816f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5162ec55cb6dce37f8bc231530c5b2ef3bb146139920f8aae38aac7c4f21e31f = $this->env->getExtension("native_profiler");
        $__internal_5162ec55cb6dce37f8bc231530c5b2ef3bb146139920f8aae38aac7c4f21e31f->enter($__internal_5162ec55cb6dce37f8bc231530c5b2ef3bb146139920f8aae38aac7c4f21e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5162ec55cb6dce37f8bc231530c5b2ef3bb146139920f8aae38aac7c4f21e31f->leave($__internal_5162ec55cb6dce37f8bc231530c5b2ef3bb146139920f8aae38aac7c4f21e31f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_33478cea1e9306ff89f3dce205e3454736e19632a8a41df12aa1293a566ae398 = $this->env->getExtension("native_profiler");
        $__internal_33478cea1e9306ff89f3dce205e3454736e19632a8a41df12aa1293a566ae398->enter($__internal_33478cea1e9306ff89f3dce205e3454736e19632a8a41df12aa1293a566ae398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_33478cea1e9306ff89f3dce205e3454736e19632a8a41df12aa1293a566ae398->leave($__internal_33478cea1e9306ff89f3dce205e3454736e19632a8a41df12aa1293a566ae398_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_213d2a9e26d3642ba1f76a041872a294fb92c1d5b7233a4bfe42514c87b12be8 = $this->env->getExtension("native_profiler");
        $__internal_213d2a9e26d3642ba1f76a041872a294fb92c1d5b7233a4bfe42514c87b12be8->enter($__internal_213d2a9e26d3642ba1f76a041872a294fb92c1d5b7233a4bfe42514c87b12be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_213d2a9e26d3642ba1f76a041872a294fb92c1d5b7233a4bfe42514c87b12be8->leave($__internal_213d2a9e26d3642ba1f76a041872a294fb92c1d5b7233a4bfe42514c87b12be8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fa330dd06f13e8da19e1f0f084377a1f9a3f726bc26eef63ef34bc4dc55313ba = $this->env->getExtension("native_profiler");
        $__internal_fa330dd06f13e8da19e1f0f084377a1f9a3f726bc26eef63ef34bc4dc55313ba->enter($__internal_fa330dd06f13e8da19e1f0f084377a1f9a3f726bc26eef63ef34bc4dc55313ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fa330dd06f13e8da19e1f0f084377a1f9a3f726bc26eef63ef34bc4dc55313ba->leave($__internal_fa330dd06f13e8da19e1f0f084377a1f9a3f726bc26eef63ef34bc4dc55313ba_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
