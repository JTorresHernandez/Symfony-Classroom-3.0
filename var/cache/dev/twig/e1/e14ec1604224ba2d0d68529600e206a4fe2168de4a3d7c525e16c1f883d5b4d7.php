<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2e3ca63656c051a2e17379392cceb4de7f4513d3e78ae459a92583d25e1a0876 extends Twig_Template
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
        $__internal_db3f93a7c93cb3632b86a8ba5b8baa1c6104689a512c924b7f0b6744e874fd29 = $this->env->getExtension("native_profiler");
        $__internal_db3f93a7c93cb3632b86a8ba5b8baa1c6104689a512c924b7f0b6744e874fd29->enter($__internal_db3f93a7c93cb3632b86a8ba5b8baa1c6104689a512c924b7f0b6744e874fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_db3f93a7c93cb3632b86a8ba5b8baa1c6104689a512c924b7f0b6744e874fd29->leave($__internal_db3f93a7c93cb3632b86a8ba5b8baa1c6104689a512c924b7f0b6744e874fd29_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_95926243ecc6f2ffd2ac830bb8fdf6ca9ae2bd49c7cab868d97eb272df773fe2 = $this->env->getExtension("native_profiler");
        $__internal_95926243ecc6f2ffd2ac830bb8fdf6ca9ae2bd49c7cab868d97eb272df773fe2->enter($__internal_95926243ecc6f2ffd2ac830bb8fdf6ca9ae2bd49c7cab868d97eb272df773fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_95926243ecc6f2ffd2ac830bb8fdf6ca9ae2bd49c7cab868d97eb272df773fe2->leave($__internal_95926243ecc6f2ffd2ac830bb8fdf6ca9ae2bd49c7cab868d97eb272df773fe2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_42e6f191a2cace7900c080a675c5f76e9f95cbc85456f05b22ce3bd2b9068b48 = $this->env->getExtension("native_profiler");
        $__internal_42e6f191a2cace7900c080a675c5f76e9f95cbc85456f05b22ce3bd2b9068b48->enter($__internal_42e6f191a2cace7900c080a675c5f76e9f95cbc85456f05b22ce3bd2b9068b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42e6f191a2cace7900c080a675c5f76e9f95cbc85456f05b22ce3bd2b9068b48->leave($__internal_42e6f191a2cace7900c080a675c5f76e9f95cbc85456f05b22ce3bd2b9068b48_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e06b09b53a61ef3a5528c6f7378219794fcf30d70445ea550a72d3401b4b6af = $this->env->getExtension("native_profiler");
        $__internal_1e06b09b53a61ef3a5528c6f7378219794fcf30d70445ea550a72d3401b4b6af->enter($__internal_1e06b09b53a61ef3a5528c6f7378219794fcf30d70445ea550a72d3401b4b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e06b09b53a61ef3a5528c6f7378219794fcf30d70445ea550a72d3401b4b6af->leave($__internal_1e06b09b53a61ef3a5528c6f7378219794fcf30d70445ea550a72d3401b4b6af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
