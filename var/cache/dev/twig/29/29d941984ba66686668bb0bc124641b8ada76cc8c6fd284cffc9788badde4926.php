<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_4605d145aaffd2fbdde02345d34cb64a4a339b036e7d35ea18adc4033cdbbf7b extends Twig_Template
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
        $__internal_d98fe9e4d0c166663a8b2ccd8babe053280c3448f7670390a8151e635394e4c7 = $this->env->getExtension("native_profiler");
        $__internal_d98fe9e4d0c166663a8b2ccd8babe053280c3448f7670390a8151e635394e4c7->enter($__internal_d98fe9e4d0c166663a8b2ccd8babe053280c3448f7670390a8151e635394e4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d98fe9e4d0c166663a8b2ccd8babe053280c3448f7670390a8151e635394e4c7->leave($__internal_d98fe9e4d0c166663a8b2ccd8babe053280c3448f7670390a8151e635394e4c7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c00fa38ea68e6aa321e0699395404f777ddfa64d42c232eaf7032d44d8d4c39 = $this->env->getExtension("native_profiler");
        $__internal_6c00fa38ea68e6aa321e0699395404f777ddfa64d42c232eaf7032d44d8d4c39->enter($__internal_6c00fa38ea68e6aa321e0699395404f777ddfa64d42c232eaf7032d44d8d4c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c00fa38ea68e6aa321e0699395404f777ddfa64d42c232eaf7032d44d8d4c39->leave($__internal_6c00fa38ea68e6aa321e0699395404f777ddfa64d42c232eaf7032d44d8d4c39_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2b428cde1028842173af09f5140c5f61df9f751d0428058bc91ed8b44e997c39 = $this->env->getExtension("native_profiler");
        $__internal_2b428cde1028842173af09f5140c5f61df9f751d0428058bc91ed8b44e997c39->enter($__internal_2b428cde1028842173af09f5140c5f61df9f751d0428058bc91ed8b44e997c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2b428cde1028842173af09f5140c5f61df9f751d0428058bc91ed8b44e997c39->leave($__internal_2b428cde1028842173af09f5140c5f61df9f751d0428058bc91ed8b44e997c39_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5611473262248786868cdd88c95f28b539c10974bd1b19b6b896918f782536e6 = $this->env->getExtension("native_profiler");
        $__internal_5611473262248786868cdd88c95f28b539c10974bd1b19b6b896918f782536e6->enter($__internal_5611473262248786868cdd88c95f28b539c10974bd1b19b6b896918f782536e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5611473262248786868cdd88c95f28b539c10974bd1b19b6b896918f782536e6->leave($__internal_5611473262248786868cdd88c95f28b539c10974bd1b19b6b896918f782536e6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
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
