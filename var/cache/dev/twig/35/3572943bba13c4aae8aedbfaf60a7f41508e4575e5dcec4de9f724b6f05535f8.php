<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d1cd269c3ec15a2fe26f77e69903df9cb64dcd74f83e60087ec2940fb447f5a2 extends Twig_Template
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
        $__internal_28bdfc782ec987a1047a9107f5784fac0392ac29d452d6027f301c01dcf9505e = $this->env->getExtension("native_profiler");
        $__internal_28bdfc782ec987a1047a9107f5784fac0392ac29d452d6027f301c01dcf9505e->enter($__internal_28bdfc782ec987a1047a9107f5784fac0392ac29d452d6027f301c01dcf9505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_28bdfc782ec987a1047a9107f5784fac0392ac29d452d6027f301c01dcf9505e->leave($__internal_28bdfc782ec987a1047a9107f5784fac0392ac29d452d6027f301c01dcf9505e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1efde30bea6d6668e10070556095c9d8d741c3ac983e2d43712fe29e0a0cacf0 = $this->env->getExtension("native_profiler");
        $__internal_1efde30bea6d6668e10070556095c9d8d741c3ac983e2d43712fe29e0a0cacf0->enter($__internal_1efde30bea6d6668e10070556095c9d8d741c3ac983e2d43712fe29e0a0cacf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1efde30bea6d6668e10070556095c9d8d741c3ac983e2d43712fe29e0a0cacf0->leave($__internal_1efde30bea6d6668e10070556095c9d8d741c3ac983e2d43712fe29e0a0cacf0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4e25c0c5252e5ed9940e98b8dcbf034143e4f98080c7d7a27a818b224fdc5c76 = $this->env->getExtension("native_profiler");
        $__internal_4e25c0c5252e5ed9940e98b8dcbf034143e4f98080c7d7a27a818b224fdc5c76->enter($__internal_4e25c0c5252e5ed9940e98b8dcbf034143e4f98080c7d7a27a818b224fdc5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e25c0c5252e5ed9940e98b8dcbf034143e4f98080c7d7a27a818b224fdc5c76->leave($__internal_4e25c0c5252e5ed9940e98b8dcbf034143e4f98080c7d7a27a818b224fdc5c76_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e7eecb3589dc7e99bd2c17e6f98c1279bda5a3ec0514b90cdcd6a923c3f48f3 = $this->env->getExtension("native_profiler");
        $__internal_5e7eecb3589dc7e99bd2c17e6f98c1279bda5a3ec0514b90cdcd6a923c3f48f3->enter($__internal_5e7eecb3589dc7e99bd2c17e6f98c1279bda5a3ec0514b90cdcd6a923c3f48f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e7eecb3589dc7e99bd2c17e6f98c1279bda5a3ec0514b90cdcd6a923c3f48f3->leave($__internal_5e7eecb3589dc7e99bd2c17e6f98c1279bda5a3ec0514b90cdcd6a923c3f48f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
