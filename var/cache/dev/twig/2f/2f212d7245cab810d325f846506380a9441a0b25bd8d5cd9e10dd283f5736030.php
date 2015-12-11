<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_85291f82440eae9c3dc937d418684de7c33fe1b25f3ce2116fb3588d06de2a31 extends Twig_Template
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
        $__internal_bb3de3a85bee746cba303329c8eab1bc5e8a3341cf7d0a5230464ccb37ae3408 = $this->env->getExtension("native_profiler");
        $__internal_bb3de3a85bee746cba303329c8eab1bc5e8a3341cf7d0a5230464ccb37ae3408->enter($__internal_bb3de3a85bee746cba303329c8eab1bc5e8a3341cf7d0a5230464ccb37ae3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bb3de3a85bee746cba303329c8eab1bc5e8a3341cf7d0a5230464ccb37ae3408->leave($__internal_bb3de3a85bee746cba303329c8eab1bc5e8a3341cf7d0a5230464ccb37ae3408_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e46eeaa2a0b5d05a6874b23c41c208aa98047c81bf46d67b9368ce7936f2c5f2 = $this->env->getExtension("native_profiler");
        $__internal_e46eeaa2a0b5d05a6874b23c41c208aa98047c81bf46d67b9368ce7936f2c5f2->enter($__internal_e46eeaa2a0b5d05a6874b23c41c208aa98047c81bf46d67b9368ce7936f2c5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e46eeaa2a0b5d05a6874b23c41c208aa98047c81bf46d67b9368ce7936f2c5f2->leave($__internal_e46eeaa2a0b5d05a6874b23c41c208aa98047c81bf46d67b9368ce7936f2c5f2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_999fa0b151dce10828bed96bdd38046dad970b4de5bf40be08b1831dce0d9f93 = $this->env->getExtension("native_profiler");
        $__internal_999fa0b151dce10828bed96bdd38046dad970b4de5bf40be08b1831dce0d9f93->enter($__internal_999fa0b151dce10828bed96bdd38046dad970b4de5bf40be08b1831dce0d9f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_999fa0b151dce10828bed96bdd38046dad970b4de5bf40be08b1831dce0d9f93->leave($__internal_999fa0b151dce10828bed96bdd38046dad970b4de5bf40be08b1831dce0d9f93_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f3acdbfce8206920e5a652278c669acc859bb467fcea2d9421cc7b6d2b67367a = $this->env->getExtension("native_profiler");
        $__internal_f3acdbfce8206920e5a652278c669acc859bb467fcea2d9421cc7b6d2b67367a->enter($__internal_f3acdbfce8206920e5a652278c669acc859bb467fcea2d9421cc7b6d2b67367a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f3acdbfce8206920e5a652278c669acc859bb467fcea2d9421cc7b6d2b67367a->leave($__internal_f3acdbfce8206920e5a652278c669acc859bb467fcea2d9421cc7b6d2b67367a_prof);

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
