<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_4605d145aaffd2fbdde02345d34cb64a4a339b036e7d35ea18adc4033cdbbf7b extends Twig_Template
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
        $__internal_99ee989c560248430ced179e941f571316cbedec53dbc705b75757f4c20b86f3 = $this->env->getExtension("native_profiler");
        $__internal_99ee989c560248430ced179e941f571316cbedec53dbc705b75757f4c20b86f3->enter($__internal_99ee989c560248430ced179e941f571316cbedec53dbc705b75757f4c20b86f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_99ee989c560248430ced179e941f571316cbedec53dbc705b75757f4c20b86f3->leave($__internal_99ee989c560248430ced179e941f571316cbedec53dbc705b75757f4c20b86f3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_229fa9935c41f23a4fe983c3276621decf1266445bdf121cbd66c004f743ab74 = $this->env->getExtension("native_profiler");
        $__internal_229fa9935c41f23a4fe983c3276621decf1266445bdf121cbd66c004f743ab74->enter($__internal_229fa9935c41f23a4fe983c3276621decf1266445bdf121cbd66c004f743ab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_229fa9935c41f23a4fe983c3276621decf1266445bdf121cbd66c004f743ab74->leave($__internal_229fa9935c41f23a4fe983c3276621decf1266445bdf121cbd66c004f743ab74_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2d823e82841de78048cbfedee04dac02e596ec18c70c497456d653e4dc2f442 = $this->env->getExtension("native_profiler");
        $__internal_c2d823e82841de78048cbfedee04dac02e596ec18c70c497456d653e4dc2f442->enter($__internal_c2d823e82841de78048cbfedee04dac02e596ec18c70c497456d653e4dc2f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2d823e82841de78048cbfedee04dac02e596ec18c70c497456d653e4dc2f442->leave($__internal_c2d823e82841de78048cbfedee04dac02e596ec18c70c497456d653e4dc2f442_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e34687f3ad6e4c0f6ae8bf2dc9c659016918f54c178524d920c5c1a6b98d6263 = $this->env->getExtension("native_profiler");
        $__internal_e34687f3ad6e4c0f6ae8bf2dc9c659016918f54c178524d920c5c1a6b98d6263->enter($__internal_e34687f3ad6e4c0f6ae8bf2dc9c659016918f54c178524d920c5c1a6b98d6263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e34687f3ad6e4c0f6ae8bf2dc9c659016918f54c178524d920c5c1a6b98d6263->leave($__internal_e34687f3ad6e4c0f6ae8bf2dc9c659016918f54c178524d920c5c1a6b98d6263_prof);

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
