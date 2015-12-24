<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_02e836552a519dcf2581364cbdbd72c44b95b4b771927d881c60d81b95481839 extends Twig_Template
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
        $__internal_0b6abe5764a08232829eafbe52cf843062d43cf5312f1f53a617f3473325d117 = $this->env->getExtension("native_profiler");
        $__internal_0b6abe5764a08232829eafbe52cf843062d43cf5312f1f53a617f3473325d117->enter($__internal_0b6abe5764a08232829eafbe52cf843062d43cf5312f1f53a617f3473325d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b6abe5764a08232829eafbe52cf843062d43cf5312f1f53a617f3473325d117->leave($__internal_0b6abe5764a08232829eafbe52cf843062d43cf5312f1f53a617f3473325d117_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b2860ab8d7500945b0c35203391c1beb31b845b29e3e97002d5b432994cd3ec = $this->env->getExtension("native_profiler");
        $__internal_9b2860ab8d7500945b0c35203391c1beb31b845b29e3e97002d5b432994cd3ec->enter($__internal_9b2860ab8d7500945b0c35203391c1beb31b845b29e3e97002d5b432994cd3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9b2860ab8d7500945b0c35203391c1beb31b845b29e3e97002d5b432994cd3ec->leave($__internal_9b2860ab8d7500945b0c35203391c1beb31b845b29e3e97002d5b432994cd3ec_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f66c2e056d64caeceb4359aedeaed6a2c796229ab124c3fb2026eeba93d5e4d8 = $this->env->getExtension("native_profiler");
        $__internal_f66c2e056d64caeceb4359aedeaed6a2c796229ab124c3fb2026eeba93d5e4d8->enter($__internal_f66c2e056d64caeceb4359aedeaed6a2c796229ab124c3fb2026eeba93d5e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f66c2e056d64caeceb4359aedeaed6a2c796229ab124c3fb2026eeba93d5e4d8->leave($__internal_f66c2e056d64caeceb4359aedeaed6a2c796229ab124c3fb2026eeba93d5e4d8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1be1ffcab2c00811b1a696a08e9448f3e1a20682994654a90a0efce2ad77962c = $this->env->getExtension("native_profiler");
        $__internal_1be1ffcab2c00811b1a696a08e9448f3e1a20682994654a90a0efce2ad77962c->enter($__internal_1be1ffcab2c00811b1a696a08e9448f3e1a20682994654a90a0efce2ad77962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1be1ffcab2c00811b1a696a08e9448f3e1a20682994654a90a0efce2ad77962c->leave($__internal_1be1ffcab2c00811b1a696a08e9448f3e1a20682994654a90a0efce2ad77962c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
