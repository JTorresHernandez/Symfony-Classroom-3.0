<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c8a2dbdfda39aec625d4d0e2295c7b99783cdc496fdf4eb459fc3cb117a789b8 extends Twig_Template
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
        $__internal_a6015dc8d4ff44d2f8b04860fc3f7b8138b7a097c1d2487529325e61a44f4549 = $this->env->getExtension("native_profiler");
        $__internal_a6015dc8d4ff44d2f8b04860fc3f7b8138b7a097c1d2487529325e61a44f4549->enter($__internal_a6015dc8d4ff44d2f8b04860fc3f7b8138b7a097c1d2487529325e61a44f4549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a6015dc8d4ff44d2f8b04860fc3f7b8138b7a097c1d2487529325e61a44f4549->leave($__internal_a6015dc8d4ff44d2f8b04860fc3f7b8138b7a097c1d2487529325e61a44f4549_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ddf04d224f1a51b5e4c8ca2d72c490600e59c8264a20f76b6d5a418098eab79 = $this->env->getExtension("native_profiler");
        $__internal_4ddf04d224f1a51b5e4c8ca2d72c490600e59c8264a20f76b6d5a418098eab79->enter($__internal_4ddf04d224f1a51b5e4c8ca2d72c490600e59c8264a20f76b6d5a418098eab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4ddf04d224f1a51b5e4c8ca2d72c490600e59c8264a20f76b6d5a418098eab79->leave($__internal_4ddf04d224f1a51b5e4c8ca2d72c490600e59c8264a20f76b6d5a418098eab79_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41610e5a9d1743dacee06c5f7fb6739eae2f5c723f48241e457d8b0cd0b5f43d = $this->env->getExtension("native_profiler");
        $__internal_41610e5a9d1743dacee06c5f7fb6739eae2f5c723f48241e457d8b0cd0b5f43d->enter($__internal_41610e5a9d1743dacee06c5f7fb6739eae2f5c723f48241e457d8b0cd0b5f43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41610e5a9d1743dacee06c5f7fb6739eae2f5c723f48241e457d8b0cd0b5f43d->leave($__internal_41610e5a9d1743dacee06c5f7fb6739eae2f5c723f48241e457d8b0cd0b5f43d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd631199bff29a4f50499bcaa873556180e1cdac4f5f99b523164e09062d4655 = $this->env->getExtension("native_profiler");
        $__internal_fd631199bff29a4f50499bcaa873556180e1cdac4f5f99b523164e09062d4655->enter($__internal_fd631199bff29a4f50499bcaa873556180e1cdac4f5f99b523164e09062d4655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd631199bff29a4f50499bcaa873556180e1cdac4f5f99b523164e09062d4655->leave($__internal_fd631199bff29a4f50499bcaa873556180e1cdac4f5f99b523164e09062d4655_prof);

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
