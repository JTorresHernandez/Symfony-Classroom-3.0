<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4bfbe29d0aad7053a16b5af0b82a614ce770c8890e7af97b68c93269afd9a850 extends Twig_Template
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
        $__internal_d8403784cb456f1c051ccf0e29c40a1eb4805200cf6a16b3b6042e2304e921da = $this->env->getExtension("native_profiler");
        $__internal_d8403784cb456f1c051ccf0e29c40a1eb4805200cf6a16b3b6042e2304e921da->enter($__internal_d8403784cb456f1c051ccf0e29c40a1eb4805200cf6a16b3b6042e2304e921da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8403784cb456f1c051ccf0e29c40a1eb4805200cf6a16b3b6042e2304e921da->leave($__internal_d8403784cb456f1c051ccf0e29c40a1eb4805200cf6a16b3b6042e2304e921da_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b17b496cc1749585bd799e96eaae37c118099fc2a1e6c8e15e26f014cd9f93f8 = $this->env->getExtension("native_profiler");
        $__internal_b17b496cc1749585bd799e96eaae37c118099fc2a1e6c8e15e26f014cd9f93f8->enter($__internal_b17b496cc1749585bd799e96eaae37c118099fc2a1e6c8e15e26f014cd9f93f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b17b496cc1749585bd799e96eaae37c118099fc2a1e6c8e15e26f014cd9f93f8->leave($__internal_b17b496cc1749585bd799e96eaae37c118099fc2a1e6c8e15e26f014cd9f93f8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1a0158ead374402e3a5c9f2e8c55a0bdb056960873042215d4835cca50e72904 = $this->env->getExtension("native_profiler");
        $__internal_1a0158ead374402e3a5c9f2e8c55a0bdb056960873042215d4835cca50e72904->enter($__internal_1a0158ead374402e3a5c9f2e8c55a0bdb056960873042215d4835cca50e72904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a0158ead374402e3a5c9f2e8c55a0bdb056960873042215d4835cca50e72904->leave($__internal_1a0158ead374402e3a5c9f2e8c55a0bdb056960873042215d4835cca50e72904_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6af0e2af413bdb6d3ce5da6fdae58f7a2f2fff71353ca0aa54252664c259298b = $this->env->getExtension("native_profiler");
        $__internal_6af0e2af413bdb6d3ce5da6fdae58f7a2f2fff71353ca0aa54252664c259298b->enter($__internal_6af0e2af413bdb6d3ce5da6fdae58f7a2f2fff71353ca0aa54252664c259298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6af0e2af413bdb6d3ce5da6fdae58f7a2f2fff71353ca0aa54252664c259298b->leave($__internal_6af0e2af413bdb6d3ce5da6fdae58f7a2f2fff71353ca0aa54252664c259298b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
