<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3a435ee46c08cdde6376bb0195b91616c73a24810d1d43e88013372d84fada74 extends Twig_Template
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
        $__internal_7d3f8c4fe1e9ef63a21107cfba0b36e0790ae5394a3a17b081b9440939a1c00a = $this->env->getExtension("native_profiler");
        $__internal_7d3f8c4fe1e9ef63a21107cfba0b36e0790ae5394a3a17b081b9440939a1c00a->enter($__internal_7d3f8c4fe1e9ef63a21107cfba0b36e0790ae5394a3a17b081b9440939a1c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d3f8c4fe1e9ef63a21107cfba0b36e0790ae5394a3a17b081b9440939a1c00a->leave($__internal_7d3f8c4fe1e9ef63a21107cfba0b36e0790ae5394a3a17b081b9440939a1c00a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_42b4744def41f9fe2dfdc06e2ef942a54d26cb2a9501e2cf7b0ea3ad04214300 = $this->env->getExtension("native_profiler");
        $__internal_42b4744def41f9fe2dfdc06e2ef942a54d26cb2a9501e2cf7b0ea3ad04214300->enter($__internal_42b4744def41f9fe2dfdc06e2ef942a54d26cb2a9501e2cf7b0ea3ad04214300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42b4744def41f9fe2dfdc06e2ef942a54d26cb2a9501e2cf7b0ea3ad04214300->leave($__internal_42b4744def41f9fe2dfdc06e2ef942a54d26cb2a9501e2cf7b0ea3ad04214300_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f11223bae61252a39f874ebe2724c08aff656df3cfcae18a4ce72f6e51adc2b2 = $this->env->getExtension("native_profiler");
        $__internal_f11223bae61252a39f874ebe2724c08aff656df3cfcae18a4ce72f6e51adc2b2->enter($__internal_f11223bae61252a39f874ebe2724c08aff656df3cfcae18a4ce72f6e51adc2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f11223bae61252a39f874ebe2724c08aff656df3cfcae18a4ce72f6e51adc2b2->leave($__internal_f11223bae61252a39f874ebe2724c08aff656df3cfcae18a4ce72f6e51adc2b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd353e87d1cae8b5a73553dc214e02ba9e6d6c315f1b936a301b1535c570529f = $this->env->getExtension("native_profiler");
        $__internal_bd353e87d1cae8b5a73553dc214e02ba9e6d6c315f1b936a301b1535c570529f->enter($__internal_bd353e87d1cae8b5a73553dc214e02ba9e6d6c315f1b936a301b1535c570529f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd353e87d1cae8b5a73553dc214e02ba9e6d6c315f1b936a301b1535c570529f->leave($__internal_bd353e87d1cae8b5a73553dc214e02ba9e6d6c315f1b936a301b1535c570529f_prof);

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
