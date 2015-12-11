<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_157580f1bd9c954c8fe692611417062d4959c41399d1c7fd831d44651f6bdd7a extends Twig_Template
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
        $__internal_52320278872b2f145e2f5cfe1ab7c9b6ba4cd03c9f20e37feb84023a4bbeae27 = $this->env->getExtension("native_profiler");
        $__internal_52320278872b2f145e2f5cfe1ab7c9b6ba4cd03c9f20e37feb84023a4bbeae27->enter($__internal_52320278872b2f145e2f5cfe1ab7c9b6ba4cd03c9f20e37feb84023a4bbeae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_52320278872b2f145e2f5cfe1ab7c9b6ba4cd03c9f20e37feb84023a4bbeae27->leave($__internal_52320278872b2f145e2f5cfe1ab7c9b6ba4cd03c9f20e37feb84023a4bbeae27_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_96daf40825ae8d9e94c4fb14488743724376010b08fa1c8c73612d795014fb5e = $this->env->getExtension("native_profiler");
        $__internal_96daf40825ae8d9e94c4fb14488743724376010b08fa1c8c73612d795014fb5e->enter($__internal_96daf40825ae8d9e94c4fb14488743724376010b08fa1c8c73612d795014fb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_96daf40825ae8d9e94c4fb14488743724376010b08fa1c8c73612d795014fb5e->leave($__internal_96daf40825ae8d9e94c4fb14488743724376010b08fa1c8c73612d795014fb5e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e2934accdf63e02bfc9780434772e0268ba325920aa7979eff7cb16618d58b1 = $this->env->getExtension("native_profiler");
        $__internal_7e2934accdf63e02bfc9780434772e0268ba325920aa7979eff7cb16618d58b1->enter($__internal_7e2934accdf63e02bfc9780434772e0268ba325920aa7979eff7cb16618d58b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e2934accdf63e02bfc9780434772e0268ba325920aa7979eff7cb16618d58b1->leave($__internal_7e2934accdf63e02bfc9780434772e0268ba325920aa7979eff7cb16618d58b1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7261f2ab3e2aea902b6da4d96a97a64e7b25c875b4a438a880b0b8730d039fc8 = $this->env->getExtension("native_profiler");
        $__internal_7261f2ab3e2aea902b6da4d96a97a64e7b25c875b4a438a880b0b8730d039fc8->enter($__internal_7261f2ab3e2aea902b6da4d96a97a64e7b25c875b4a438a880b0b8730d039fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7261f2ab3e2aea902b6da4d96a97a64e7b25c875b4a438a880b0b8730d039fc8->leave($__internal_7261f2ab3e2aea902b6da4d96a97a64e7b25c875b4a438a880b0b8730d039fc8_prof);

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
