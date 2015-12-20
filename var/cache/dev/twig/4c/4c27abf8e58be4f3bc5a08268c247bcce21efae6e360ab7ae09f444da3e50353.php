<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_99038c4ef815991eaf5b9d13482c0d1abe48f1decd8227d0b3cde38198661a02 extends Twig_Template
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
        $__internal_c6b918453cecca7ee0826b1feac9c530208712aba3b0a4afcb00a74a77a7fde4 = $this->env->getExtension("native_profiler");
        $__internal_c6b918453cecca7ee0826b1feac9c530208712aba3b0a4afcb00a74a77a7fde4->enter($__internal_c6b918453cecca7ee0826b1feac9c530208712aba3b0a4afcb00a74a77a7fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6b918453cecca7ee0826b1feac9c530208712aba3b0a4afcb00a74a77a7fde4->leave($__internal_c6b918453cecca7ee0826b1feac9c530208712aba3b0a4afcb00a74a77a7fde4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7be0ea1ccced15e58b02395a4d210da67d32c21501378566c04f8203b2033163 = $this->env->getExtension("native_profiler");
        $__internal_7be0ea1ccced15e58b02395a4d210da67d32c21501378566c04f8203b2033163->enter($__internal_7be0ea1ccced15e58b02395a4d210da67d32c21501378566c04f8203b2033163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7be0ea1ccced15e58b02395a4d210da67d32c21501378566c04f8203b2033163->leave($__internal_7be0ea1ccced15e58b02395a4d210da67d32c21501378566c04f8203b2033163_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_812b3d9d3d16ded526ec7c95cea5ab0057bfb36482692ac401f43f0e9a69b886 = $this->env->getExtension("native_profiler");
        $__internal_812b3d9d3d16ded526ec7c95cea5ab0057bfb36482692ac401f43f0e9a69b886->enter($__internal_812b3d9d3d16ded526ec7c95cea5ab0057bfb36482692ac401f43f0e9a69b886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_812b3d9d3d16ded526ec7c95cea5ab0057bfb36482692ac401f43f0e9a69b886->leave($__internal_812b3d9d3d16ded526ec7c95cea5ab0057bfb36482692ac401f43f0e9a69b886_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0521db3f4449e4f9143802fc0dd206b363572a8d16a181e0379846d9fc1a077f = $this->env->getExtension("native_profiler");
        $__internal_0521db3f4449e4f9143802fc0dd206b363572a8d16a181e0379846d9fc1a077f->enter($__internal_0521db3f4449e4f9143802fc0dd206b363572a8d16a181e0379846d9fc1a077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0521db3f4449e4f9143802fc0dd206b363572a8d16a181e0379846d9fc1a077f->leave($__internal_0521db3f4449e4f9143802fc0dd206b363572a8d16a181e0379846d9fc1a077f_prof);

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
