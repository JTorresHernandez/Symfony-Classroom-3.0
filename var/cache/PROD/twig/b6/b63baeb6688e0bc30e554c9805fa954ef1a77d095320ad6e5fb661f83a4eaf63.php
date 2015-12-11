<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6c07b61240d88dacf84d72df675f8099b75b77aa62b36ae5adc83e2b277e3370 extends Twig_Template
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
        $__internal_08f982b6a0cb82cd7412f8308a52fcf82c9bb521f78e75ca31c2543e839013ba = $this->env->getExtension("native_profiler");
        $__internal_08f982b6a0cb82cd7412f8308a52fcf82c9bb521f78e75ca31c2543e839013ba->enter($__internal_08f982b6a0cb82cd7412f8308a52fcf82c9bb521f78e75ca31c2543e839013ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_08f982b6a0cb82cd7412f8308a52fcf82c9bb521f78e75ca31c2543e839013ba->leave($__internal_08f982b6a0cb82cd7412f8308a52fcf82c9bb521f78e75ca31c2543e839013ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0238f8e9ccd14541dd7cfd2dfa42260fae25539ba6eeb9de1f6dbee84ba937e0 = $this->env->getExtension("native_profiler");
        $__internal_0238f8e9ccd14541dd7cfd2dfa42260fae25539ba6eeb9de1f6dbee84ba937e0->enter($__internal_0238f8e9ccd14541dd7cfd2dfa42260fae25539ba6eeb9de1f6dbee84ba937e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0238f8e9ccd14541dd7cfd2dfa42260fae25539ba6eeb9de1f6dbee84ba937e0->leave($__internal_0238f8e9ccd14541dd7cfd2dfa42260fae25539ba6eeb9de1f6dbee84ba937e0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e632777da8b68a6183cad3e08c20b10dbdffd78ca33a4dd4ce55f2b548d0b28c = $this->env->getExtension("native_profiler");
        $__internal_e632777da8b68a6183cad3e08c20b10dbdffd78ca33a4dd4ce55f2b548d0b28c->enter($__internal_e632777da8b68a6183cad3e08c20b10dbdffd78ca33a4dd4ce55f2b548d0b28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e632777da8b68a6183cad3e08c20b10dbdffd78ca33a4dd4ce55f2b548d0b28c->leave($__internal_e632777da8b68a6183cad3e08c20b10dbdffd78ca33a4dd4ce55f2b548d0b28c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_11a85cec5633c2c3e081627489d078e682e4265eb8d0f28621b41d943221dcdb = $this->env->getExtension("native_profiler");
        $__internal_11a85cec5633c2c3e081627489d078e682e4265eb8d0f28621b41d943221dcdb->enter($__internal_11a85cec5633c2c3e081627489d078e682e4265eb8d0f28621b41d943221dcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_11a85cec5633c2c3e081627489d078e682e4265eb8d0f28621b41d943221dcdb->leave($__internal_11a85cec5633c2c3e081627489d078e682e4265eb8d0f28621b41d943221dcdb_prof);

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
