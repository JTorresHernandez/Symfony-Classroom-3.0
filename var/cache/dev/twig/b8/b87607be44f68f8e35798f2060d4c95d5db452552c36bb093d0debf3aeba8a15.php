<?php

/* FOSUserBundle:Registration:email.txt.twig */
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
        $__internal_96463b30a9f64518466d1ff6c9b66aaeb4ceb57ec53a677405d8cdd1e467ab7d = $this->env->getExtension("native_profiler");
        $__internal_96463b30a9f64518466d1ff6c9b66aaeb4ceb57ec53a677405d8cdd1e467ab7d->enter($__internal_96463b30a9f64518466d1ff6c9b66aaeb4ceb57ec53a677405d8cdd1e467ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_96463b30a9f64518466d1ff6c9b66aaeb4ceb57ec53a677405d8cdd1e467ab7d->leave($__internal_96463b30a9f64518466d1ff6c9b66aaeb4ceb57ec53a677405d8cdd1e467ab7d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d558c9ea4b5e1ae55b5d6f9e959089b7ea0a52835684e81213b9510ede9b5002 = $this->env->getExtension("native_profiler");
        $__internal_d558c9ea4b5e1ae55b5d6f9e959089b7ea0a52835684e81213b9510ede9b5002->enter($__internal_d558c9ea4b5e1ae55b5d6f9e959089b7ea0a52835684e81213b9510ede9b5002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d558c9ea4b5e1ae55b5d6f9e959089b7ea0a52835684e81213b9510ede9b5002->leave($__internal_d558c9ea4b5e1ae55b5d6f9e959089b7ea0a52835684e81213b9510ede9b5002_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cdf2feebe30374a95998cdde3abb14ff7501610aee017356c91ad49abfc7e3b7 = $this->env->getExtension("native_profiler");
        $__internal_cdf2feebe30374a95998cdde3abb14ff7501610aee017356c91ad49abfc7e3b7->enter($__internal_cdf2feebe30374a95998cdde3abb14ff7501610aee017356c91ad49abfc7e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cdf2feebe30374a95998cdde3abb14ff7501610aee017356c91ad49abfc7e3b7->leave($__internal_cdf2feebe30374a95998cdde3abb14ff7501610aee017356c91ad49abfc7e3b7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5f541521ac57a315aa0b46ed98a60917185b272bcb96e4b3364851e79b3bbc38 = $this->env->getExtension("native_profiler");
        $__internal_5f541521ac57a315aa0b46ed98a60917185b272bcb96e4b3364851e79b3bbc38->enter($__internal_5f541521ac57a315aa0b46ed98a60917185b272bcb96e4b3364851e79b3bbc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5f541521ac57a315aa0b46ed98a60917185b272bcb96e4b3364851e79b3bbc38->leave($__internal_5f541521ac57a315aa0b46ed98a60917185b272bcb96e4b3364851e79b3bbc38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
