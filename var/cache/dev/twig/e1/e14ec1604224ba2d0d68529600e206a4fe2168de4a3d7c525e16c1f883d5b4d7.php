<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2e3ca63656c051a2e17379392cceb4de7f4513d3e78ae459a92583d25e1a0876 extends Twig_Template
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
        $__internal_1a1d90a901bdda0b9ac3c7b55109bcbfb28da6471c3ff4c8f30affcb11088763 = $this->env->getExtension("native_profiler");
        $__internal_1a1d90a901bdda0b9ac3c7b55109bcbfb28da6471c3ff4c8f30affcb11088763->enter($__internal_1a1d90a901bdda0b9ac3c7b55109bcbfb28da6471c3ff4c8f30affcb11088763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1a1d90a901bdda0b9ac3c7b55109bcbfb28da6471c3ff4c8f30affcb11088763->leave($__internal_1a1d90a901bdda0b9ac3c7b55109bcbfb28da6471c3ff4c8f30affcb11088763_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_703342afe67af635d9f14acd49e986e8223263b0e35f593176ddfb852a278786 = $this->env->getExtension("native_profiler");
        $__internal_703342afe67af635d9f14acd49e986e8223263b0e35f593176ddfb852a278786->enter($__internal_703342afe67af635d9f14acd49e986e8223263b0e35f593176ddfb852a278786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_703342afe67af635d9f14acd49e986e8223263b0e35f593176ddfb852a278786->leave($__internal_703342afe67af635d9f14acd49e986e8223263b0e35f593176ddfb852a278786_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c0c9609877dd88d55e12cbba7bb3f4753a7f3ea35e190dbdc429811dde5dbbb6 = $this->env->getExtension("native_profiler");
        $__internal_c0c9609877dd88d55e12cbba7bb3f4753a7f3ea35e190dbdc429811dde5dbbb6->enter($__internal_c0c9609877dd88d55e12cbba7bb3f4753a7f3ea35e190dbdc429811dde5dbbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c0c9609877dd88d55e12cbba7bb3f4753a7f3ea35e190dbdc429811dde5dbbb6->leave($__internal_c0c9609877dd88d55e12cbba7bb3f4753a7f3ea35e190dbdc429811dde5dbbb6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6a6a8b2490197bd6c104eeae31b844d1cc6cd1314b2a40e9a7c1484f1d372c49 = $this->env->getExtension("native_profiler");
        $__internal_6a6a8b2490197bd6c104eeae31b844d1cc6cd1314b2a40e9a7c1484f1d372c49->enter($__internal_6a6a8b2490197bd6c104eeae31b844d1cc6cd1314b2a40e9a7c1484f1d372c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6a6a8b2490197bd6c104eeae31b844d1cc6cd1314b2a40e9a7c1484f1d372c49->leave($__internal_6a6a8b2490197bd6c104eeae31b844d1cc6cd1314b2a40e9a7c1484f1d372c49_prof);

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
