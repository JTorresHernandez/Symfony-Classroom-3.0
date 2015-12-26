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
        $__internal_a5c8994f641d25810b467e8ca7b1dab6adfab1433b93ace5c9bdec12c2879dd2 = $this->env->getExtension("native_profiler");
        $__internal_a5c8994f641d25810b467e8ca7b1dab6adfab1433b93ace5c9bdec12c2879dd2->enter($__internal_a5c8994f641d25810b467e8ca7b1dab6adfab1433b93ace5c9bdec12c2879dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5c8994f641d25810b467e8ca7b1dab6adfab1433b93ace5c9bdec12c2879dd2->leave($__internal_a5c8994f641d25810b467e8ca7b1dab6adfab1433b93ace5c9bdec12c2879dd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a6a08982a8ac617a9ba81092077e617cb70b060ed9972c9d60d070172598225f = $this->env->getExtension("native_profiler");
        $__internal_a6a08982a8ac617a9ba81092077e617cb70b060ed9972c9d60d070172598225f->enter($__internal_a6a08982a8ac617a9ba81092077e617cb70b060ed9972c9d60d070172598225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a6a08982a8ac617a9ba81092077e617cb70b060ed9972c9d60d070172598225f->leave($__internal_a6a08982a8ac617a9ba81092077e617cb70b060ed9972c9d60d070172598225f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_31e3aaf224371e0d4dd4c0242f5b5b58f01c434ba6b36000b9c5eb123c7304cd = $this->env->getExtension("native_profiler");
        $__internal_31e3aaf224371e0d4dd4c0242f5b5b58f01c434ba6b36000b9c5eb123c7304cd->enter($__internal_31e3aaf224371e0d4dd4c0242f5b5b58f01c434ba6b36000b9c5eb123c7304cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31e3aaf224371e0d4dd4c0242f5b5b58f01c434ba6b36000b9c5eb123c7304cd->leave($__internal_31e3aaf224371e0d4dd4c0242f5b5b58f01c434ba6b36000b9c5eb123c7304cd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_02da90f7fefdf2c3dee22a0e0049a887eaa2aa6cbc583a7255c197bf039aac81 = $this->env->getExtension("native_profiler");
        $__internal_02da90f7fefdf2c3dee22a0e0049a887eaa2aa6cbc583a7255c197bf039aac81->enter($__internal_02da90f7fefdf2c3dee22a0e0049a887eaa2aa6cbc583a7255c197bf039aac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_02da90f7fefdf2c3dee22a0e0049a887eaa2aa6cbc583a7255c197bf039aac81->leave($__internal_02da90f7fefdf2c3dee22a0e0049a887eaa2aa6cbc583a7255c197bf039aac81_prof);

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
