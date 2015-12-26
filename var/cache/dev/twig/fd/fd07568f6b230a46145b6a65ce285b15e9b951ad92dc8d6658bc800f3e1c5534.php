<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2dd0d7a42704801856c61a06ae7b23af036e2c3f2ccb9f095413f436fec9fdd5 extends Twig_Template
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
        $__internal_bf7d07d0185956850e357a82ca2639e5119b04a9963d84daefbf37c984b0c24c = $this->env->getExtension("native_profiler");
        $__internal_bf7d07d0185956850e357a82ca2639e5119b04a9963d84daefbf37c984b0c24c->enter($__internal_bf7d07d0185956850e357a82ca2639e5119b04a9963d84daefbf37c984b0c24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bf7d07d0185956850e357a82ca2639e5119b04a9963d84daefbf37c984b0c24c->leave($__internal_bf7d07d0185956850e357a82ca2639e5119b04a9963d84daefbf37c984b0c24c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6be28ebe88ebb1fb30bd800899a7e0c7e78a3f25c1e86e31af73e4846298909b = $this->env->getExtension("native_profiler");
        $__internal_6be28ebe88ebb1fb30bd800899a7e0c7e78a3f25c1e86e31af73e4846298909b->enter($__internal_6be28ebe88ebb1fb30bd800899a7e0c7e78a3f25c1e86e31af73e4846298909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6be28ebe88ebb1fb30bd800899a7e0c7e78a3f25c1e86e31af73e4846298909b->leave($__internal_6be28ebe88ebb1fb30bd800899a7e0c7e78a3f25c1e86e31af73e4846298909b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_78fc89eff06b5095f029a1c948fa5b6bcde598840367b3879ac9966f07330412 = $this->env->getExtension("native_profiler");
        $__internal_78fc89eff06b5095f029a1c948fa5b6bcde598840367b3879ac9966f07330412->enter($__internal_78fc89eff06b5095f029a1c948fa5b6bcde598840367b3879ac9966f07330412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78fc89eff06b5095f029a1c948fa5b6bcde598840367b3879ac9966f07330412->leave($__internal_78fc89eff06b5095f029a1c948fa5b6bcde598840367b3879ac9966f07330412_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b1ae0bb678b2becc9aefc0ac6493c4044d482d8dd0b1be9a472f5354970519e6 = $this->env->getExtension("native_profiler");
        $__internal_b1ae0bb678b2becc9aefc0ac6493c4044d482d8dd0b1be9a472f5354970519e6->enter($__internal_b1ae0bb678b2becc9aefc0ac6493c4044d482d8dd0b1be9a472f5354970519e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1ae0bb678b2becc9aefc0ac6493c4044d482d8dd0b1be9a472f5354970519e6->leave($__internal_b1ae0bb678b2becc9aefc0ac6493c4044d482d8dd0b1be9a472f5354970519e6_prof);

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
