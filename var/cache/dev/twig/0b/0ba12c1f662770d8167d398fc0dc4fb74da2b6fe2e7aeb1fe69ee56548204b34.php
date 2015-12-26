<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_635fcb596190698b630007557de059a1102f5da3882fa42db8b9666399a1ce9e extends Twig_Template
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
        $__internal_c0e19a9577f55c1123ef47c094b6c42ab1ae75b13d4244f675a5c5c6258310bf = $this->env->getExtension("native_profiler");
        $__internal_c0e19a9577f55c1123ef47c094b6c42ab1ae75b13d4244f675a5c5c6258310bf->enter($__internal_c0e19a9577f55c1123ef47c094b6c42ab1ae75b13d4244f675a5c5c6258310bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c0e19a9577f55c1123ef47c094b6c42ab1ae75b13d4244f675a5c5c6258310bf->leave($__internal_c0e19a9577f55c1123ef47c094b6c42ab1ae75b13d4244f675a5c5c6258310bf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aeda2e5a71bbf6da01aabd765b1dd25f9c1fe823c0d10ce4209e13df0dc4bd66 = $this->env->getExtension("native_profiler");
        $__internal_aeda2e5a71bbf6da01aabd765b1dd25f9c1fe823c0d10ce4209e13df0dc4bd66->enter($__internal_aeda2e5a71bbf6da01aabd765b1dd25f9c1fe823c0d10ce4209e13df0dc4bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aeda2e5a71bbf6da01aabd765b1dd25f9c1fe823c0d10ce4209e13df0dc4bd66->leave($__internal_aeda2e5a71bbf6da01aabd765b1dd25f9c1fe823c0d10ce4209e13df0dc4bd66_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_363c84c3c57bb7d2b98bdc0167200369c1df3553905cae441695de9b6807a489 = $this->env->getExtension("native_profiler");
        $__internal_363c84c3c57bb7d2b98bdc0167200369c1df3553905cae441695de9b6807a489->enter($__internal_363c84c3c57bb7d2b98bdc0167200369c1df3553905cae441695de9b6807a489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_363c84c3c57bb7d2b98bdc0167200369c1df3553905cae441695de9b6807a489->leave($__internal_363c84c3c57bb7d2b98bdc0167200369c1df3553905cae441695de9b6807a489_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c604953393af669373b222208118a846d979a54cdffb45ff5d249c59e16b1bf = $this->env->getExtension("native_profiler");
        $__internal_4c604953393af669373b222208118a846d979a54cdffb45ff5d249c59e16b1bf->enter($__internal_4c604953393af669373b222208118a846d979a54cdffb45ff5d249c59e16b1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c604953393af669373b222208118a846d979a54cdffb45ff5d249c59e16b1bf->leave($__internal_4c604953393af669373b222208118a846d979a54cdffb45ff5d249c59e16b1bf_prof);

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
