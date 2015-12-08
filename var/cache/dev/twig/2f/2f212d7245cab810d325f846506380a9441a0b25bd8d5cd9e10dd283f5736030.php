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
        $__internal_1d535134a621cfc34ceaec0cba1a8abcf756dba7559b4dacc856aa93b0eed081 = $this->env->getExtension("native_profiler");
        $__internal_1d535134a621cfc34ceaec0cba1a8abcf756dba7559b4dacc856aa93b0eed081->enter($__internal_1d535134a621cfc34ceaec0cba1a8abcf756dba7559b4dacc856aa93b0eed081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1d535134a621cfc34ceaec0cba1a8abcf756dba7559b4dacc856aa93b0eed081->leave($__internal_1d535134a621cfc34ceaec0cba1a8abcf756dba7559b4dacc856aa93b0eed081_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2ab8d0b228d8ccd86346759611888eaa8346baa121721a659dcb59027b76cf80 = $this->env->getExtension("native_profiler");
        $__internal_2ab8d0b228d8ccd86346759611888eaa8346baa121721a659dcb59027b76cf80->enter($__internal_2ab8d0b228d8ccd86346759611888eaa8346baa121721a659dcb59027b76cf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2ab8d0b228d8ccd86346759611888eaa8346baa121721a659dcb59027b76cf80->leave($__internal_2ab8d0b228d8ccd86346759611888eaa8346baa121721a659dcb59027b76cf80_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0450228798147cf62d80bd9f806bae686813194ec8143f7317bd4183ed9b6f9f = $this->env->getExtension("native_profiler");
        $__internal_0450228798147cf62d80bd9f806bae686813194ec8143f7317bd4183ed9b6f9f->enter($__internal_0450228798147cf62d80bd9f806bae686813194ec8143f7317bd4183ed9b6f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0450228798147cf62d80bd9f806bae686813194ec8143f7317bd4183ed9b6f9f->leave($__internal_0450228798147cf62d80bd9f806bae686813194ec8143f7317bd4183ed9b6f9f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_681cb6be3810f7097c8156bb7f3d552fb6d0f7991e6a0a62005c4e15989f8b0d = $this->env->getExtension("native_profiler");
        $__internal_681cb6be3810f7097c8156bb7f3d552fb6d0f7991e6a0a62005c4e15989f8b0d->enter($__internal_681cb6be3810f7097c8156bb7f3d552fb6d0f7991e6a0a62005c4e15989f8b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_681cb6be3810f7097c8156bb7f3d552fb6d0f7991e6a0a62005c4e15989f8b0d->leave($__internal_681cb6be3810f7097c8156bb7f3d552fb6d0f7991e6a0a62005c4e15989f8b0d_prof);

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
