<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_02e836552a519dcf2581364cbdbd72c44b95b4b771927d881c60d81b95481839 extends Twig_Template
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
        $__internal_e2727812c145e1036b8c1f57614267e3b377f0126c0b527b0729817576f85e6f = $this->env->getExtension("native_profiler");
        $__internal_e2727812c145e1036b8c1f57614267e3b377f0126c0b527b0729817576f85e6f->enter($__internal_e2727812c145e1036b8c1f57614267e3b377f0126c0b527b0729817576f85e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2727812c145e1036b8c1f57614267e3b377f0126c0b527b0729817576f85e6f->leave($__internal_e2727812c145e1036b8c1f57614267e3b377f0126c0b527b0729817576f85e6f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_df6666b34e3d97c5a144c1867d79d82b94471ce68dbb0135f17046226700a50d = $this->env->getExtension("native_profiler");
        $__internal_df6666b34e3d97c5a144c1867d79d82b94471ce68dbb0135f17046226700a50d->enter($__internal_df6666b34e3d97c5a144c1867d79d82b94471ce68dbb0135f17046226700a50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_df6666b34e3d97c5a144c1867d79d82b94471ce68dbb0135f17046226700a50d->leave($__internal_df6666b34e3d97c5a144c1867d79d82b94471ce68dbb0135f17046226700a50d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a1034ea1e564ece5c17cafa2d8ddec1af33a890adab235229e44145e8d51b8e6 = $this->env->getExtension("native_profiler");
        $__internal_a1034ea1e564ece5c17cafa2d8ddec1af33a890adab235229e44145e8d51b8e6->enter($__internal_a1034ea1e564ece5c17cafa2d8ddec1af33a890adab235229e44145e8d51b8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a1034ea1e564ece5c17cafa2d8ddec1af33a890adab235229e44145e8d51b8e6->leave($__internal_a1034ea1e564ece5c17cafa2d8ddec1af33a890adab235229e44145e8d51b8e6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_32bbf06b7f7af36e7e4e71fb9d0221850beffca41d2e2b6c36e8a82c144512c4 = $this->env->getExtension("native_profiler");
        $__internal_32bbf06b7f7af36e7e4e71fb9d0221850beffca41d2e2b6c36e8a82c144512c4->enter($__internal_32bbf06b7f7af36e7e4e71fb9d0221850beffca41d2e2b6c36e8a82c144512c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_32bbf06b7f7af36e7e4e71fb9d0221850beffca41d2e2b6c36e8a82c144512c4->leave($__internal_32bbf06b7f7af36e7e4e71fb9d0221850beffca41d2e2b6c36e8a82c144512c4_prof);

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
