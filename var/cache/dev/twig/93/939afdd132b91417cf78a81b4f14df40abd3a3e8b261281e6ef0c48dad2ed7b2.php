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
        $__internal_6adbe9f2a9e1416f53f20670f42d714d0f29e56a61090b2ac7743d9149b822b4 = $this->env->getExtension("native_profiler");
        $__internal_6adbe9f2a9e1416f53f20670f42d714d0f29e56a61090b2ac7743d9149b822b4->enter($__internal_6adbe9f2a9e1416f53f20670f42d714d0f29e56a61090b2ac7743d9149b822b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6adbe9f2a9e1416f53f20670f42d714d0f29e56a61090b2ac7743d9149b822b4->leave($__internal_6adbe9f2a9e1416f53f20670f42d714d0f29e56a61090b2ac7743d9149b822b4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_168429ce6431fde095efd9c36af3ac080f5d533b910c82ce2a24b90d2872c782 = $this->env->getExtension("native_profiler");
        $__internal_168429ce6431fde095efd9c36af3ac080f5d533b910c82ce2a24b90d2872c782->enter($__internal_168429ce6431fde095efd9c36af3ac080f5d533b910c82ce2a24b90d2872c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_168429ce6431fde095efd9c36af3ac080f5d533b910c82ce2a24b90d2872c782->leave($__internal_168429ce6431fde095efd9c36af3ac080f5d533b910c82ce2a24b90d2872c782_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e169f23385987ba8a1c3d3d4b722f7fef7f0aee1ad1f534c5ae62dfdc0b62ea6 = $this->env->getExtension("native_profiler");
        $__internal_e169f23385987ba8a1c3d3d4b722f7fef7f0aee1ad1f534c5ae62dfdc0b62ea6->enter($__internal_e169f23385987ba8a1c3d3d4b722f7fef7f0aee1ad1f534c5ae62dfdc0b62ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e169f23385987ba8a1c3d3d4b722f7fef7f0aee1ad1f534c5ae62dfdc0b62ea6->leave($__internal_e169f23385987ba8a1c3d3d4b722f7fef7f0aee1ad1f534c5ae62dfdc0b62ea6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a577e1c58a2b832e3f59984765ac6996d06765d899d4aaa5079d5331a3b9bea6 = $this->env->getExtension("native_profiler");
        $__internal_a577e1c58a2b832e3f59984765ac6996d06765d899d4aaa5079d5331a3b9bea6->enter($__internal_a577e1c58a2b832e3f59984765ac6996d06765d899d4aaa5079d5331a3b9bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a577e1c58a2b832e3f59984765ac6996d06765d899d4aaa5079d5331a3b9bea6->leave($__internal_a577e1c58a2b832e3f59984765ac6996d06765d899d4aaa5079d5331a3b9bea6_prof);

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
