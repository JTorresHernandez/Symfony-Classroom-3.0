<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7af850a47cb9182b1bfe0dc4b54b412f7f4012facd0c52c946b751a0b8a23514 extends Twig_Template
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
        $__internal_2e1be0433ac1545fe932de74c09b5156e4bcdcd8ca9a6a45046445463c31afc6 = $this->env->getExtension("native_profiler");
        $__internal_2e1be0433ac1545fe932de74c09b5156e4bcdcd8ca9a6a45046445463c31afc6->enter($__internal_2e1be0433ac1545fe932de74c09b5156e4bcdcd8ca9a6a45046445463c31afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2e1be0433ac1545fe932de74c09b5156e4bcdcd8ca9a6a45046445463c31afc6->leave($__internal_2e1be0433ac1545fe932de74c09b5156e4bcdcd8ca9a6a45046445463c31afc6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a6f939bd6576a4f1d44e9a5c81d280a5915b9dffe98cc8f7249da0c843477023 = $this->env->getExtension("native_profiler");
        $__internal_a6f939bd6576a4f1d44e9a5c81d280a5915b9dffe98cc8f7249da0c843477023->enter($__internal_a6f939bd6576a4f1d44e9a5c81d280a5915b9dffe98cc8f7249da0c843477023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a6f939bd6576a4f1d44e9a5c81d280a5915b9dffe98cc8f7249da0c843477023->leave($__internal_a6f939bd6576a4f1d44e9a5c81d280a5915b9dffe98cc8f7249da0c843477023_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0e3d1f8526340b7dca460cf68e3b6467647028b4f92464b0183b8fcf2337f3f = $this->env->getExtension("native_profiler");
        $__internal_a0e3d1f8526340b7dca460cf68e3b6467647028b4f92464b0183b8fcf2337f3f->enter($__internal_a0e3d1f8526340b7dca460cf68e3b6467647028b4f92464b0183b8fcf2337f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0e3d1f8526340b7dca460cf68e3b6467647028b4f92464b0183b8fcf2337f3f->leave($__internal_a0e3d1f8526340b7dca460cf68e3b6467647028b4f92464b0183b8fcf2337f3f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e871054b702422b081ed5a4d5c4f66c0acc6d42aff26f57a93f235c3f25eddad = $this->env->getExtension("native_profiler");
        $__internal_e871054b702422b081ed5a4d5c4f66c0acc6d42aff26f57a93f235c3f25eddad->enter($__internal_e871054b702422b081ed5a4d5c4f66c0acc6d42aff26f57a93f235c3f25eddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e871054b702422b081ed5a4d5c4f66c0acc6d42aff26f57a93f235c3f25eddad->leave($__internal_e871054b702422b081ed5a4d5c4f66c0acc6d42aff26f57a93f235c3f25eddad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
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
